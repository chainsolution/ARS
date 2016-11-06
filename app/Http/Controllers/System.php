<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Illuminate\Support\Facades\Input;

use Illuminate\Pagination\Paginator;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Pagination\LengthAwarePaginator;

use View;

use Log;

use Illuminate\Support\Facades\Mail;

class System extends Controller
{

    public function logout()
    {
        session_start();
        session_destroy();
        Log::debug('logout function work properly');
        return redirect('/');
    }
    public function checkSession() {
      session_start();
      if(empty($_SESSION['username']))
      {
          $flag=0;
          return view ('Login', compact('flag'));
      }
      else
      {
          return redirect('/Menu');
      }
    }
    public function individual()
    {
      session_start();
      if(empty($_SESSION['username']))
      {
          return redirect('/');
      }
      else
      {
          $name = $_SESSION['username'];
          return view('Registration');
      }
    }
    public function RequestSearch(Request $request) {
      //search function
      DB::beginTransaction();
      try{
        $bukken_name = $request->bukken_name;
        $from_period = $request->from_period;
        $to_period = $request->to_period;
        $room_no = $request->room_no;
        if(empty($bukken_name))
            $bukken_name = null;
        if(empty($room_no))
            $room_no = null;
        $field_info = array(trim($bukken_name), trim($room_no), $from_period, $to_period);

        //to display the record from period to period only
        if (!isset($bukken_name) && empty($room_no)) {
          $join_personal_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator', 'application_header.app_otu_no', '=', 'applicator.app_otu_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator.name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->orderBy('application_header.app_no', 'asc')->get();
          $join_cooperation_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator_company', 'application_header.app_otu_company_no', '=', 'applicator_company.app_otu_company_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator_company.company_name AS name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->orderBy('application_header.app_no', 'asc')->get();
        } else {
          if(empty($bukken_name))
            $bukken_name = ' ';
          if(empty($room_no))
            $room_no = ' ';

          $join_personal_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator', 'application_header.app_otu_no', '=', 'applicator.app_otu_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator.name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->where(function($query) use ($bukken_name, $room_no){ $query->where('bukken_name', 'ilike', $bukken_name.'%')->orWhere('bukken_name', 'ilike', '%'.$bukken_name)->orWhere('bukken_name', 'ilike', '%'.$bukken_name.'%')->orWhere('room_no', 'LIKE', $room_no)->orWhere('room_no', 'LIKE', $room_no.'%')->orWhere('room_no', 'LIKE', '%'.$room_no)->orWhere('room_no', 'LIKE', '%'.$room_no.'%'); })->orderBy('application_header.app_no', 'asc')->get();
          $join_cooperation_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator_company', 'application_header.app_otu_company_no', '=', 'applicator_company.app_otu_company_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator_company.company_name AS name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->where(function($query) use($bukken_name, $room_no) { $query->where('bukken_name', 'ilike', $bukken_name.'%')->orWhere('bukken_name', 'ilike', '%'.$bukken_name)->orWhere('bukken_name', 'ilike', '%'.$bukken_name.'%')->orWhere('room_no', 'LIKE', $room_no)->orWhere('room_no', 'LIKE', $room_no.'%')->orWhere('room_no', 'LIKE', '%'.$room_no)->orWhere('room_no', 'LIKE', '%'.$room_no.'%');})->orderBy('application_header.app_no', 'asc')->get();
        }
        // Log::debug('Search Query Work properly');
        DB::commit();
        $result = array_merge($join_personal_table, $join_cooperation_table);
        sort($result);
        $record_found = sizeof($result);
        //start pagination
   	    $page = Input::get('page', 1); // Get the current page or default to 1
   	    $perPage = 50;
   	    $offset = ($page * $perPage) - $perPage;
   	    $paginate = new LengthAwarePaginator(array_slice($result, $offset, $perPage, true), count($result), $perPage, $page, ['path' => $request->url(), 'query' => $request->query()]);
        // Log::debug('RequestSearch function work properly');
   	    return view ('SearchResult', ['paginate' => $paginate])->with('field_info', $field_info)->with('record_found', $record_found)->with('from_period', $from_period)->with('to_period', $to_period);
      }
      catch(\Exception $e)
     {
       //Database error exception handling
        DB::rollback();
        $error = $e->getMessage();
        return view('Error');
     }

    }
    public function downloadcsv($bukken_name, $room_no, $from_period, $to_period) {
      //to download csv function
      DB::beginTransaction();
      try{
        //to display the record from period to period only
        if (strcmp($bukken_name, '+')==0 && strcmp($room_no, '+')==0) {
          $join_personal_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator', 'application_header.app_otu_no', '=', 'applicator.app_otu_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator.name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->orderBy('application_header.app_no', 'asc')->get();
          $join_cooperation_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator_company', 'application_header.app_otu_company_no', '=', 'applicator_company.app_otu_company_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator_company.company_name AS name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->orderBy('application_header.app_no', 'asc')->get();
        } else {
          $join_personal_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator', 'application_header.app_otu_no', '=', 'applicator.app_otu_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator.name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->where(function($query) use ($bukken_name, $room_no){ $query->where('bukken_name', 'ilike', $bukken_name.'%')->orWhere('bukken_name', 'ilike', '%'.$bukken_name)->orWhere('bukken_name', 'ilike', '%'.$bukken_name.'%')->orWhere('room_no', 'LIKE', $room_no)->orWhere('room_no', 'LIKE', $room_no.'%')->orWhere('room_no', 'LIKE', '%'.$room_no)->orWhere('room_no', 'LIKE', '%'.$room_no.'%'); })->orderBy('application_header.app_no', 'asc')->get();
          $join_cooperation_table = DB::table('application_body')->join('application_header', 'application_body.app_body_no', '=', 'application_header.app_body_no')->join('review_result', 'application_header.app_no', '=', 'review_result.app_no')->join('applicator_company', 'application_header.app_otu_company_no', '=', 'applicator_company.app_otu_company_no')->select('application_header.app_no', 'application_body.bukken_name', 'application_body.room_no', 'applicator_company.company_name AS name')->whereBetween('review_result.updated_at', array($from_period.'-01-01', $to_period.'-12-31'))->where(function($query) use($bukken_name, $room_no) { $query->where('bukken_name', 'ilike', $bukken_name.'%')->orWhere('bukken_name', 'ilike', '%'.$bukken_name)->orWhere('bukken_name', 'ilike', '%'.$bukken_name.'%')->orWhere('room_no', 'LIKE', $room_no)->orWhere('room_no', 'LIKE', $room_no.'%')->orWhere('room_no', 'LIKE', '%'.$room_no)->orWhere('room_no', 'LIKE', '%'.$room_no.'%');})->orderBy('application_header.app_no', 'asc')->get();
        }
        DB::commit();
           	$result = array_merge($join_personal_table, $join_cooperation_table);
            sort($result);
            $filename = "search-result.csv";
            $handle = fopen($filename, 'w+');
            fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
            fputcsv($handle, array('申込者名','申込物件名','号室', 'リスクスコア', '2ヶ月以上滞納確率', 'リスク区分'));
            foreach($result as $item) {
                fputcsv($handle, array($item->name, $item->bukken_name, $item->room_no, '', '', '')); //risk_score, probability and risk class values are blank
            }
            fclose($handle);
            $headers = array(
                'Content-Type' => 'text/csv; charset: utf-8',
                'Content-Encoding' => 'UTF-8',
                'Pragma' => 'public',
                'Expires' => '0',
                'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
                'Cache-Control' => 'private',
                'Content-Disposition' => 'attachment; filename="'.$filename.'"',
                'Content-Transfer-Encoding' => 'binary',
                'Content-Description' => 'File Transfer',
            );
            // Log::debug('downloadcsv function work properly');
            return response()->download($filename, 'search-result.csv', $headers);
      }
      catch(\Exception $e)
     {
       //Database error exception handling
        DB::rollback();
        $error = $e->getMessage();
        return view('Error');
     }
    }
    public function ReviewResult($id,$route)
    {
      DB::beginTransaction();
      try{
        $Arr = DB::table('application_header')->where('app_no','=',$id)->get();
        if($Arr[0]->app_otu_no==null)
        {
          //Corperate Section
          $AppBodys = DB::table('application_body')->where('app_body_no','=',$Arr[0]->app_body_no)->get();
          $AppComs = DB::table('applicator_company')->where('app_otu_company_no','=',$Arr[0]->app_otu_company_no)->get();
          $AppCosigner = DB::table('application_cosigner')->where('app_cosigner_no','=',$Arr[0]->app_consigner_no)->get();
          $AppOthers = DB::table('application_others')->where('app_other_no','=',$Arr[0]->app_others_no)->get();
          DB::commit();
          // Log::debug('ReviewResult function in true condition work properly');
          return view ('ReviewCorperateResult')->with('AppComs', $AppComs)->with('AppCosigner', $AppCosigner)->with('AppOthers', $AppOthers)->with('AppBodys', $AppBodys)->with('route',$route);
        }
        else {
          //Personal Section
        	$AppBodys = DB::table('application_body')->where('app_body_no','=',$Arr[0]->app_body_no)->get();
          $AppPersonal = DB::table('applicator')->where('app_otu_no','=',$Arr[0]->app_otu_no)->get();
          $AppContact = DB::table('application_contact')->where('app_contact_no','=',$Arr[0]->app_contact_no)->get();
          $AppOthers = DB::table('application_others')->where('app_other_no','=',$Arr[0]->app_others_no)->get();
          // Log::debug('ReviewResult function in false condition work properly');
          DB::commit();
          return view ('ReviewPersonalResult')->with('AppPersonal', $AppPersonal)->with('AppContact', $AppContact)->with('AppOthers', $AppOthers)->with('AppBodys', $AppBodys)->with('route',$route);
        }
      }
      catch(\Exception $e)
      {
       //Database error exception handling
        DB::rollback();
        $error = $e->getMessage();
        return view('Error');
      }
    }
    public function sendmail(Request $request) {
      $user_id = $request->userid;
      $body_from_form = $request->mailBody;
      $user_subject_form = $request->mailSubject;
      $message_sent = 'メッセージは送信されました。';
      $data = array("body"=>$body_from_form, "subject"=>$user_subject_form, "userid"=>$user_id);
      Mail::send('emails.MailBody', $data, function($message){
        $message->to('naoki.fukaya@gspi.co.jp')
                ->from('arsgriffin@gmail.com')
                ->subject('ARS Message');
      });
      // Log::debug('sendmail function work properly');
      return view ('ContactAdmin')->with('message_sent', $message_sent);
    }
}
