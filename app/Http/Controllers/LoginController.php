<?php

        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        use App\Http\Requests;

        use DB;
        use Mockery\CountValidator\Exception;
        use Log;

class LoginController extends Controller {
    public function UserAuthentication(Request $request) {
      try{
        DB::beginTransaction ();
        try {
            /*
            Getting password from login input and convert it into sha1. Then compare it with record in password column
            If it is true, session will be created and log into Menu page. If not, it will display message in Login page.
            */
            $name = $request -> name;
            $password = $request -> password;
            $password = sha1($password);
            $result = DB::table ('User')->where('user_name', '=', $name)->pluck('password');
            DB::commit ();
            $db_pass = implode("", $result);
            if (strcmp($password, $db_pass) == 0) {
                session_start();
                $_SESSION['timestamp'] = time();
                $_SESSION['username'] = $name;
                // Log::debug('UserAuthentication function with true condition work properly');
                return redirect('/Menu');

            } else {
              // Log::debug('UserAuthentication function with false condition work properly');
                $flag = 1;
                return view('/Login', compact('flag'));
            }
        }
        catch(\Exception $e)
       {
         //Database error exception handling
          DB::rollback();
          $error = $e->getMessage();
          return view('Error',compact('error'));
       }
      }
      catch(\Exception $e)
     {
       //Database error exception handling
        DB::rollback();
        $error = $e->getMessage();
        $code = $e->getStatusCode();
        return view('Error',compact('error'))->with('code',$code);
     }

    }

    public function Menu() {
       /*
       Check whether session is available or not. If not redirect to default page(Login). It there is session
       go to Menu page.
       */
        session_start();
        if (empty($_SESSION['username'])) {
          // Log::debug('Menu function with true condition work properly');
            return redirect('/');
        } else {
          // Log::debug('Loing function with false condition work properly');
            $name = $_SESSION['username'];
            return view('Menu', compact('name'));
        }
    }

    public function RequestLogin() {
      /*
      Check whether session is available or not. If not redirect to default page(Login). It there is session
      go to Menu page.
      */
        session_start();
        if (empty($_SESSION['username'])) {
            $flag = 0;
            return view('Login', compact('flag'));
        } else {
            return redirect('/Menu');
        }
    }

}
?>
