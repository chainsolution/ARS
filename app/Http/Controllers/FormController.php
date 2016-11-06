<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use View;
use Storage;
use DB;
use Illuminate\Contracts\Filesystem\Filesystem;
use File;
use Illuminate\Http\Response;
use Log;

class FormController extends Controller
{

    public function PersonalForm(Request $request, Filesystem $filesystem)
    {

      DB::beginTransaction();
      try{
        //////////////////////////////Individual//////////////////////////////
          /* Personal Information */

        $ContractType = $request->contract_type;
        $OccupationYear = $request->occupacy_year;
        $OccupationMonth = $request->occupacy_month;
        $OccupationDay = $request->occupacy_date;

        $OccupationDate = $OccupationYear.$OccupationMonth.$OccupationDay;
        $OccupationStatus = $request->occupacy_status;
        //Artical Location Section
        $PostalCode = $request->postalcode;
        $Prefectures = $request->prefectures;
        $StreetAddress = $request->street_address;
        $AddressKana = $request->address_kana;
        //Article Section
        $PropertyName = $request->property_name;
        $IssueRoom = $request->issue_room;
        $PropertyNameKana = $request->property_name_kana;
        $FloorPlan = $request->floor_plan;
        $FloorPlanStatus = $request->floor_plan_status;
        $FloorPlans = $FloorPlan.$FloorPlanStatus;
        $FloorPlanSize = (float)$request->floor_plan_size;
        //Main Section
        $Deposit = (int)$request->deposit;
        $LeaveAmortization = (int)$request->leave_amortization;
        $Keymoney = (int)$request->keymoney;
        $BeforeRent = (int)$request->beforerent;
        $Rent = (int)$request->rent;
        $AdminExpenses = (int)$request->admin_expense;
        $ParkingFee = (int)$request->parking_fee;
        $OtherExpenses = (int)$request->other_expense;
        $Total = (int)$request->total;
       //Insert all data into application table in PersonalForm and return app_body_no of latest inertion
       $app_body_no_id = DB::table('application_body')->insertGetId(['is_teiki' => $ContractType,'nyukyo_yotei_ymd' => $OccupationDate,'nyuko_yotei_jiki' => $OccupationStatus, 'postal_code' => $PostalCode, 'prefecture' => $Prefectures, 'address' => $StreetAddress, 'address_kana' => $AddressKana, 'bukken_name' => $PropertyName, 'room_no' => $IssueRoom, 'bukken_name_kana' => $PropertyNameKana, 'madori' => $FloorPlans, 'square_meter' => $FloorPlanSize, 'shikikin_hosho' => $Deposit, 'shikikin_shokyaku' => $LeaveAmortization, 'reikin' => $Keymoney, 'mae_yachin' => $BeforeRent, 'rent' => $Rent, 'mng_cost' => $AdminExpenses, 'park_cost' => $ParkingFee, 'other_cost' => $OtherExpenses,'monthly_rent' => $Total, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_body_no');
      //  Log::debug('Query insert data to application_body table and get the latest id in Personal Form work properly');



     /* Application Lease */
        //Current Address Section
        $AddressPostalCode = $request->address_postal_code;
        $AddressPrefectures = $request->address_prefecture;
        $AddressStreet = $request->address_street;
        $AddressStreetKana = $request->address_street_kana;
        //Main Section
        $AppLeaseName = $request->applicant_lessee_name;
        $AppLeaseNameKana = $request->applicant_lessee_name_kana;
        $AppLeaseSex = $request->appliacant_lessee_sex;
        $AppLeaseBirthYear = $request->applicant_lessee_birth_year;
        $AppLeaseBirthMonth = $request->applicant_lessee_birth_month;
        $AppLeaseBirthDay = $request->applicant_lessee_birth_date;
        $AppLeaseBirthDate = $AppLeaseBirthYear.'-'.$AppLeaseBirthMonth.'-'.$AppLeaseBirthDay;
        $AppLeaseBirthAge = $request->applicant_lessee_birth_age;
        $AppLeaseFixedLinePhone = $request->applicant_lessee_fixed_line_phone;
        $AppLeaseMobilePhone = $request->applicant_lessee_mobile_phone;
        $AppLeaseEmail = $request->applicant_lessee_email;
        $AppLeaseFamilyStructure = $request->appliacant_lessee_family_structure;
        $AppLeaseFamilyStructureOther = $request->family_structured_other;
        //Current
        $CurrentType = $request->appliacant_lessee_type;
        $CurrentJoint = $request->appliacant_lessee_joint;
        //Main Section
        $AppMoveReason = $request->appliacant_lessee_move_reason;
        $AppMoveReasonOther = $request->movereason_other;
        $AppJobCategory = $request->appliacant_lessee_job_category;
        $AppJobOther = $request->job_category_other;
        $AppBusiness = $request->appliacant_lessee_business;
        $AppBusinessOther = $request->business_other;
        $AppDriverLicense1 = $request->driver_licence_1;
        $AppDriverLicense2 = $request->driver_licence_2;
        $AppDriverLicense3 = $request->driver_licence_3;
        $AppDriverLicense = $AppDriverLicense1.$AppDriverLicense2.$AppDriverLicense3;
        $AppCountryOfCitizenship = $request->country_of_citizenship;
        $AppCurrentRent = (float)$request->current_rent;
        $AppRepaymentAmount = (float)$request->repayment_amount;
        $AppResidenceYears = (int)$request->residence_years;
        $AppResidentMonths = (int)$request->residence_months;
        //Junkyard Section
        $AppJunkyardName = $request->junkyard_name;
        $AppJunkyardNameKana = $request->junkyard_name_kana;
        $AppJunkyardjunkyardPrefectures = $request->junkyard_prefecture;
        $AppJunkyardStreetAddress = $request->junkyard_street_address;
        $AppJunkyardAddressKana = $request->junkyard_address_kana;
        $AppJunkyardPhone = $request->junkyard_phone;
        $AppNumberofEmployee = (int)$request->app_number_of_employee;
        $AppAnnualIncome = (float)$request->annual_income;
        $AppMonthlyIncome = (float)$request->monthly_income;
        $AppDepartment = $request->department;
        $AppPosition = $request->manager;
        $AppLengthofServiceYear = (int)$request->length_of_service_year;
        $AppLengthofServiceMonth = (int)$request->length_of_service_month;
        //Insert all data into aplicator table in PersonalForm and return app_otu_no of the latest insertion
        $app_otu_no_id = DB::table('applicator')->insertGetId(['postal_code' => $AddressPostalCode, 'prefecture' => $AddressPrefectures, 'address' => $AddressStreet, 'address_kana' => $AddressStreetKana, 'name' => $AppLeaseName, 'name_kana' => $AppLeaseNameKana, 'sex' => $AppLeaseSex, 'birthday' => $AppLeaseBirthDate, 'age' => $AppLeaseBirthAge, 'telephone' => $AppLeaseFixedLinePhone, 'mobile_phone' => $AppLeaseMobilePhone, 'mail_address' => $AppLeaseEmail, 'family' => $AppLeaseFamilyStructure, 'family_other' => $AppLeaseFamilyStructureOther, 'address_type' => $CurrentType, 'rentai_hoshonin' => $CurrentJoint, 'tenkyo_riyu' => $AppMoveReason, 'tenkyo_other' => $AppMoveReasonOther, 'job_type' => $AppJobCategory, 'job_other' => $AppJobOther, 'business_type' => $AppBusiness, 'business_other' => $AppBusinessOther, 'drivers_licence' => $AppDriverLicense, 'nationality' => $AppCountryOfCitizenship, 'current_rent' => $AppCurrentRent, 'hensai' => $AppRepaymentAmount, 'kyoju_nensu_y' => $AppResidenceYears, 'kyoju_nensu_m' => $AppResidentMonths, 'work_place_name' => $AppJunkyardName, 'work_place_name_kana' => $AppJunkyardNameKana, 'work_place_pref' => $AppJunkyardjunkyardPrefectures, 'work_place_address' => $AppJunkyardStreetAddress, 'work_place_address_kana' => $AppJunkyardAddressKana, 'work_place_tel' => $AppJunkyardPhone, 'employers' => $AppNumberofEmployee, 'nenshu' => $AppAnnualIncome, 'gesshu' => $AppMonthlyIncome, 'busho' => $AppDepartment, 'yakushoku' => $AppPosition, 'kinzoku_y' => $AppLengthofServiceYear, 'kinzoku_m' => $AppLengthofServiceMonth, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime], 'app_otu_no');
        // Log::debug('Query insert data to application_body table and get latest id in Personal Form work properly');


      /* Emergency First Contact */
        //Current Address Section
        $EmerPostalCode = $request->emergency_address_postalcode;
        $EmerPrefectures = $request->emergency_address_prefecture;
        $EmerStreetAddress = $request->emergency_address_street;
        $EmerAddressKana = $request->emergency_address_street_kana;
        //Main Section
        $EmerName = $request->emergency_first_contact_name;
        $EmerNameKana = $request->emergency_first_contact_name_kana;
        $EmerSex = $request->emergency_first_contact_sex;
        $EmerRelationship = $request->emergency_first_contact_relationship;
        $EmerBirthYear = $request->emergency_first_contact_birth_year;
        $EmerBirthMonth = $request->emergency_first_contact_birth_month;
        $EmerBirthDay = $request->emergency_first_contact_birth_date;
        $EmberBirthDate = $EmerBirthYear.$EmerBirthMonth.$EmerBirthDay;
        $EmerBirthother = $request->emergency_first_contact_birth_age;
        $EmerFixedLinePhone = $request->efc_fixed_line_phone;
        $EmerMobilePhone = $request->efc_mobile_phone;
        //Junkyard Section
        $EmerJunkyardName = $request->efc_junkyard_name;
        $EmerJunkyardNameKana = $request->efc_junkyard_name_kana;
        $EmerAnnualIncome = (int)$request->efc_annual_income;
        $EmerMonthlyIncome = (int)$request->efc_monthly_income;
        $EmerEmergencyContact = $request->efc_emergency_contact;
        //insert all data into application_contact table in PersonalForm and return app_contact_no of latest insertion
        $app_contact_no_id = DB::table('application_contact')->insertGetId(['postal_code' => $EmerPostalCode, 'prefecture' => $EmerPrefectures, 'address' => $EmerStreetAddress, 'address_kana' => $EmerAddressKana, 'name' => $EmerName, 'name_kaka' => $EmerNameKana, 'sex' => $EmerSex, 'tsuzukigara' => $EmerRelationship, 'birthday' => $EmberBirthDate, 'age' => $EmerBirthother, 'telephone' => $EmerFixedLinePhone, 'mobile_phone' => $EmerMobilePhone, 'work_place' => $EmerJunkyardName, 'work_place_kana' => $EmerJunkyardNameKana, 'nenshu' => $EmerAnnualIncome, 'gesshu' => $EmerMonthlyIncome, 'work_place_tel' => $EmerEmergencyContact, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_contact_no');
        // Log::debug('Query insert data to application_contact table and get latest id in Personal Form work properly');

      /* Resident */
        $ReRelationship = $request->resident_relationship;
        $ReRelationshipOther = $request->resident_other;
        //1 Section
        $ReName1 = $request->re_name_1;
        $ReSex = $request->re_sex;
        $ReRelations1 = $request->re_relation_1;
        $ReBirthYear1 = $request->re_birth_year_1;
        $ReBirthMonth1 = $request->re_birth_month_1;
        $ReBirthDay1 = $request->re_birth_date_1;
        $ReBirthDate1 = $ReBirthYear1.$ReBirthMonth1.$ReBirthDay1;
        $ReMobile1 = $request->re_mobile_1;
        $ReAnnualIncome1 = (float)$request->re_annual_income_1;
        $ReJunkyard1 = $request->re_junkyard_1;
        //2 Section
        $ReName2 = $request->re_name_2;
        $ReSex2 = $request->re_sex_2;
        $ReRelation2 = $request->re_relation_2;
        $ReBirthYear2 = $request->re_birth_year_2;
        $ReBirthMonth2 = $request->re_birth_month_2;
        $ReBirthDay2 = $request->re_birth_date_2;
        $ReBirthDate2 = $ReBirthYear2.$ReBirthMonth2.$ReBirthDay2;
        $ReMobile2 = $request->re_mobile_2;
        $ReAnnualIncome2 = (float)$request->re_annual_income_2;
        $ReJunkyard2 = $request->re_junkyard_2;
        //3 Section
        $ReName3 = $request->re_name_3;
        $ReSex3 = $request->re_sex_3;
        $ReRelation3 = $request->re_relation_3;
        $ReBirthYear3 = $request->re_birth_year_3;
        $ReBirthMonth3 = $request->re_birth_month_3;
        $ReBirthDay3 = $request->re_birth_date_3;
        $ReBirthDate3 = $ReBirthYear3.$ReBirthMonth3.$ReBirthDay3;
        $ReMobile3 = $request->re_mobile_3;
        $ReAnnualIncome3 = (float)$request->re_annual_income_3;
        $ReJunkyard3 = $request->re_junkyard_3;
        //insert all data into application_resident table in PersonalForm and return app_resident_no of latest insertion
        $app_resident_no_id =  DB::table('application_resident')->insertGetId(['nyukyosha' => $ReRelationship, 'nyukyosha_other' => $ReRelationshipOther, 'nyukyosha_1_name' => $ReName1, 'nyukyosha_1_sex' => $ReSex, 'nyukyosha_1_tsuzukigara' => $ReRelations1, 'nyukyosha_1_birthday' => $ReBirthDate1, 'nyukyosha_1_mobile_phone' => $ReMobile1, 'nyukyosha_1_nenshu' => $ReAnnualIncome1, 'nyukyosha_1_work_place' => $ReJunkyard1, 'nyukyosha_2_name' => $ReName2, 'nyukyosha_2_sex' => $ReSex2, 'nyukyosha_2_tsuzukigara' => $ReRelation2, 'nyukyosha_2_birthday' => $ReBirthDate2, 'nyukyosha_2_mobile_phone' => $ReMobile2, 'nyukyosha_2_nenshu' => $ReAnnualIncome2, 'nyukyosha_2_work_place' => $ReJunkyard2, 'nyukyosha_3_name' => $ReName3, 'nyukyosha_3_sex' => $ReSex3, 'nyukyosha_3_tsuzukigara' => $ReRelation3, 'nyukyosha_3_birthday' => $ReBirthDate3, 'nyukyosha_3_mobile_phone' => $ReMobile3, 'nyukyosha_3_nenshu' => $ReAnnualIncome3, 'nyukyosha_3_work_place' => $ReJunkyard3, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_resident_no');
        // Log::debug('Query insert data to application_resident table and get latest id in Personal Form work properly');

      /* Other */
        $OtherRemark = $request->other_remark;
        //Intermediary company
        $OtherCompanyName = $request->other_company_name;
        $OtherStreetAddress = $request->other_street_address;
        $OtherMobile = $request->other_mobile;
        $OtherFax = $request->other_fax;
        $OtherPersonInCharge = $request->other_person_incharge;
        //insert all data into application_others in PersonalForm and return app_other_no of latest insertion
        $app_others_no_id = DB::table('application_others')->insertGetId(['biki'=>$OtherRemark, 'chukai_company' => $OtherCompanyName, 'chukai_address' => $OtherStreetAddress, 'chukai_telephone' => $OtherMobile, 'chukai_fax' => $OtherFax, 'chukai_tantou' => $OtherPersonInCharge, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_other_no');
        Log::debug('Query insert data to application_others table and get latest id in Personal Form work properly');
        //insert all id of related table's primary key into application_header in PersonalForm and return app_no of latest insertion
        $app_no_id = DB::table('application_header')->insertGetId(['app_body_no' => $app_body_no_id, 'app_otu_no' => $app_otu_no_id, 'app_contact_no' => $app_contact_no_id, 'app_resident_no' => $app_resident_no_id, 'app_others_no' => $app_others_no_id,'is_individual' => TRUE, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_no');
        Log::debug('Query insert data to application_header table and get latest id in Personal Form work properly');
        DB::table('review_result')->insert(['app_no' => $app_no_id, 'del_flg' => '1','created_at' => new DateTime, 'updated_at' => new DateTime]);
        Log::debug('Query insert data to review_result table in Personal Form work properly');

         /* ------ Note ------
         All 5 functions below serve on the same purpose. Firstly, it check whether there is file input or not. If it is true. It will get all
         propterties of that file. Then it will put that file into file server included the path of folder, file_name with application number
         by using FileSystem class of Laravel. Finally, it will insert all required data of file into attachment_files tables.
         */
        //upload file in personal section
       if ($request->hasFile('personalcertificatecopy')){
          $personalcertificatecopy = $request->file('personalcertificatecopy');
          Storage::disk('s3')->put('license/'.$app_no_id.'_'.$personalcertificatecopy->getClientOriginalName(), file_get_contents($personalcertificatecopy));
          DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 1,'file_type' => '01','file_name' => $personalcertificatecopy->getClientOriginalName(), 'file_path' => 'license/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('personaltenantapplicationform')){
          $personaltenantapplicationform = $request->file('personaltenantapplicationform');
		  Storage::disk('s3')->put('application/'.$app_no_id.'_'.$personaltenantapplicationform->getClientOriginalName(), file_get_contents($personaltenantapplicationform));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 1,'file_type' => '02','file_name' => $personaltenantapplicationform->getClientOriginalName(), 'file_path' => 'application/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('personalother1')){
          $personalother1 = $request->file('personalother1');
		 Storage::disk('s3')->put('other/'.$app_no_id.'_'.$personalother1->getClientOriginalName(), file_get_contents($personalother1));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 1,'file_type' => '09','file_name' => $personalother1->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('personalother2')){
          $personalother2 = $request->file('personalother2');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$personalother2->getClientOriginalName(), file_get_contents($personalother2));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 2,'file_type' => '09','file_name' => $personalother2->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('personalother3')){
          $personalother3 = $request->file('personalother3');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$personalother3->getClientOriginalName(), file_get_contents($personalother3));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 3,'file_type' => '09','file_name' => $personalother3->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('personalother4')){
          $personalother4 = $request->file('personalother4');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$personalother4->getClientOriginalName(), file_get_contents($personalother4));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 4,'file_type' => '09','file_name' => $personalother4->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('personalother5')){
          $personalother5 = $request->file('personalother5');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$personalother5->getClientOriginalName(), file_get_contents($personalother5));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 5,'file_type' => '09','file_name' => $personalother5->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
      //  Log::debug('Query insert data to attachment_files table and upload files in Personal Form work properly');
       DB::commit();
      //  Log::debug('PersonalForm work properly');
       // pass app_no into Hidden.blade.php
      return view ('Hidden',compact('app_no_id'));


      }
      catch(\Exception $e)
      {
        DB::rollback();
        $error = $e->getMessage();
        return view ('Error');
      }
    }

    public function CoperationForm(Request $request, Filesystem $filesystem)
    {
      DB::beginTransaction();
      try{
        //////////////////////////////Corperation//////////////////////////////
          /* Lease Application Content */
            $CpContactType = $request->cp_contract_type;
            $CpOccupacyYear = $request->cp_occupacy_year;
            $CpOccupacyMonth = $request->cp_occupacy_month;
            $CpOccupacyDay = $request->cp_occupacy_date;
            $CpOccupacyDate = $CpOccupacyYear.$CpOccupacyMonth.$CpOccupacyDay;
            $CpOccupacyStatus = $request->cp_occupacy_status;
            //Article Location Section
            $CpPostalCode = $request->cp_postalcode;
            $CpPrefectures = $request->cp_prefectures;
            $CpStrAddr = $request->cp_street_address;
            $CpAddrKana = $request->cp_address_kana;
            $CpPropertyName = $request->cp_property_name;
            $CpIssueRoom = $request->cp_issue_room;
            $CpPropertyNameKana = $request->cp_property_name_kana;
            $CpFloorPlan = $request->cp_floor_plan;
            $CpFloorPlanStatus = $request->cp_floor_plan_status;
            $CpFloorPlans = $CpFloorPlan.$CpFloorPlanStatus;
            $CpFloorPlanSize = (float)$request->cp_floor_plan_size;
            //Main Section
            $CpDeposit = (int)$request->cp_deposit;
            $CpLeaveAmortization = (int)$request->cp_amortization;
            $CpKeyMoney = (int)$request->cp_keymoney;
            $CpBeforeRent = (int)$request->cp_before_rent;
            $CpRent = (int)$request->cp_rent;
            $CpAdminExpense = (int)$request->cp_admin_expense;
            $CpParkingFee = (int)$request->cp_parking_fee;
            $CpOtherExpense = (int)$request->cp_other_expense;
            $CpTotal = (int)$request->cp_total;
            // insert all data into application_body in CorperationForm and return app_body_no of latest insertion
            $app_body_no_id = DB::table('application_body')->insertGetId(['is_teiki' => $CpContactType,'nyukyo_yotei_ymd' => $CpOccupacyDate,'nyuko_yotei_jiki' => $CpOccupacyStatus, 'postal_code' => $CpPostalCode, 'prefecture' => $CpPrefectures, 'address' => $CpStrAddr, 'address_kana' => $CpAddrKana, 'bukken_name' => $CpPropertyName, 'room_no' => $CpIssueRoom, 'bukken_name_kana' => $CpPropertyNameKana, 'madori' => $CpFloorPlans, 'square_meter' => $CpFloorPlanSize, 'shikikin_hosho' => $CpDeposit, 'shikikin_shokyaku' => $CpLeaveAmortization, 'reikin' => $CpKeyMoney, 'mae_yachin' => $CpBeforeRent, 'rent' => $CpRent, 'mng_cost' => $CpAdminExpense, 'park_cost' => $CpParkingFee, 'other_cost' => $CpOtherExpense,'monthly_rent' => $CpTotal, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_body_no');
            // Log::debug('Query insert data to application_body table and get latest id in Corperation Form work properly');

          /* Application Lease */
            //Current Address Section
            $CpAppPostalCode = $request->cp_address_postal_code;
            $CpAppPrefectures = $request->cp_address_prefecture;
            $CpAppStrAddr = $request->cp_address_street;
            $CpAppStrAddrKana = $request->cp_address_street_kana;
            //Main Section
            $CpAppCompanyName = $request->cp_applicant_lessee_name;
            $CpAppCompanyNameKana = $request->cp_applicant_lessee_name_kana;
            $CpAppRepresentName = $request->cp_represent_name;
            $CpAppRepresentNameKana = $request->cp_represent_name_kana;
            $CpAppMobileRepresentative = $request->cp_al_mobile_representative;
            $CpAppMobileDepartment = $request->cp_al_mobile_department;
            $CpAppEmail = $request->cp_al_email;
            $CpAppDepartment = $request->cp_al_department;
            $CpAppPersonInCharge = $request->cp_al_name_of_person_incharge;
            $CpAppCompanyHP = $request->cp_al_company_hp;
            $CpAppBusiness = $request->cp_al_business;
            $CpAppOtherBusiness = $request->cp_al_other_business;
            $CpAppTenantReason = $request->cp_al_tenants_reason;
            $CpAppOtherTenantReason = $request->cp_al_other_tenants_reason;
            $CpAppDateEstablishmentYear = $request->cp_al_date_of_etablisment_year;
            $CpAppDateEstablishmentMonth = $request->cp_al_date_of_etablisment_month;
            $CpAppDateEstablishmentDate = $CpAppDateEstablishmentYear.$CpAppDateEstablishmentMonth;
            $CpAppDateEstablishmentListing = $request->cp_al_date_of_etablisment_listing;
            $CpAppCapital = (float)$request->cp_al_capital;
            $CpAppAnnualBusiness = (float)$request->cp_al_annual_business;
            $CpAppNumEmployee = (int)$request->cp_al_number_of_employee;
            //insert all data into applicator_company in CorperationForm and return app_otu_company_no of latest insertion
            $app_otu_company_no_id = DB::table('applicator_company')->insertGetId(['postal_code' => $CpAppPostalCode, 'prefecture' => $CpAppPrefectures, 'address' => $CpAppStrAddr, 'address_kana' => $CpAppStrAddrKana, 'company_name' => $CpAppCompanyName, 'company_name_kana' => $CpAppCompanyNameKana, 'daihyosha_name' => $CpAppRepresentName, 'daihyosha_name_kana' => $CpAppRepresentNameKana, 'telephone' => $CpAppMobileRepresentative, 'telephone_tanto' => $CpAppMobileDepartment, 'mail_address' => $CpAppEmail, 'tanto_busho' => $CpAppDepartment, 'tantosha_name' => $CpAppPersonInCharge, 'homepage' => $CpAppCompanyHP, 'jigyo' => $CpAppBusiness, 'jigyo_other' => $CpAppOtherBusiness, 'nyukyo_riyu' => $CpAppTenantReason, 'nyukyo_riyu_other' => $CpAppOtherTenantReason, 'foundation_ym' => $CpAppDateEstablishmentDate, 'jojo_flg' => $CpAppDateEstablishmentListing, 'shihonkin' => $CpAppCapital, 'nensho' => $CpAppAnnualBusiness, 'employers' => $CpAppNumEmployee, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_otu_company_no');
            // Log::debug('Query insert data to application_company table and get latest id in Corperation Form work properly');
          /* Joint Guarantor */
            //Current Address Section
            $CpJointPostalCode = $request->cp_joint_address_postal_code;
            $CpJointPrefecture = $request->cp_joint_address_prefecture;
            $CpJointStrAddr = $request->cp_joint_address_street;
            $CpJointAddrKana = $request->cp_joint_address_street_kana;
            //Main Section
            $CpJointName = $request->cp_jg_name;
            $CpJointNameKana = $request->cp_jg_name_kana;
            $CpJointSex = $request->cp_emergency_first_contact_sex;
            $CpJointRelationship = $request->cp_jg_relationship;
            $CpJointBirthYear = $request->cp_emergency_first_contact_birth_year;
            $CpJointBirthMonth = $request->cp_emergency_first_contact_birth_month;
            $CpJointBirthDay = $request->cp_emergency_first_contact_birth_date;
            $CpJointBirthDate = $CpJointBirthYear.$CpJointBirthMonth.$CpJointBirthDay;
            $CpJointAge = (int)$request->cp_emergency_first_contact_birth_age;
            $CpJointFixedLinePhone = $request->cp_efc_fixed_line_phone;
            $CpJointMobile = $request->cp_jg_mobile;
            $CpJointDriverLicense1 = $request->cp_jg_driver_licence_number1;
            $CpJointDriverLicense2 = $request->cp_jg_driver_licence_number2;
            $CpJointDriverLicense3 = $request->cp_jg_driver_licence_number3;
            $CpJointDriverLicense = $CpJointDriverLicense1.$CpJointDriverLicense2.$CpJointDriverLicense3;
            //Junkyard Section
            $CpJointJunkyardName = $request->cp_efc_junkyard_name;
            $CpJointJunkyardNameKana = $request->cp_efc_junkyard_name_kana;
            $CpJointJunkyardPostalCode = $request->cp_jg_junkyard_postal_code;
            $CpJointJunkyardPrefecture = $request->cp_jg_junkyard_prefectures;
            $CpJointJunkyardStrAddr = $request->cp_jg_junkyard_street_address;
            $CpJointJunkyardStrAddrKana = $request->cp_jg_junkyard_address_kana;
            $CpJointJunkyardAnnualIncome = (float)$request->cp_efc_annual_income;
            $CpJointJunkyardMonthlyIncome = (float)$request->cp_efc_monthly_income;
            $CpJointJunkyardDepartment = $request->cp_jg_department;
            $CpJointJunkyardPosition = $request->cp_jg_manager;
            $CpJointJunkyardLengthServiceYear = (int)$request->jd_length_of_service_year;
            $CpJointJunkyardLengthServiceMonth = (int)$request->jd_length_of_service_month;
            $CpJointJunkyardBusinessPhone = $request->cp_jg_business_mobile;
            //insert all data application_cosigner in CorperationForm and return app_cosigner_no of latest insertion
            $app_consigner_no_id = DB::table('application_cosigner')->insertGetId(['postal_code' => $CpJointPostalCode, 'prefecture' => $CpJointPrefecture, 'address' => $CpJointStrAddr, 'address_kana' => $CpJointAddrKana, 'name' => $CpJointName, 'name_kana' => $CpJointNameKana, 'sex' => $CpJointSex, 'tsuduki_gara' => $CpJointRelationship, 'birthday' => $CpJointBirthDate, 'age' => $CpJointAge, 'telephone' => $CpJointFixedLinePhone, 'mobile_phone' => $CpJointMobile, 'drivers_licence_no' => $CpJointDriverLicense, 'work_place_name' => $CpJointJunkyardName, 'work_place_name_kana' => $CpJointJunkyardNameKana, 'work_place_postal_code' => $CpJointJunkyardPostalCode, 'work_place_prefecture' => $CpJointJunkyardPrefecture, 'work_place_address' => $CpJointJunkyardStrAddr, 'work_place_address_kana' => $CpJointJunkyardStrAddrKana, 'nenshu' => $CpJointJunkyardAnnualIncome, 'gesshu' => $CpJointJunkyardMonthlyIncome, 'busho' => $CpJointJunkyardDepartment, 'yakushoku' => $CpJointJunkyardPosition, 'kinzoku_y' => $CpJointJunkyardLengthServiceYear, 'kinzoku_m' => $CpJointJunkyardLengthServiceMonth, 'work_place_tel' => $CpJointJunkyardBusinessPhone, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_cosigner_no');
            // Log::debug('Query insert data to application_cosigner table and get latest id in Corperation Form work properly');
           /* Resident Section */
            $CpResidentRelationship = $request->cp_resident_relationship;
            $CpResidentRelationshipOther = $request->cp_resident_relationship_other;
            //1 Section
            $CpResidentName1 = $request->cp_re_name_1;
            $CpResidentSex1 = $request->cp_re_sex_1;
            $CpResidentRelation1 = $request->cp_re_relation_1;
            $CpResidentBirthYear1 = $request->cp_resident_birth_year_1;
            $CpResidentBirthMonth1 = $request->cp_resident_birth_month_1;
            $CpResidentBirthDay1 = $request->cp_resident_birth_date_1;
            $CpResidentBirthDate1 = $CpResidentBirthYear1.$CpResidentBirthMonth1.$CpResidentBirthDay1;
            $CpResidentMobile1 = $request->cp_re_mobile_1;
            $CpResidentAnnualIncome1 = (float)$request->cp_re_annual_income_1;
            $CpResidentJunkyard1 = $request->cp_re_junkyard_1;
            //2 Section
            $CpResidentName2 = $request->cp_re_name_2;
            $CpResidentSex2 = $request->cp_re_sex_2;
            $CpResidentRelation2 = $request->cp_re_relation_2;
            $CpResidentBirthYear2 = $request->cp_re_birth_year_2;
            $CpResidentBirthMonth2 = $request->cp_re_birth_month_2;
            $CpResidentBirthDay2 = $request->cp_re_birth_date_2;
            $CpResidentBirthDate2 = $CpResidentBirthYear2.$CpResidentBirthMonth2.$CpResidentBirthDay2;
            $CpResidentMobile2 = $request->cp_re_mobile_2;
            $CpResidentAnnualIncome2 = (float)$request->cp_re_annual_income_2;
            $CpResidentJunkyard2 = $request->cp_re_junkyard_2;
            //3 Section
            $CpResidentName3 = $request->cp_re_name_3;
            $CpResidentSex3 = $request->cp_re_sex_3;
            $CpResidentRelation3 = $request->cp_re_relation_3;
            $CpResidentBirthYear3 = $request->cp_re_birth_year_3;
            $CpResidentBirthMonth3 = $request->cp_re_birth_month_3;
            $CpResidentBirthDay3 = $request->cp_re_birth_date_3;
            $CpResidentBirthDate3 = $CpResidentBirthYear3.$CpResidentBirthMonth3.$CpResidentBirthDay3;
            $CpResidentMobile3 = $request->cp_re_mobile_3;
            $CpResidentAnnualIncome3 = (float)$request->cp_re_annual_income_3;
            $CpResidentJunkyard3 = $request->cp_re_junkyard_3;
            //insert all data into application_resident in CorperationForm and return app_resident_no of latest insertion
            $app_resident_no_id = DB::table('application_resident')->insertGetId(['nyukyosha' => $CpResidentRelationship, 'nyukyosha_other' => $CpResidentRelationshipOther,'nyukyosha_1_name' => $CpResidentName1, 'nyukyosha_1_sex' => $CpResidentSex1, 'nyukyosha_1_tsuzukigara' => $CpResidentRelation1, 'nyukyosha_1_birthday' => $CpResidentBirthDate1, 'nyukyosha_1_mobile_phone' => $CpResidentMobile1, 'nyukyosha_1_nenshu' => $CpResidentAnnualIncome1, 'nyukyosha_1_work_place' => $CpResidentJunkyard1, 'nyukyosha_2_name' => $CpResidentName2, 'nyukyosha_2_sex' => $CpResidentSex2, 'nyukyosha_2_tsuzukigara' => $CpResidentRelation2, 'nyukyosha_2_birthday' => $CpResidentBirthDate2, 'nyukyosha_2_mobile_phone' => $CpResidentMobile2, 'nyukyosha_2_nenshu' => $CpResidentAnnualIncome2, 'nyukyosha_2_work_place' => $CpResidentJunkyard2, 'nyukyosha_3_name' => $CpResidentName3, 'nyukyosha_3_sex' => $CpResidentSex3, 'nyukyosha_3_tsuzukigara' => $CpResidentRelation3, 'nyukyosha_3_birthday' => $CpResidentBirthDate3, 'nyukyosha_3_mobile_phone' => $CpResidentMobile3, 'nyukyosha_3_nenshu' => $CpResidentAnnualIncome3, 'nyukyosha_3_work_place' => $CpResidentJunkyard3, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_resident_no');
            // Log::debug('Query insert data to application_resident table and get latest id in Corperation Form work properly');

          /* Other Section */
           $CpOtherRemark = $request->cp_other_remark;
          //Intermediary company
           $CpOtherCompanyName = $request->cp_other_company_name;
           $CpOtherStreetAddress = $request->cp_other_street_address;
           $CpOtherMobile = $request->cp_other_mobile;
           $CpOtherFax = $request->cp_other_fax;
           $CpOtherPersonInCharge = $request->cp_other_person_incharge;
           //insert all data into application_others in CorperationForm and return app_other_no of latest insert
           $app_others_no_id = DB::table('application_others')->insertGetId(['biki'=>$CpOtherRemark, 'chukai_company' => $CpOtherCompanyName, 'chukai_address' => $CpOtherStreetAddress, 'chukai_telephone' => $CpOtherMobile, 'chukai_fax' => $CpOtherFax, 'chukai_tantou' => $CpOtherPersonInCharge, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_other_no');
          //  Log::debug('Query insert data to application_others table and get latest id in Coperation Form work properly');
           //insert all id of related table's primary key into application_header in CorperationForm and return app_no of latest insertion
           $app_no_id = DB::table('application_header')->insertGetId(['app_body_no' => $app_body_no_id,'app_otu_company_no' => $app_otu_company_no_id, 'app_consigner_no' => $app_consigner_no_id, 'app_resident_no' => $app_resident_no_id, 'app_others_no' => $app_others_no_id,'is_individual' => FALSE, 'del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],'app_no');
          //  Log::debug('Query insert data to application_header table and get latest id in Coperation Form work properly');
           DB::table('review_result')->insert(['app_no' => $app_no_id, 'del_flg' => '1','created_at' => new DateTime, 'updated_at' => new DateTime]);
          //  Log::debug('Query insert data to review_result table in Corperation Form work properly');

           /* ------ Note ------
           All 5 functions below serve on the same purpose. Firstly, it check whether there is file input or not. If it is true. It will get all
           propterties of that file. Then it will put that file into file server included the path of folder, file_name with application number
           by using FileSystem class of Laravel. Finally, it will insert all required data of file into attachment_files tables.
           */

			 //upload file in corperate section
       if ($request->hasFile('corperatecertificatecopy')){
          $corperatecertificatecopy = $request->file('corperatecertificatecopy');
          Storage::disk('s3')->put('license/'.$app_no_id.'_'.$corperatecertificatecopy->getClientOriginalName(), file_get_contents($corperatecertificatecopy));
          DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 1,'file_type' => '01','file_name' => $corperatecertificatecopy->getClientOriginalName(), 'file_path' => 'license/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('corperatetenantapplicationform')){
          $corperatetenantapplicationform = $request->file('corperatetenantapplicationform');
		  Storage::disk('s3')->put('application/'.$app_no_id.'_'.$corperatetenantapplicationform->getClientOriginalName(), file_get_contents($corperatetenantapplicationform));
        DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 1, 'file_type' => '02','file_name' => $corperatetenantapplicationform->getClientOriginalName(), 'file_path' => 'application/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('corperateother1')){
          $corperateother1 = $request->file('corperateother1');
		      Storage::disk('s3')->put('other/'.$app_no_id.'_'.$corperateother1->getClientOriginalName(), file_get_contents($corperateother1));
          DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 1,'file_type' => '09','file_name' => $corperateother1->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('corperateother2')){
          $corperateother2 = $request->file('corperateother2');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$corperateother2->getClientOriginalName(), file_get_contents($corperateother2));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 2,'file_type' => '09','file_name' => $corperateother2->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('corperateother3')){
          $corperateother3 = $request->file('corperateother3');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$corperateother3->getClientOriginalName(), file_get_contents($corperateother3));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 3,'file_type' => '09','file_name' => $corperateother3->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('corperateother4')){
          $corperateother4 = $request->file('corperateother4');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$corperateother4->getClientOriginalName(), file_get_contents($corperateother4));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 4,'file_type' => '09','file_name' => $corperateother4->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
       if ($request->hasFile('corperateother5')){
          $corperateother5 = $request->file('corperateother5');
		  Storage::disk('s3')->put('other/'.$app_no_id.'_'.$corperateother5->getClientOriginalName(), file_get_contents($corperateother5));
      DB::table('attachment_files')->insert(['app_no' => $app_no_id,'file_no' => 5,'file_type' => '09','file_name' => $corperateother5->getClientOriginalName(), 'file_path' => 'other/','del_flg' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
       }
          // Log::debug('Query insert data to attachment_files table and upload files in Corperation Form work properly');
          DB::commit();
          // Log::debug('CorperationForm function work properly');
          // pass app_no into Hidden.blade.php
          return view ('Hidden',compact('app_no_id'));
      }
      catch(\Exception $e)
      {
        DB::rollback();
        $error = $e->getMessage();
        return view ('Error');
      }


    }

    public function GetIdOfAppHeader($id)
    {
      session_start();
      if(empty($_SESSION['username']))
      {
          return redirect('/');
      }

      //Querying the data to display in Modification page
      DB::beginTransaction();
      try{
        // return record that app_no = $id
        $Arr = DB::table('application_header')->where('app_no','=',$id)->get();

        if($Arr[0]->app_otu_no==null)
        {
          //Corperate Form
          $AppBodys = DB::table('application_body')->where('app_body_no','=',$Arr[0]->app_body_no)->get();
          $AppComs = DB::table('applicator_company')->where('app_otu_company_no','=',$Arr[0]->app_otu_company_no)->get();
          $AppCosigner = DB::table('application_cosigner')->where('app_cosigner_no','=',$Arr[0]->app_consigner_no)->get();
          $AppResident = DB::table('application_resident')->where('app_resident_no','=',$Arr[0]->app_resident_no)->get();
          $AppOthers = DB::table('application_others')->where('app_other_no','=',$Arr[0]->app_others_no)->get();
          $AppFiles = DB::table('attachment_files')->where('app_no','=',$Arr[0]->app_no)->get();
          $certificatecopyfile = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_path', '=', 'license/')->get();
          $tenantapplicationformfile = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '02')->get();
          $other1file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '1')->get();
          $other2file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '2')->get();
          $other3file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '3')->get();
          $other4file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '4')->get();
          $other5file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '5')->get();
          DB::commit();
          // Log::debug('GetIdOfAppHeader function in true condition work properly');
          // pass all required data into modfication page (CorperateFinalN)
          return View::make('CorperateModificationForm',compact('Arr','AppBodys','AppComs','AppCosigner','AppResident','AppOthers'))->with('certificatecopyfile', $certificatecopyfile)->with('tenantapplicationformfile', $tenantapplicationformfile)->with('other1file', $other1file)->with('other2file', $other2file)->with('other3file', $other3file)->with('other4file', $other4file)->with('other5file', $other5file);
        }
        else {
          //Personal Form
          $AppBodys = DB::table('application_body')->where('app_body_no','=',$Arr[0]->app_body_no)->get();
          $AppPersonal = DB::table('applicator')->where('app_otu_no','=',$Arr[0]->app_otu_no)->get();
          $AppContact = DB::table('application_contact')->where('app_contact_no','=',$Arr[0]->app_contact_no)->get();
          $AppResident = DB::table('application_resident')->where('app_resident_no','=',$Arr[0]->app_resident_no)->get();
          $AppOthers = DB::table('application_others')->where('app_other_no','=',$Arr[0]->app_others_no)->get();
          $certificatecopyfile = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_path', '=', 'license/')->get();
          $tenantapplicationformfile = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '02')->get();
          $other1file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '1')->get();
          $other2file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '2')->get();
          $other3file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '3')->get();
          $other4file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '4')->get();
          $other5file = DB::table('attachment_files')->select('file_name')->where('app_no', '=', $id)->where('file_type', '=', '09')->where('file_no', '=', '5')->get();
          DB::commit();
          // Log::debug('GetIdOfAppHeader function in false condition work properly');
          // pass all required data into modfication page (PersonalFinalNN)
          return View::make('PersonalModificationForm',compact('Arr','AppBodys','AppPersonal','AppContact','AppResident','AppOthers'))->with('certificatecopyfile', $certificatecopyfile)->with('tenantapplicationformfile', $tenantapplicationformfile)->with('other1file', $other1file)->with('other2file', $other2file)->with('other3file', $other3file)->with('other4file', $other4file)->with('other5file', $other5file);
        }
      }
      catch(\Exception $e)
      {
        DB::rollback();
        $error = $e->getMessage();
        return view ('Error');
      }

    }
}
