@include('SessionHandling')
<html ng-app>
<head>
    <meta charset="utf-8"/>
    <title>アプリケーション修正</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/custom/css/custom.css">
	<link rel="stylesheet" type="text/css" href="/custom/css/jasny-bootstrap.css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script type="text/javascript" src="/custom/js/custom.js"></script>
	<script type="text/javascript" src="/custom/js/jasny-bootstrap.js"></script>
  <script>
    $(document).ready(function(){
      var application_body_is_teiki = '<?php echo $AppBodys[0]->is_teiki?>';
      if(application_body_is_teiki=='U')
      {
        $('#cp_contract_type_U').attr('checked','checked');
      }
      else {
        $('#cp_contract_type_R').attr('checked','checked');
      }
      var nyuko_yotei_jiki = '<?php echo $AppBodys[0]->nyuko_yotei_jiki?>';
      if(nyuko_yotei_jiki =='上旬')
      {
          $('#cp_occupacy_status_E').attr('checked','checked');
      }
      else if ( nyuko_yotei_jiki == '中旬') {
          $('#cp_occupacy_status_M').attr('checked','checked');
      }
      else if (nyuko_yotei_jiki == '下旬'){
          $('#cp_occupacy_status_L').attr('checked','checked');
      }
        var applicator_company_jigyo = '<?php echo $AppComs[0]->jigyo;?>';
        if(applicator_company_jigyo=='01')
        {
          $('#cp_al_business_1').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='02') {
          $('#cp_al_business_2').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='03') {
          $('#cp_al_business_3').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='04') {
          $('#cp_al_business_4').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='05') {
          $('#cp_al_business_5').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='06') {
          $('#cp_al_business_6').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='07') {
          $('#cp_al_business_7').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='08') {
          $('#cp_al_business_8').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='09') {
          $('#cp_al_business_9').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='10') {
          $('#cp_al_business_10').attr('checked','checked');
        }
        else if (applicator_company_jigyo=='11'){
          $('#cp_al_business_11').attr('checked','checked');
        }
        var applicator_company_nyukyo_riyu = '<?php echo $AppComs[0]->nyukyo_riyu;?>';
        if(applicator_company_nyukyo_riyu=='01')
        {
          $('#cp_al_tenants_reason_1').attr('checked','checked');

        }
        else if (applicator_company_nyukyo_riyu=='02') {
          $('#cp_al_tenants_reason_2').attr('checked','checked');
        }
        else if (applicator_company_nyukyo_riyu=='03') {
          $('#cp_al_tenants_reason_3').attr('checked','checked');
        }
        else if (applicator_company_nyukyo_riyu=='04') {
          $('#cp_al_tenants_reason_4').attr('checked','checked');
        }
        else if (applicator_company_nyukyo_riyu=='05') {
          $('#cp_al_tenants_reason_5').attr('checked','checked');
        }
        else if (applicator_company_nyukyo_riyu=='06')
        {
          $('#cp_al_tenants_reason_6').attr('checked','checked');
        }
        else if (applicator_company_nyukyo_riyu=='07')
        {
          $('#cp_al_tenants_reason_7').attr('checked','checked');
        }
        var applicator_company_jojo_flg = '<?php echo $AppComs[0]->jojo_flg?>';
        if(applicator_company_jojo_flg=='1')
        {
        $('#cp_al_date_of_etablisment_listing_L').attr('checked','checked');
        }
        else if(applicator_company_jojo_flg=='0'){
          $('#cp_al_date_of_etablisment_listing_U').attr('checked','checked');
        }
        var application_cosigner_sex = '<?php echo $AppCosigner[0]->sex?>';
        if(application_cosigner_sex=='M')
        {
          $('#cp_emergency_first_contact_sex_M').attr('checked','checked');
        }
        else {
          $('#cp_emergency_first_contact_sex_F').attr('checked','checked');
        }
        var application_resident_relationship = '<?php echo $AppResident[0]->nyukyosha?>';
        if(application_resident_relationship=='01')
        {
          $('#cp_resident_relationship_1').attr('checked','checked');
        }
        else if (application_resident_relationship=='02') {
          $('#cp_resident_relationship_2').attr('checked','checked');
        }
        else if (application_resident_relationship=='03') {
          $('#cp_resident_relationship_3').attr('checked','checked');
        }
        else if (application_resident_relationship=='04'){
          $('#cp_resident_relationship_4').attr('checked','checked');
        }

        var application_resident_sex_1 = '<?php echo $AppResident[0]->nyukyosha_1_sex?>';
        if(application_resident_sex_1=='M')
        {
            $('#cp_re_sex_1_M').attr('checked','checked');

        }
        else if (application_resident_sex_1=='F'){
            $('#cp_re_sex_1_F').attr('checked','checked');
        }
        var application_resident_sex_2 = '<?php echo $AppResident[0]->nyukyosha_2_sex?>';
        if(application_resident_sex_2=='M')
        {
            $('#cp_re_sex_2_M').attr('checked','checked');
        }
        else if (application_resident_sex_2=='F'){
            $('#cp_re_sex_2_F').attr('checked','checked');
        }
        var application_resident_sex_3 = '<?php echo $AppResident[0]->nyukyosha_3_sex?>';
        if(application_resident_sex_3=='M')
        {
            $('#cp_re_sex_3_M').attr('checked','checked');
        }
        else if(application_resident_sex_3=='F'){
            $('#cp_re_sex_3_F').attr('checked','checked');
        }

        var Status = '<?php
        
            $floor_plan_all = $AppBodys[0]->madori;

            if (strlen($floor_plan_all) > 0) {
                $flag = 0;
                $status = '';
                if (strpos($floor_plan_all, 'R') !== false) {
                    $status = 'R';
                    $flag = 1;
                } elseif (strpos($floor_plan_all, 'L') !== false) {
                    $status = 'L';
                    $flag = 1;
                } elseif (strpos($floor_plan_all, 'D') !== false) {
                    $status = 'D';
                    $flag = 1;
                } elseif (strpos($floor_plan_all, 'K') !== false) {
                    $status = 'K';
                    $flag = 1;
                }
                if ($flag == 1) {
                    $pos = strpos($floor_plan_all, $status);
                    $floor_plan = substr($floor_plan_all, 0, $pos);
                    echo $floor_status = substr($floor_plan_all, $pos, 3);
                }
                
            }
            
      ?>';          
                    if(Status=='R')
                    {
                    $('#cp_floor_plan_status_r').attr('checked','checked');
                    

                    }
                    else if(Status=='K')
                    {
                    $('#cp_floor_plan_status_k').attr('checked','checked');
                    }
                    else if(Status=='DK')
                    {
                    $('#cp_floor_plan_status_dk').attr('checked','checked');
                    }
                    else if(Status=='LDK')
                    {
                    $('#cp_floor_plan_status_ldk').attr('checked','checked');
                    }
                  });
    </script>
</head>
<body style="padding:30px;">
<div class="custom-lg-container">

    <div class="row" style="margin-bottom:30px;">
      <div class="col-xs-12">
         <div class="form-tab">
            <div class="top-menu" style="border-bottom:none;">
              <div class="row">
                <div class="col-xs-12">
                  <div class="row">
                    <div class="col-xs-6">
                        <p class="userid">(社員 ID): <?php
                            if(session_status()===PHP_SESSION_NONE){
                              session_start(); echo $_SESSION['username'].'さん';
                             }elseif (session_status()===PHP_SESSION_ACTIVE) {
                               echo $_SESSION['username'].'さん';
                             }else{
                              echo "";
                              }?></p>
                    </div>
                    <div class="col-xs-6">
                        <p class="text-right p-no-margin"><a href="/Menu" class="btn menu-btn custom-btn-primary custom-sm-radius" style="margin-right:10px;">メニュー</a> <a href="/Logout" class="btn logout-btn btn-danger custom-sm-radius">ログアウト</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
    </div>

    <div class="row flipper" id="flip2">
      <div class="col-xs-12">

        <div class="custom-form-container">
            <div class="custom-form-section custom-table-header">
                <h4>賃貸借申込内容</h4>
            </div>
            <form method="post" id="coporate" name="coporateForm" role="form" action="/CorperationFormModifcation/{{ $Arr[0]->app_no }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th class="table-sidebar" colspan="2">契約種別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="5">
                            <div class="inline-form-element">
                                <input type="radio" id="cp_contract_type_U" class="custom-radio-field" name="cp_contract_type" value="U"><label for="cp_contract_type_U"><span></span> 普通</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_contract_type_R" class="custom-radio-field" name="cp_contract_type" value="R"><label for="cp_contract_type_R"><span></span> 定期</label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">入居予定 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2" class="yearselectfield">
                          <select name="cp_occupacy_year" class="disabcop custom-select">
                           <?php
                             $appbody_ymd = $AppBodys[0]->nyukyo_yotei_ymd;
                             $appbody_year = substr($appbody_ymd, 0, 4);
                             $appbody_month = substr($appbody_ymd, 4, 2);
                             $appbody_date = substr($appbody_ymd, 6, 7);
                           ?>

                           @for ($i = 2016; $i <= 2050; $i++)
                             @if ($i == $appbody_year)
                             <option selected value="{{ $i }}">{{ $i }}</option>
                             @else
               <option value="{{ $i }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                          <select name="cp_occupacy_month" class="disabcop custom-select">
                             @for ($i = 1; $i <= 12; $i++)
                             <?php
                               if ($i<=9)
                                 $appbody_month_value = '0'.$i;
                               else
                                 $appbody_month_value = $i;
                             ?>
								@if ($i == $appbody_month)
									<option selected value="{{ $appbody_month_value }}">{{ $i }}</option>
								@else
									<option value="{{ $appbody_month_value }}">{{ $i }}</option>
								@endif
							@endfor
                          </select>&nbsp;&nbsp;月&nbsp;&nbsp;
                          <select name="cp_occupacy_date" class="disabcop custom-select">
                             @for ($i = 1; $i <= 31; $i++)
                             <?php
                               if ($i<=9)
                                 $appbody_date_value = '0'.$i;
                               else
                                 $appbody_date_value = $i;
                             ?>
                             @if ($i == $appbody_date)
                             <option selected value="{{ $appbody_date_value }}">{{ $i }}</option>
                             @else
               <option value="{{ $appbody_date_value }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;日

                        </td>
                        <td colspan="3">
                            <div class="inline-form-element pcheck">
                                <input type="checkbox" value="上旬" id="cp_occupacy_status_E" name="cp_occupacy_status" class="custom-checkbox-field"><label for="cp_occupacy_status_E"><span></span> 上旬</label>
                            </div>
                            <div class="inline-form-element pcheck">
                                <input type="checkbox" value="中旬" id="cp_occupacy_status_M" name="cp_occupacy_status" class="custom-checkbox-field"><label for="cp_occupacy_status_M"><span></span> 中旬</label>
                            </div>
                            <div class="inline-form-element pcheck">
                                <input type="checkbox" value="下旬" id="cp_occupacy_status_L" name="cp_occupacy_status" class="custom-checkbox-field"><label for="cp_occupacy_status_L"><span></span> 下旬</label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" rowspan="4">物件所在地</th>
                        <th class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" ng-minlength="7" maxlength="7" ng-model="cp_postalcode" ng-init="cp_postalcode= '<?php echo $AppBodys[0]->postal_code;?>'" value="{{ $AppBodys[0]->postal_code }}" class="custom-text-field form-control disabcop numberonly" name="cp_postalcode" placeholder="1234567" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_postalcode.$touched && coporateForm.cp_postalcode.$error.required && coporateForm.cp_postalcode.$invalid"><small style="color: red; display: block; text-align: center;">郵便番号を入力してください</small></div>
                              <div class="ng-cloak" ng-show="coporateForm.cp_postalcode.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                              <div class="ng-cloak" ng-show="coporateForm.cp_postalcode.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" maxlength="10" ng-model="cp_prefectures" ng-init="cp_prefectures= '<?php echo $AppBodys[0]->prefecture;?>'" value="{{ $AppBodys[0]->prefecture }}" class="custom-text-field form-control disabcop" name="cp_prefectures" placeholder="東京" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_prefectures.$touched && coporateForm.cp_prefectures.$invalid && coporateForm.cp_prefectures.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="3">
                            <input type="text" maxlength="200" ng-model="cp_street_address" ng-init="cp_street_address= '<?php echo $AppBodys[0]->address;?>'" value="{{ $AppBodys[0]->address }}" class="custom-text-field form-control disabcop" name="cp_street_address" placeholder="港区 1-2-3" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_street_address.$touched && coporateForm.cp_street_address.$invalid && coporateForm.cp_street_address.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="3">
                            <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="200" ng-model="cp_address_kana" ng-init="cp_address_kana= '<?php echo $AppBodys[0]->address_kana;?>'" value="{{ $AppBodys[0]->address_kana }}" class="custom-text-field form-control disabcop" name="cp_address_kana" placeholder="ミナトク 1-2-3" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_kana.$touched && coporateForm.cp_address_kana.$invalid && coporateForm.cp_address_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" rowspan="3">物件</th>
                        <th class="table-sidebar">物件名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="3">
                            <input type="text" maxlength="200" ng-model="cp_property_name" ng-init="cp_property_name= '<?php echo $AppBodys[0]->bukken_name;?>'" value="{{ $AppBodys[0]->bukken_name }}" name="cp_property_name" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_property_name.$touched && coporateForm.cp_property_name.$invalid && coporateForm.cp_property_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">物件名を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">物件名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" maxlength="200" ng-model="cp_property_name_kana" ng-init="cp_property_name_kana= '<?php echo $AppBodys[0]->bukken_name_kana;?>'" value="{{ $AppBodys[0]->bukken_name_kana }}" name="cp_property_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_property_name_kana.$touched && coporateForm.cp_property_name_kana.$invalid && coporateForm.cp_property_name_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">物件名(カナ)を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_property_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                        </td>
                        <td>
                            <input type="text" name="cp_issue_room" maxlength="10" ng-model="cp_issue_room" ng-init="cp_issue_room='<?php echo $AppBodys[0]->room_no;?>'" value="{{ $AppBodys[0]->room_no }}" class="custom-text-field form-control disabper" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_issue_room.$touched && coporateForm.cp_issue_room.$invalid && coporateForm.cp_issue_room.$error.required"><small style="color: red; display: block; text-align: center;">号室を入力してください</small></div>
                        </td>
                        <th class="table-sidebar">号室 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                    </tr>
                    <tr>
                      <th class="table-sidebar">間取り</th>
                      <?php
                    $floor_plan_all = $AppBodys[0]->madori;
                    if (strlen($floor_plan_all) > 0) {
                    $status = '';
                    $flag = 0;
                        if (strpos($floor_plan_all, 'R') !== false) {
                            $status = 'R';
                            $flag = 1;
                        } elseif (strpos($floor_plan_all, 'L') !== false) {
                            $status = 'L';
                            $flag = 1;
                        } elseif (strpos($floor_plan_all, 'D') !== false) {
                            $status = 'D';
                            $flag = 1;
                        } elseif (strpos($floor_plan_all, 'K') !== false) {
                            $status = 'K';
                            $flag = 1;
                        }
                        if ($flag == 1) {
                            $pos = strpos($floor_plan_all, $status);
                            $floor_plan = substr($floor_plan_all, 0, $pos);
                            $floor_status = substr($floor_plan_all, $pos, 3);
                        } else {
                            $floor_plan = $floor_plan_all;
                            $floor_status = '';
                        }
                    } else {
                        $floor_plan = '';
                        $floor_status = '';
                    }
                    ?>
                      <td>
                         <input type="text" ng-model="cp_floor_plan" name="cp_floor_plan" class="custom-text-field form-control disabcop" ng-init="cp_floor_plan = '<?php echo $floor_plan ?>'" value="{{ $floor_plan }}" maxlength="7">
                      </td>
                      <td colspan="2">
                            <div class="inline-form-element ccheck">
                                <input type="checkbox" id="cp_floor_plan_status_r" name="cp_floor_plan_status" class="custom-checkbox-field" value="R" ><label for="cp_floor_plan_status_r"><span></span> R</label>
                            </div>
                            <div class="inline-form-element ccheck">
                                <input type="checkbox" id="cp_floor_plan_status_k" name="cp_floor_plan_status" class="custom-checkbox-field" value="K"><label for="cp_floor_plan_status_k"><span></span> K</label>
                            </div>
                            <div class="inline-form-element ccheck">
                                <input type="checkbox" id="cp_floor_plan_status_dk" name="cp_floor_plan_status" class="custom-checkbox-field" value="DK"><label for="cp_floor_plan_status_dk"><span></span> DK</label>
                            </div>
                            <div class="inline-form-element ccheck">
                                <input type="checkbox" id="cp_floor_plan_status_ldk" name="cp_floor_plan_status" class="custom-checkbox-field" value="LDK"><label for="cp_floor_plan_status_ldk"><span></span> LDK</label>
                            </div>
                        </td>
                        <td class="form-inline" colspan="2">
                            <input type="text" ng-model="cp_floor_plan_size" name="cp_floor_plan_size" ng-init="cp_floor_plan_size='<?php echo $AppBodys[0]->square_meter ?>'" value="{{ (float)$AppBodys[0]->square_meter }}" class="custom-text-field form-control disabcop floatonly"> &nbsp;&nbsp;&nbsp; m<sup>2</sup>
							<div ng-show="coporateForm.cp_floor_plan_size.$error.pattern"  class="ng-cloak"><small style="color: red; display: block; text-align: center;">このフォーマットxxxx.xxxxで入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">敷金</th>
                        <td>
                            <input type="text" pattern="\d*" ng-model="cp_deposit" ng-init="cp_deposit= '<?php echo $AppBodys[0]->shikikin_hosho;?>'" value="{{ $AppBodys[0]->shikikin_hosho }}" name="cp_deposit" class="custom-text-field form-control disabcop placeholderRight numberonly" placeholder="80000" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_deposit.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                        </td>
                        <th class="table-sidebar">
                            退去償却
                        </th>
                        <td>
                            <input type="text" ng-model="cp_amortization" ng-init="cp_amortization= '<?php echo $AppBodys[0]->shikikin_shokyaku;?>'" value="{{ $AppBodys[0]->shikikin_shokyaku }}" pattern="\d*" name="cp_amortization" class="custom-text-field form-control disabcop placeholderRight numberonly" placeholdeer="10000" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_amortization.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                        </td>
                        <th class="table-sidebar">
                            礼金
                        </th>
                        <td>
                            <input type="text" ng-model="cp_keymoney" ng-init="cp_keymoney= '<?php echo $AppBodys[0]->reikin;?>'" value="{{ $AppBodys[0]->reikin }}" pattern="\d*" name="cp_keymoney" class="custom-text-field form-control disabcop placeholderRight numberonly" placeholder="60000" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_keymoney.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">前家賃</th>
                        <td>
                            <input type="text" pattern="\d*" ng-model="cp_before_rent" ng-init="cp_before_rent= '<?php echo $AppBodys[0]->mae_yachin;?>'" value="{{ $AppBodys[0]->mae_yachin }}" name="cp_before_rent" class="custom-text-field form-control disabcop placeholderRight numberonly" placeholder="5" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_before_rent.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                        </td>
                        <td>月分まで受領予定</td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">家賃 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" pattern="\d*" ng-model="cp_rent" ng-init="cp_rent= '<?php echo $AppBodys[0]->rent;?>'" value="{{ $AppBodys[0]->rent }}" name="cp_rent" class="custom-text-field form-control disabcop cpcash numberonly placeholderRight" placeholder="80000" ng-required="true" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_rent.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_rent.$touched && coporateForm.cp_rent.$invalid && coporateForm.cp_rent.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">家賃を入力してください</small></div>
                        </td>
                        <td>円</td>
                    </tr>
                    <tr>
                        <th style="width:320px;" class="table-sidebar" colspan="2">管理費/共益費</th>
                        <td>
                            <input type="text" pattern="\d*" ng-model="cp_admin_expense" ng-init="cp_admin_expense= '<?php echo $AppBodys[0]->mng_cost;?>'" value="{{ $AppBodys[0]->mng_cost }}" name="cp_admin_expense" class="custom-text-field form-control disabcop cpcash placeholderRight floatonly" placeholder="3000" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_admin_expense.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                        </td>
                        <td>円</td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">駐車料金</th>
                        <td>
                            <input type="text" pattern="\d*" ng-model="cp_parking_fee" ng-init="cp_parking_fee= '<?php echo $AppBodys[0]->park_cost;?>'" value="{{ $AppBodys[0]->park_cost }}" name="cp_parking_fee" class="custom-text-field form-control disabcop cpcash placeholderRight numberonly" placeholder="0" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_parking_fee.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                        </td>
                        <td>円</td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">その他費用</th>
                        <td>
                            <input type="text" pattern="\d*" ng-model="cp_other_expense" ng-init="cp_other_expense= '<?php echo $AppBodys[0]->other_cost;?>'" value="{{ $AppBodys[0]->other_cost }}" name="cp_other_expense" class="custom-text-field form-control disabcop cpcash placeholderRight numberonly" placeholder="0" maxlength="30">
                            <div class="ng-cloak" ng-show="coporateForm.cp_other_expense.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                        </td>
                        <td>円</td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">合計 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" id="totalcpcash" value="{{ $AppBodys[0]->monthly_rent }}" ng-model="cp_total" name="cp_total" ng-init="cp_total= '<?php echo $AppBodys[0]->monthly_rent;?>'" value="{{ $AppBodys[0]->monthly_rent }}" class="custom-text-field form-control disabcop placeholderRight numberonly" placeholder="43000" readonly="readonly">
                        </td>
                        <td>円</td>
                    </tr>
                </table>
                <div class="custom-form-section custom-table-header">
                    <h4>申込者・賃借人(乙)</h4>
                </div>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th style="width:150px;" class="table-sidebar" rowspan="4">現住所</th>
                        <th style="width:170px;" class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_address_postal_code" ng-init="cp_address_postal_code= '<?php echo $AppComs[0]->postal_code;?>'" value="{{ $AppComs[0]->postal_code }}" name="cp_address_postal_code" class="custom-text-field form-control disabcop numberonly" placeholder="1234567" ng-required="true" maxlength="7" ng-minlength="7" pattern="\d*">
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_postal_code.$touched && coporateForm.cp_address_postal_code.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">郵便番号を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_postal_code.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_postal_code.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="10" ng-model="cp_address_prefecture" ng-init="cp_address_prefecture= '<?php echo $AppComs[0]->prefecture;?>'" value="{{ $AppComs[0]->prefecture }}" name="cp_address_prefecture" class="custom-text-field form-control disabcop" placeholder="東京" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_prefecture.$touched && coporateForm.cp_address_prefecture.$invalid && coporateForm.cp_address_prefecture.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_address_street" ng-init="cp_address_street= '<?php echo $AppComs[0]->address;?>'" value="{{ $AppComs[0]->address }}" name="cp_address_street" class="custom-text-field form-control disabcop" placeholder="港区 1-2-3" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_street.$touched && coporateForm.cp_address_street.$invalid && coporateForm.cp_address_street.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" ng-model="cp_address_street_kana" ng-init="cp_address_street_kana= '<?php echo $AppComs[0]->address_kana;?>'" value="{{ $AppComs[0]->address_kana }}" name="cp_address_street_kana" class="custom-text-field form-control disabcop" placeholder="ミナトク 1-2-3" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_street_kana.$touched && coporateForm.cp_address_street_kana.$invalid && coporateForm.cp_address_street_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_address_street_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">会社名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_applicant_lessee_name" ng-init="cp_applicant_lessee_name= '<?php echo $AppComs[0]->company_name;?>'" value="{{ $AppComs[0]->company_name }}" name="cp_applicant_lessee_name" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_applicant_lessee_name.$touched && coporateForm.cp_applicant_lessee_name.$invalid && coporateForm.cp_applicant_lessee_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">会社名を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" maxlength="100" colspan="2">会社名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="100" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" ng-model="cp_applicant_lessee_name_kana" ng-init="cp_applicant_lessee_name_kana= '<?php echo $AppComs[0]->company_name_kana;?>'" value="{{ $AppComs[0]->company_name_kana }}" name="cp_applicant_lessee_name_kana" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_applicant_lessee_name_kana.$touched && coporateForm.cp_applicant_lessee_name_kana.$invalid && coporateForm.cp_applicant_lessee_name_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">会社名(カナ)を入力してください </small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_applicant_lessee_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">代表者名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_represent_name" ng-init="cp_represent_name= '<?php echo $AppComs[0]->daihyosha_name;?>'" value="{{ $AppComs[0]->daihyosha_name }}" name="cp_represent_name" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_represent_name.$touched && coporateForm.cp_represent_name.$invalid && coporateForm.cp_represent_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">代表者名を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">代表者名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" ng-model="cp_represent_name_kana" ng-init="cp_represent_name_kana= '<?php echo $AppComs[0]->daihyosha_name_kana;?>'" value="{{ $AppComs[0]->daihyosha_name_kana }}" name="cp_represent_name_kana" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_represent_name_kana.$touched && coporateForm.cp_represent_name_kana.$invalid && coporateForm.cp_represent_name_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">代表者名(カナ)を入力してください </small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_represent_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" rowspan="2">電話番号</th>
                        <th class="table-sidebar">代表 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_al_mobile_representative" ng-init="cp_al_mobile_representative= '<?php echo $AppComs[0]->telephone;?>'" value="{{ $AppComs[0]->telephone }}" name="cp_al_mobile_representative" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_mobile_representative.$touched && coporateForm.cp_al_mobile_representative.$invalid && coporateForm.cp_al_mobile_representative.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">代表を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">担当部署 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_al_mobile_department" ng-init="cp_al_mobile_department= '<?php echo $AppComs[0]->telephone_tanto;?>'" value="{{ $AppComs[0]->telephone_tanto }}" name="cp_al_mobile_department" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_mobile_department.$touched && coporateForm.cp_al_mobile_department.$invalid && coporateForm.cp_al_mobile_department.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">担当部署を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">申込者メールアドレス <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="email" maxlength="100" ng-model="cp_al_email" name="cp_al_email" ng-init="cp_al_email= '<?php echo $AppComs[0]->mail_address;?>'" value="{{ $AppComs[0]->mail_address }}" class="custom_text_field form-control disabcop" placeholder="abcd@ef.com" ng-required="true">
							<div class="ng-cloak" ng-show="coporateForm.cp_al_email.$touched && coporateForm.cp_al_email.$invalid && coporateForm.cp_al_email.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">担当部署を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">担当部署 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_al_department" name="cp_al_department" ng-init="cp_al_department= '<?php echo $AppComs[0]->tanto_busho;?>'" value="{{ $AppComs[0]->tanto_busho }}" class="custom_text_field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_department.$touched && coporateForm.cp_al_department.$invalid && coporateForm.cp_al_department.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">担当部署を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">担当者名</th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_al_name_of_person_incharge" ng-init="cp_al_name_of_person_incharge= '<?php echo $AppComs[0]->tantosha_name;?>'" value="{{ $AppComs[0]->tantosha_name }}" name="cp_al_name_of_person_incharge" class="custom_text_field form-control disabcop">

                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">企業HP <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="url" maxlength="100" ng-model="cp_al_company_hp" ng-init="cp_al_company_hp= '<?php echo $AppComs[0]->homepage;?>'" value="{{ $AppComs[0]->homepage }}" name="cp_al_company_hp" class="custom_text_field form-control disabcop" placeholder="http://abcd.ef.gh" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_company_hp.$touched && coporateForm.cp_al_company_hp.$invalid && coporateForm.cp_al_company_hp.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">企業HPを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">事業内容 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="5">
                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_1" class="custom-radio-field" value="01"><label for="cp_al_business_1"><span></span> 1.金融機関</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_2" name="cp_al_business" class="custom-radio-field" value="02"><label for="cp_al_business_2"><span></span> 2.不動産</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_3" name="cp_al_business" class="custom-radio-field" value="03"><label for="cp_al_business_3"><span></span> 3.建築/工事</label>
                            </div>


                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_4" name="cp_al_business" class="custom-radio-field" value="04"><label for="cp_al_business_4"><span></span> 4.製造</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_5" name="cp_al_business" class="custom-radio-field" value="05"><label for="cp_al_business_5"><span></span> 5.IT関連</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_6" name="cp_al_business" class="custom-radio-field" value="06"><label for="cp_al_business_6"><span></span> 6.広告</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_7" name="cp_al_business" class="custom-radio-field" value="07"><label for="cp_al_business_7"><span></span> 7.小売/サービス</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_8" name="cp_al_business" class="custom-radio-field" value="08"><label for="cp_al_business_8"><span></span> 8.陸運</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_9" name="cp_al_business" class="custom-radio-field" value="09"><label for="cp_al_business_9"><span></span> 9.教育</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_10" name="cp_al_business" class="custom-radio-field" value="10"><label for="cp_al_business_10"><span></span> 10.医療機関</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_business_11" name="cp_al_business" class="custom-radio-field other-with-input" value="11"><label for="cp_al_business_11"><span></span> 11.その他</label>
                            </div>

                            <input type="text" maxlength="100" ng-model="cp_al_other_business" name="cp_al_other_business" value="{{ $AppComs[0]->jigyo_other }}" class="custom_text_field form-control disabcop input-for-other" placeholder="その他の場合、ここに記入">
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">入居理由 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="5">
                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_tenants_reason_1" name="cp_al_tenants_reason" class="custom-radio-field" value="01"><label for="cp_al_tenants_reason_1"><span></span> 1.社宅</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_tenants_reason_2" name="cp_al_tenants_reason" class="custom-radio-field" value="02"><label for="cp_al_tenants_reason_2"><span></span> 2.転勤</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_tenants_reason_3" name="cp_al_tenants_reason" class="custom-radio-field" value="03"><label for="cp_al_tenants_reason_3"><span></span> 3.事業拡大</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_tenants_reason_4" name="cp_al_tenants_reason" class="custom-radio-field" value="04"><label for="cp_al_tenants_reason_4"><span></span> 4.立地・環境</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_tenants_reason_5" name="cp_al_tenants_reason" class="custom-radio-field" value="05"><label for="cp_al_tenants_reason_5"><span></span> 5.手狭</label>
                            </div>

                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_tenants_reason_6" name="cp_al_tenants_reason" class="custom-radio-field" value="06"><label for="cp_al_tenants_reason_6"><span></span> 6.賃料</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_tenants_reason_7" name="cp_al_tenants_reason" class="custom-radio-field other-with-input" value="07"><label for="cp_al_tenants_reason_7"><span></span> 7.その他</label>
                            </div>

                            <input type="text" maxlength="100" ng-model="cp_al_other_tenants_reason" ng-init="cp_al_other_tenants_reason= '<?php echo $AppComs[0]->nyukyo_riyu_other;?>'" name="cp_al_other_tenants_reason" value="{{ $AppComs[0]->nyukyo_riyu_other }}" class="custom_text_field form-control disabcop input-for-other" placeholder="その他の場合、ここに記入">

                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">設立日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td class="yearselectfield form-inline" colspan="3">
                          <select name="cp_al_date_of_etablisment_year" class="disabcop custom-select">
                           <?php
                             $appcom_ymd = $AppComs[0]->foundation_ym;
                             $appcom_year = substr($appcom_ymd, 0, 4);
                             $appcom_month = substr($appcom_ymd, 4, 2);
                             $appcom_date = substr($appcom_ymd, 6, 7);
                           ?>

                           @for ($i = 2016; $i <= 2050; $i++)
                             @if ($i == $appcom_year)
                             <option selected value="{{ $i }}">{{ $i }}</option>
                             @else
               <option value="{{ $i }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                          <select name="cp_al_date_of_etablisment_month" class="disabcop custom-select">
                       @for ($i = 1; $i <= 12; $i++)
                             <?php
                               if ($i<=9)
                                 $appcom_month_value = '0'.$i;
                               else
                                 $appcom_month_value = $i;
                             ?>
                             @if ($i == $appcom_month)
                             <option selected value="{{ $appcom_month_value }}">{{ $i }}</option>
                             @else
               <option value="{{ $appcom_month_value }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_date_of_etablisment_listing_L" name="cp_al_date_of_etablisment_listing" class="custom-radio-field" ng-required="true" value="1"><label for="cp_al_date_of_etablisment_listing_L"><span></span> 上場</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_al_date_of_etablisment_listing_U" name="cp_al_date_of_etablisment_listing" class="custom-radio-field" value="0"><label for="cp_al_date_of_etablisment_listing_U"><span></span> 非上場</label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">資本金 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td class="form-inline">

                            <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_al_capital" name="cp_al_capital" ng-init="cp_al_capital= '<?php echo (float)$AppComs[0]->shihonkin;?>'" value="{{ (float)$AppComs[0]->shihonkin }}" class="custom_text_field form-control disabcop numberonly" placeholder="1000" ng-required="true">&nbsp;&nbsp;&nbsp;
                            万円
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_capital.$touched && coporateForm.cp_al_capital.$invalid && coporateForm.cp_al_capital.$error.required"><small style="color: red; display: block; text-align: left; margin-left: 20px;" ng-required="true">資本金を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_capital.$error.pattern"><small style="color: red; display: block; text-align: left;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                        </td>
                        <th class="table-sidebar">
                            年商 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                        </th>
                        <td class="form-inline">
                            <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_al_annual_business" ng-init="cp_al_annual_business= '<?php echo (float)$AppComs[0]->nensho;?>'" value="{{ (float)$AppComs[0]->nensho }}" name="cp_al_annual_business" class="custom_text_field form-control disabcop floatonly" placeholder="5000" ng-required="true" maxlength="30">&nbsp;&nbsp;&nbsp;
                            万円
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_annual_business.$touched && coporateForm.cp_al_annual_business.$invalid && coporateForm.cp_al_annual_business.$error.required"><small style="color: red; display: block; text-align: left; margin-left: 20px;" ng-required="true">年商を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_annual_business.$error.pattern"><small style="color: red; display: block; text-align: left;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">従業員数 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td class="form-inline">
                            <input type="text" pattern="\d*" ng-model="cp_al_number_of_employee" name="cp_al_number_of_employee" ng-init="cp_al_number_of_employee= '<?php echo $AppComs[0]->employers;?>'" value="{{ $AppComs[0]->employers }}" class="custom_text_field form-control disabcop numberonly" placeholder="20" ng-required="true">&nbsp;&nbsp;&nbsp;
                            人
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_number_of_employee.$touched && coporateForm.cp_al_number_of_employee.$invalid && coporateForm.cp_al_number_of_employee.$error.required"><small style="color: red; display: block; text-align: left; margin-left: 20px;" ng-required="true">従業員数を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_al_number_of_employee.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 20px;" ng-required="true">入力整数のみ</small></div>
                        </td>
                    </tr>
                </table>
                <div class="custom-form-section custom-table-header">
                    <h4>連帯保証人</h4>
                </div>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th style="width:150px;" class="table-sidebar" rowspan="4">現住所</th>
                        <th style="width:170px;" class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_joint_address_postal_code" ng-init="cp_joint_address_postal_code= '<?php echo $AppCosigner[0]->postal_code;?>'" value="{{ $AppCosigner[0]->postal_code }}" name="cp_joint_address_postal_code" class="custom-text-field form-control disabcop numberonly" placeholder="1234567" ng-required="true" ng-minlength="7" maxlength="7" pattern="\d*">
                            <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_postal_code.$touched && coporateForm.cp_joint_address_postal_code.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">郵便番号を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_postal_code.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_postal_code.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="10" ng-model="cp_joint_address_prefecture" ng-init="cp_joint_address_prefecture= '<?php echo $AppCosigner[0]->prefecture;?>'" value="{{ $AppCosigner[0]->prefecture }}" name="cp_joint_address_prefecture" class="custom-text-field form-control disabcop" placeholder="東京" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_prefecture.$touched && coporateForm.cp_joint_address_prefecture.$invalid && coporateForm.cp_joint_address_prefecture.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text"  maxlength="200" ng-model="cp_joint_address_street" ng-init="cp_joint_address_street= '<?php echo $AppCosigner[0]->address;?>'" value="{{ $AppCosigner[0]->address }}" name="cp_joint_address_street" class="custom-text-field form-control disabcop" placeholder="港区 1-2-3" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_street.$touched && coporateForm.cp_joint_address_street.$invalid && coporateForm.cp_joint_address_street.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_joint_address_street_kana" ng-init="cp_joint_address_street_kana= '<?php echo $AppCosigner[0]->address_kana;?>'" value="{{ $AppCosigner[0]->address_kana }}" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="cp_joint_address_street_kana" class="custom-text-field form-control disabcop" placeholder="ミナトク 1-2-3" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_street_kana.$touched && coporateForm.cp_joint_address_street_kana.$invalid && coporateForm.cp_joint_address_street_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_street_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_jg_name" ng-init="cp_jg_name= '<?php echo $AppCosigner[0]->name;?>'" value="{{ $AppCosigner[0]->name }}" name="cp_jg_name" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_name.$touched && coporateForm.cp_jg_name.$invalid && coporateForm.cp_jg_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                        </td>
                        <th class="table-sidebar">
                            氏名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                        </th>
                        <td colspan="2">
                            <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" ng-model="cp_jg_name_kana" ng-init="cp_jg_name_kana= '<?php echo $AppCosigner[0]->name_kana;?>'" value="{{ $AppCosigner[0]->name_kana }}" name="cp_jg_name_kana" class="custom-text-field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_name_kana.$touched && coporateForm.cp_jg_name_kana.$invalid && coporateForm.cp_jg_name_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名(カナ)を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">性別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <div class="inline-form-element">
                                <input type="radio" id="cp_emergency_first_contact_sex_M" name="cp_emergency_first_contact_sex" class="custom-radio-field" value="M" checked="checked"><label for="cp_emergency_first_contact_sex_M"><span></span> 男</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_emergency_first_contact_sex_F" name="cp_emergency_first_contact_sex" class="custom-radio-field" value="F"><label for="cp_emergency_first_contact_sex_F"><span></span> 女</label>

                            </div>

                        </td>
                        <th class="table-sidebar">
                            続き柄  <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                        </th>
                        <td colspan="2">
                            <input type="text" maxlength="10" ng-model="cp_jg_relationship" ng-init="cp_jg_relationship='<?php echo $AppCosigner[0]->tsuduki_gara;?>'" value="{{ $AppCosigner[0]->tsuduki_gara }}" name="cp_jg_relationship" class="custom_text_field form-control disabcop" placeholder="母親" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_relationship.$touched && coporateForm.cp_jg_relationship.$invalid && coporateForm.cp_jg_relationship.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2" class="form-inline">
                          <select name="cp_emergency_first_contact_birth_year" class="disabcop custom-select">
                             <?php
                             $appcos_ymd = $AppCosigner[0]->birthday;
                             $appcos_year = substr($appcos_ymd, 0, 4);
                             $appcos_month = substr($appcos_ymd, 4, 2);
                             $appcos_date = substr($appcos_ymd, 6, 7);
                           ?>

                           @for ($i = 1900; $i <= 2050; $i++)
                             @if ($i == $appcos_year)
                             <option selected value="{{ $i }}">{{ $i }}</option>
                             @else
               <option value="{{ $i }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                          <select name="cp_emergency_first_contact_birth_month" class="disabcop custom-select">
                            @for ($i = 1; $i <= 12; $i++)
                             <?php
                               if ($i<=9)
                                 $appcos_month_value = '0'.$i;
                               else
                                 $appcos_month_value = $i;
                             ?>
                             @if ($i == $appcos_month)
                             <option selected value="{{ $appcos_month_value }}">{{ $i }}</option>
                             @else
               <option value="{{ $appcos_month_value }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                          <select name="cp_emergency_first_contact_birth_date" class="disabcop custom-select">
                              @for ($i = 1; $i <= 31; $i++)
                             <?php
                               if ($i<=9)
                                 $appcos_date_value = '0'.$i;
                               else
                                 $appcos_date_value = $i;
                             ?>
                             @if ($i == $appcos_date)
                             <option selected value="{{ $appcos_date_value }}">{{ $i }}</option>
                             @else
               <option value="{{ $appcos_date_value }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;日
                          </td>
                          <th class="table-sidebar">
                            年齢<span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                          </th>
                          <td>
                            <input type="text" ng-model="cp_emergency_first_contact_birth_age" id="cp_emergency_first_contact_birth_age" name="cp_emergency_first_contact_birth_age" class="custom-text-field form-control disabcop numberonly" ng-required="true" ng-init="cp_emergency_first_contact_birth_age= '<?php echo $AppCosigner[0]->age;?>'" value="{{ $AppCosigner[0]->age }}" maxlength="3">
                            <div class="ng-cloak" ng-show="coporateForm.cp_emergency_first_contact_birth_age.$touched && coporateForm.cp_emergency_first_contact_birth_age.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">歳を入力してください</small></div>
							<small class="cp_emergency_first_contact_birth_age-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">固定電話</th>
                        <td colspan="2"><input type="text" name="cp_efc_fixed_line_phone" ng-init="cp_efc_fixed_line_phone= '<?php echo $AppCosigner[0]->telephone;?>'" value="{{ $AppCosigner[0]->telephone }}" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar" colspan="2">携帯電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_jg_mobile" ng-init="cp_jg_mobile= '<?php echo $AppCosigner[0]->mobile_phone;?>'" value="{{ $AppCosigner[0]->mobile_phone }}" name="cp_jg_mobile" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" ng-required="true" maxlength="20">                            
							<div class="ng-cloak" ng-show="coporateForm.cp_jg_mobile.$touched && coporateForm.cp_jg_mobile.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                        </td>
                    </tr>
                    <?php

                  $driver_all = $AppCosigner[0]->drivers_licence_no;
                  $driver_1 = substr($driver_all, 0, 4);
                  $driver_2 = substr($driver_all, 4, 4);
                  $driver_3 = substr($driver_all, 8, 4);
                  ?>
                   <tr>
                      <th class="table-sidebar" colspan="2">運転免許番号</th>
                      <td colspan="5" class="form-inline">
                         <input type="text" ng-model="cp_jg_driver_licence_number1" name="cp_jg_driver_licence_number1" class="custom_text_field form-control disabcop placeholdercenter numberonly" ng-init="cp_jg_driver_licence_number1='<?php echo $driver_1;?>'" value="{{ $driver_1 }}" ng-minlength="4" pattern="\d*" maxlength="4">
                         <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number1.$error.minlength"><small style="color: red; display: block; text-align: center;">4文字入力してください</small></div>
                         &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                         <input type="text" ng-model="cp_jg_driver_licence_number2" name="cp_jg_driver_licence_number2" class="custom_text_field form-control disabcop placeholdercenter numberonly" ng-init="cp_jg_driver_licence_number2='<?php echo $driver_2;?>'" value="{{ $driver_2 }}" ng-minlength="4" pattern="\d*" maxlength="4">
                         <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number2.$error.minlength"><small style="color: red; display: block; text-align: center;">4文字入力してください</small></div>
                         &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                         <input type="text" ng-model="cp_jg_driver_licence_number3" name="cp_jg_driver_licence_number3" class="custom_text_field form-control disabcop placeholdercenter numberonly" ng-init="cp_jg_driver_licence_number3='<?php echo $driver_3;?>'" value="{{ $driver_3 }}" ng-minlength="4" pattern="\d*" maxlength="4">
                         <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number3.$error.minlength"><small style="color: red; display: block; text-align: center;">4文字入力してください</small></div>
                      </td>
                   </tr>
                   <tr>
                        <th class="table-sidebar" rowspan="11">勤め先</th>
                        <th class="table-sidebar">名称</th>
                        <td colspan="2">
                            <input type="text" maxlength="100" ng-model="cp_efc_junkyard_name" ng-init="cp_efc_junkyard_name= '<?php echo $AppCosigner[0]->work_place_name;?>'" value="{{ $AppCosigner[0]->work_place_name }}" name="cp_efc_junkyard_name" class="custom_text_field form-control disabcop">
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">名称(カナ)</th>
                        <td colspan="2">
                            <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" ng-model="cp_efc_junkyard_name_kana" ng-init="cp_efc_junkyard_name_kana= '<?php echo $AppCosigner[0]->work_place_name_kana;?>'" value="{{ $AppCosigner[0]->work_place_name_kana }}" name="cp_efc_junkyard_name_kana" class="custom_text_field form-control disabcop">
                            <div class="ng-cloak" ng-show="coporateForm.cp_efc_junkyard_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">郵便番号</th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_jg_junkyard_postal_code" name="cp_jg_junkyard_postal_code" ng-init="cp_jg_junkyard_postal_code= '<?php echo $AppCosigner[0]->work_place_postal_code;?>'" value="{{ $AppCosigner[0]->work_place_postal_code }}" class="custom_text_field form-control disabcop numberonly" placeholder="1234567" ng-minlength="7" maxlength="7" pattern="\d*">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_postal_code.$touched && coporateForm.cp_jg_junkyard_postal_code.$invalid && coporateForm.cp_jg_junkyard_postal_code.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">郵便番号を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_postal_code.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_postal_code.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">都道府県</th>
                        <td colspan="2">
                            <input type="text" maxlength="10" ng-model="cp_jg_junkyard_prefectures" ng-init="cp_jg_junkyard_prefectures= '<?php echo $AppCosigner[0]->work_place_prefecture;?>'" value="{{ $AppCosigner[0]->work_place_prefecture }}" name="cp_jg_junkyard_prefectures" class="custom_text_field form-control disabcop" placeholder="東京">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_prefectures.$touched && coporateForm.cp_jg_junkyard_prefectures.$invalid && coporateForm.cp_jg_junkyard_prefectures.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所</th>
                        <td colspan="2">
                            <input type="text" maxlength="200" ng-model="cp_jg_junkyard_street_address" ng-init="cp_jg_junkyard_street_address= '<?php echo $AppCosigner[0]->work_place_address;?>'" value="{{ $AppCosigner[0]->work_place_address }}" name="cp_jg_junkyard_street_address" class="custom_text_field form-control disabcop" placeholder="港区 1-2-3">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_street_address.$touched && coporateForm.cp_jg_junkyard_street_address.$invalid && coporateForm.cp_jg_junkyard_street_address.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">住所(カナ)</th>
                        <td colspan="2">
                            <input type="text" maxlength="200" ng-model="cp_jg_junkyard_address_kana" ng-init="cp_jg_junkyard_address_kana= '<?php echo $AppCosigner[0]->work_place_address_kana;?>'" value="{{ $AppCosigner[0]->work_place_address_kana }}" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="cp_jg_junkyard_address_kana" class="custom_text_field form-control disabcop" placeholder="ミナトク 1-2-3">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_address_kana.$touched && coporateForm.cp_jg_junkyard_address_kana.$invalid && coporateForm.cp_jg_junkyard_address_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_address_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">年収</th>
                        <td colspan="2" class="form-inline">
                            <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_efc_annual_income" ng-init="cp_efc_annual_income= '<?php echo (float)$AppCosigner[0]->nenshu;?>'" value="{{ (float)$AppCosigner[0]->nenshu }}" name="cp_efc_annual_income" class="custom_text_field form-control disabcop placeholderRight floatonly" placeholder="600" maxlength="30">&nbsp;&nbsp;&nbsp;
                            万円
                            <div class="ng-cloak" ng-show="coporateForm.cp_efc_annual_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                        </td>
                        <th class="table-sidebar">
                            月収
                        </th>
                        <td colspan="2" class="form-inline">
                            <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_efc_monthly_income" ng-init="cp_efc_monthly_income= '<?php echo (float)$AppCosigner[0]->gesshu;?>'" value="{{ (float)$AppCosigner[0]->gesshu }}" name="cp_efc_monthly_income" class="custom_text_field form-control disabcop floatonly" placeholder="32.5" maxlength="30">&nbsp;&nbsp;&nbsp;
                            万円
                            <div class="ng-cloak" ng-show="coporateForm.cp_efc_monthly_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">部署</th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_jg_department" name="cp_jg_department" ng-init="cp_jg_department= '<?php echo $AppCosigner[0]->busho;?>'" value="{{ $AppCosigner[0]->busho }}" class="custom_text_field form-control disabcop">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_department.$touched && coporateForm.cp_jg_department.$invalid && coporateForm.cp_jg_department.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">部署を入力してください</small></div>
                        </td>
                        <th class="table-sidebar">
                            役職
                        </th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_jg_manager" ng-init="cp_jg_manager= '<?php echo $AppCosigner[0]->yakushoku;?>'" value="{{ $AppCosigner[0]->yakushoku }}" ng-init="jd_length_of_service_year= '<?php echo $AppCosigner[0]->kinzoku_y;?>'" value="{{ $AppCosigner[0]->kinzoku_y }}" name="cp_jg_manager" class="custom_text_field form-control disabcop numberonly" maxlength="4">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_manager.$touched && coporateForm.cp_jg_manager.$invalid && coporateForm.cp_jg_manager.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">役職を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">勤続年数</th>
                        <td colspan="3" class="form-inline">
                            <input type="text" ng-model="jd_length_of_service_year" ng-init="jd_length_of_service_year= '<?php echo $AppCosigner[0]->kinzoku_y;?>'" value="{{ $AppCosigner[0]->kinzoku_y }}" name="jd_length_of_service_year" class="custom_text_field form-control disabcop numberonly" maxlength="4">&nbsp;&nbsp;&nbsp;
                            <div class="ng-cloak" ng-show="coporateForm.jd_length_of_service_year.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">正の整数のみを入力してください</small></div>
                            年
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" ng-model="jd_length_of_service_month" id="jd_length_of_service_month" name="jd_length_of_service_month" ng-init="jd_length_of_service_month= '<?php echo $AppCosigner[0]->kinzoku_m;?>'" value="{{ $AppCosigner[0]->kinzoku_m }}" class="custom_text_field form-control disabcop numberonly" maxlength="2">&nbsp;&nbsp;&nbsp;
                            ヶ月
                            <small class="jd_length_of_service_month-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">勤務先電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="2">
                            <input type="text" ng-model="cp_jg_business_mobile" ng-init="cp_jg_business_mobile= '<?php echo $AppCosigner[0]->work_place_tel;?>'" value="{{ $AppCosigner[0]->work_place_tel }}" name="cp_jg_business_mobile" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" maxlength="20">
                            <div class="ng-cloak" ng-show="coporateForm.cp_jg_business_mobile.$touched && coporateForm.cp_jg_business_mobile.$invalid && coporateForm.cp_jg_business_mobile.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">勤務先電話を入力してください</small></div>
                        </td>
                    </tr>
                </table>
                <div class="custom-form-section custom-table-header">
                    <h4>入居者</h4>
                </div>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th style="width:120px;" class="table-sidebar" rowspan="17">入居者<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <div class="inline-form-element">
                                <input type="radio" id="cp_resident_relationship_1" name="cp_resident_relationship" class="custom-radio-field" value="01"><label for="cp_resident_relationship_1"><span></span> 1.申込者のみ</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_resident_relationship_2" name="cp_resident_relationship" class="custom-radio-field" value="02"><label for="cp_resident_relationship_2"><span></span> 2.申込者および家族</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_resident_relationship_3" name="cp_resident_relationship" class="custom-radio-field" value="03"><label for="cp_resident_relationship_3"><span></span> 3.家族(申込者以外)</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_resident_relationship_4" name="cp_resident_relationship" class="custom-radio-field other-with-input" value="04"><label for="cp_resident_relationship_4"><span></span> 4.その他</label>
                            </div>
                            <input type="text" name="cp_resident_relationship_other" value="{{ $AppResident[0]->nyukyosha_other }}" class="custom_text_field form-control disabcop input-for-other" placeholder="other">
                        </td>
                    </tr>
                    <tr>
                        <td style="width:40px;" rowspan="5">1</td>
                    </tr>
                    <tr>
                        <th style="width:160px;" class="table-sidebar">氏名<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" maxlength="100" ng-model="cp_re_name_1" name="cp_re_name_1" ng-init="cp_re_name_1= '<?php echo $AppResident[0]->nyukyosha_1_name;?>'" value="{{ $AppResident[0]->nyukyosha_1_name }}" class="custom_text_field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_re_name_1.$touched && coporateForm.cp_re_name_1.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                        </td>
                        <th style="width:120px;" class="table-sidebar">性別<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td style="width:200px;">
                            <div class="inline-form-element">
                                <input type="radio" id="cp_re_sex_1_M" name="cp_re_sex_1" class="custom-radio-field" value="M"><label for="cp_re_sex_1_M"><span></span> 男</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_re_sex_1_F" name="cp_re_sex_1" class="custom-radio-field" value="F"><label for="cp_re_sex_1_F"><span></span> 女</label>
                            </div>

                        </td>
                        <th class="table-sidebar">続き柄<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" maxlength="10" ng-model="cp_re_relation_1" ng-init="cp_re_relation_1= '<?php echo $AppResident[0]->nyukyosha_1_tsuzukigara;?>'" value="{{ $AppResident[0]->nyukyosha_1_tsuzukigara }}" name="cp_re_relation_1" class="custom_text_field form-control disabcop" placeholder="本人" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_re_relation_1.$touched && coporateForm.cp_re_relation_1.$invalid && coporateForm.cp_re_relation_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">生年月日<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="3">
                          <select name="cp_resident_birth_year_1" class="disabcop custom-select">
                             <?php
                             $resident_ymd_1 = $AppResident[0]->nyukyosha_1_birthday;
                             $resident_year_1 = substr($resident_ymd_1, 0, 4);
                             $resident_month_1 = substr($resident_ymd_1, 4, 2);
                             $resident_date_1 = substr($resident_ymd_1, 6, 7);
                           ?>

                           @for ($i = 1900; $i <= 2050; $i++)
                             @if ($i == $resident_year_1)
                             <option selected value="{{ $i }}">{{ $i }}</option>
                             @else
								<option value="{{ $i }}">{{ $i }}</option>
							@endif
						   @endfor
                          </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;

                          <select name="cp_resident_birth_month_1" class="disabcop custom-select">
                            @for ($i = 1; $i <= 12; $i++)
                             <?php
                               if ($i<=9)
                                 $resident_month_value_1 = '0'.$i;
                               else
                                 $resident_month_value_1 = $i;
                             ?>
								@if ($i == $resident_month_1)
									<option selected value="{{ $resident_month_value_1 }}">{{ $i }}</option>
								@else
									<option value="{{ $resident_month_value_1 }}">{{ $i }}</option>
								@endif
							@endfor
                          </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                          <select name="cp_resident_birth_date_1" class="disabcop custom-select">
                             @for ($i = 1; $i <= 31; $i++)
                             <?php
                               if ($i<=9)
                                 $resident_date_value_1 = '0'.$i;
                               else
                                 $resident_date_value_1 = $i;
                             ?>
								@if ($i == $resident_date_1)
									<option selected value="{{ $resident_date_value_1 }}">{{ $i }}</option>
								@else
									<option value="{{ $resident_date_value_1 }}">{{ $i }}</option>
								@endif
							 @endfor

                          </select>&nbsp;&nbsp;&nbsp;日
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">携帯電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" ng-model="cp_re_mobile_1" ng-init="cp_re_mobile_1= '<?php echo $AppResident[0]->nyukyosha_1_mobile_phone;?>'" value="{{ $AppResident[0]->nyukyosha_1_mobile_phone }}" name="cp_re_mobile_1" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" ng-required="true" maxlength="20">
							<div class="ng-cloak" ng-show="coporateForm.cp_re_mobile_1.$touched && coporateForm.cp_re_mobile_1.$invalid && coporateForm.cp_re_mobile_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                        </td>
                        <th class="table-sidebar">年収</th>
                        <td class="form-inline" colspan="3">
                            <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_re_annual_income_1" ng-init="cp_re_annual_income_1= '<?php echo $AppResident[0]->nyukyosha_1_nenshu;?>'" value="{{ $AppResident[0]->nyukyosha_1_nenshu }}" name="cp_re_annual_income_1" class="custom_text_field form-control disabcop placeholderRight floatonly" placeholder="600" maxlength="30">
                            &nbsp;&nbsp;&nbsp; 万円
                            <div class="ng-cloak" ng-show="coporateForm.cp_re_annual_income_1.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">勤め先<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="4"><input type="text" ng-model="cp_re_junkyard_1" ng-init="cp_re_junkyard_1='<?php echo $AppResident[0]->nyukyosha_1_work_place;?>'" value="{{ $AppResident[0]->nyukyosha_1_work_place }}" ng-required="true" name="cp_re_junkyard_1" class="custom_text_field form-control disabcop">
                            <div class="ng-cloak" ng-show="coporateForm.cp_re_junkyard_1.$touched && coporateForm.cp_re_junkyard_1.$invalid && coporateForm.cp_re_junkyard_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">勤め先を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="5">2</td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">氏名</th>
                        <td>
                            <input type="text" maxlength="100" ng-model="cp_re_name_2" ng-init="cp_re_name_2= '<?php echo $AppResident[0]->nyukyosha_2_name;?>'" value="{{ $AppResident[0]->nyukyosha_2_name }}" name="cp_re_name_2" class="custom_text_field form-control disabcop">
                        </td>
                        <th class="table-sidebar">性別</th>
                        <td>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_re_sex_2_M" name="cp_re_sex_2" class="custom-radio-field uncheckableradio" value="M"><label for="cp_re_sex_2_M"><span></span> 男</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_re_sex_2_F" name="cp_re_sex_2" class="custom-radio-field uncheckableradio" value="F"><label for="cp_re_sex_2_F"><span></span> 女</label>
                            </div>

                        </td>
                        <th class="table-sidebar">続き柄</th>
                        <td>
                            <input type="text" maxlength="10" ng-model="cp_re_relation_2" ng-init="cp_re_relation_2= '<?php echo $AppResident[0]->nyukyosha_2_tsuzukigara;?>'" value="{{ $AppResident[0]->nyukyosha_2_tsuzukigara }}" name="cp_re_relation_2" class="custom_text_field form-control disabcop" placeholder="妻">
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">生年月日</th>
                        <td colspan="3">
                          <select name="cp_re_birth_year_2" class="disabcop custom-select">
							<option value="0000" hidden="hidden">YYYY</option>
                             <?php
                             $resident_ymd_2 = $AppResident[0]->nyukyosha_2_birthday;
                             $resident_year_2 = substr($resident_ymd_2, 0, 4);
                             $resident_month_2 = substr($resident_ymd_2, 4, 2);
                             $resident_date_2 = substr($resident_ymd_2, 6, 7);
                           ?>

                           @for ($i = 1900; $i <= 2050; $i++)
                             @if ($i == $resident_year_2)
                             <option selected value="{{ $i }}">{{ $i }}</option>
                             @else
               <option value="{{ $i }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                          <select name="cp_re_birth_month_2" class="disabcop custom-select">
						  <option value="00" hidden="hidden">YYYY</option>
                            @for ($i = 1; $i <= 12; $i++)
                             <?php
                               if ($i<=9)
                                 $resident_month_value_2 = '0'.$i;
                               else
                                 $resident_month_value_2 = $i;
                             ?>
                             @if ($i == $resident_month_2)
                             <option selected value="{{ $resident_month_value_2 }}">{{ $i }}</option>
                             @else
               <option value="{{ $resident_month_value_2 }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                          <select name="cp_re_birth_date_2" class="disabcop custom-select">
						  <option value="00" hidden="hidden">YYYY</option>
                             @for ($i = 1; $i <= 31; $i++)
                             <?php
                               if ($i<=9)
                                 $resident_date_value_2 = '0'.$i;
                               else
                                 $resident_date_value_2 = $i;
                             ?>
                             @if ($i == $resident_date_2)
                             <option selected value="{{ $resident_date_value_2 }}">{{ $i }}</option>
                             @else
               <option value="{{ $resident_date_value_2 }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;日
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">携帯電話</th>
                        <td>
                            <input type="text" ng-model="cp_re_mobile_2" ng-init="cp_re_mobile_2= '<?php echo $AppResident[0]->nyukyosha_2_mobile_phone;?>'" value="{{ $AppResident[0]->nyukyosha_2_mobile_phone }}" name="cp_re_mobile_2" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" maxlength="20">
                        </td>
                        <th class="table-sidebar">年収</th>
                        <td class="form-inline" colspan="3">
                            <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_re_annual_income_2" ng-init="cp_re_annual_income_2= '<?php echo (float)$AppResident[0]->nyukyosha_2_nenshu;?>'" value="{{ (float)$AppResident[0]->nyukyosha_2_nenshu }}" name="cp_re_annual_income_2" class="custom_text_field form-control disabcop placeholderRight floatonly" placeholder="100" maxlength="30">
                            &nbsp;&nbsp;&nbsp; 万円
                            <div class="ng-cloak" ng-show="coporateForm.cp_re_annual_income_2.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">勤め先</th>
                        <td colspan="4">
                            <input type="text" ng-model="cp_re_junkyard_2" ng-init="cp_re_junkyard_2= '<?php echo $AppResident[0]->nyukyosha_2_work_place;?>'" value="{{ $AppResident[0]->nyukyosha_2_work_place }}" name="cp_re_junkyard_2" class="custom_text_field form-control disabcop">
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="5">3</td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">氏名</th>
                        <td>
                            <input type="text" maxlength="100" ng-model="cp_re_name_3" ng-init="cp_re_name_3= '<?php echo $AppResident[0]->nyukyosha_3_name;?>'" value="{{ $AppResident[0]->nyukyosha_3_name }}" name="cp_re_name_3" class="custom_text_field form-control disabcop">
                        </td>
                        <th class="table-sidebar">性別</th>
                        <td>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_re_sex_3_M" name="cp_re_sex_3" class="custom-radio-field uncheckableradio" value="M"><label for="cp_re_sex_3_M"><span></span> 男</label>
                            </div>
                            <div class="inline-form-element">
                                <input type="radio" id="cp_re_sex_3_F" name="cp_re_sex_3" class="custom-radio-field uncheckableradio" value="F"><label for="cp_re_sex_3_F"><span></span> 女</label>
                            </div>

                        </td>
                        <th class="table-sidebar">続き柄</th>
                        <td>
                            <input type="text" maxlength="10" ng-model="cp_re_relation_3" ng-init="cp_re_relation_3= '<?php echo $AppResident[0]->nyukyosha_3_tsuzukigara;?>'" value="{{ $AppResident[0]->nyukyosha_3_tsuzukigara }}" name="cp_re_relation_3" class="custom_text_field form-control disabcop" placeholder="息子">
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">生年月日</th>
                        <td colspan="3">
                          <select name="cp_re_birth_year_3" class="disabcop custom-select">
                            <option value="0000" hidden="hidden">YYYY</option>
                              <?php
                             $resident_ymd_3 = $AppResident[0]->nyukyosha_3_birthday;
                             $resident_year_3 = substr($resident_ymd_3, 0, 4);
                             $resident_month_3 = substr($resident_ymd_3, 4, 2);
                             $resident_date_3 = substr($resident_ymd_3, 6, 7);
                           ?>

                           @for ($i = 1900; $i <= 2050; $i++)
                             @if ($i == $resident_year_3)
                             <option selected value="{{ $i }}">{{ $i }}</option>
                             @else
               <option value="{{ $i }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                          <select name="cp_re_birth_month_3" class="disabcop custom-select">
                            <option value="00" hidden="hidden">YYYY</option>
                             @for ($i = 1; $i <= 12; $i++)
                             <?php
                               if ($i<=9)
                                 $resident_month_value_3 = '0'.$i;
                               else
                                 $resident_month_value_3 = $i;
                             ?>
                             @if ($i == $resident_month_3)
                             <option selected value="{{ $resident_month_value_3 }}">{{ $i }}</option>
                             @else
               <option value="{{ $resident_month_value_3 }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                          <select name="cp_re_birth_date_3" class="disabcop custom-select">
                            <option value="00" hidden="hidden">YYYY</option>
                             @for ($i = 1; $i <= 31; $i++)
                             <?php
                               if ($i<=9)
                                 $resident_date_value_3 = '0'.$i;
                               else
                                 $resident_date_value_3 = $i;
                             ?>
                             @if ($i == $resident_date_3)
                             <option selected value="{{ $resident_date_value_3 }}">{{ $i }}</option>
                             @else
               <option value="{{ $resident_date_value_3 }}">{{ $i }}</option>
               @endif
           @endfor
                          </select>&nbsp;&nbsp;&nbsp;日

                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">携帯電話</th>
                        <td>
                            <input type="text" ng-model="cp_re_mobile_3" name="cp_re_mobile_3" ng-init="cp_re_mobile_3= '<?php echo $AppResident[0]->nyukyosha_3_mobile_phone;?>'" value="{{ $AppResident[0]->nyukyosha_3_mobile_phone }}" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" maxlength="20">
                        </td>
                        <th class="table-sidebar">年収</th>
                        <td class="form-inline" colspan="3">
                            <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_re_annual_income_3" ng-init="cp_re_annual_income_3= '<?php echo (float)$AppResident[0]->nyukyosha_3_nenshu;?>'" value="{{ (float)$AppResident[0]->nyukyosha_3_nenshu }}" name="cp_re_annual_income_3" class="custom_text_field form-control disabcop placeholderRight floatonly" placeholder="600" maxlength="30">
                            &nbsp;&nbsp;&nbsp; 万円
                            <div class="ng-cloak" ng-show="coporateForm.cp_re_annual_income_3.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">勤め先</th>
                        <td colspan="4">
                            <input type="text" ng-model="cp_re_junkyard_3" ng-init="cp_re_junkyard_3= '<?php echo $AppResident[0]->nyukyosha_3_work_place;?>'" value="{{ $AppResident[0]->nyukyosha_3_work_place }}" name="cp_re_junkyard_3" class="custom_text_field form-control disabcop">
                        </td>
                    </tr>
                </table>
                <div class="custom-form-section custom-table-header">
                    <h4>その他</h4>
                </div>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th colspan="2" class="table-sidebar">備考欄</th>
                        <td colspan="4">
                            <input type="text"  value="{{ $AppOthers[0]->biki }}" name="cp_other_remark" class="custom_text_field form-control disabcop" >

                        </td>
                    </tr>
                    <tr>
                        <th style="width:140px;" class="table-sidebar" rowspan="5">仲介会社</th>
                    </tr>
                    <tr>
                        <th class="table-sidebar">会社名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="4">
                            <input type="text" maxlength="1000" ng-model="cp_other_company_name" ng-init="cp_other_company_name= '<?php echo $AppOthers[0]->chukai_company;?>'" value="{{ $AppOthers[0]->chukai_company }}" name="cp_other_company_name" class="custom_text_field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_other_company_name.$touched && coporateForm.cp_other_company_name.$invalid && coporateForm.cp_other_company_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">会社名を入力してください </small></div>
                        </td>
                    </tr>
                    <tr>
                        <th style="width:180px;" class="table-sidebar">住所<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="4">
                            <input type="text" maxlength="200" ng-model="cp_other_street_address" ng-init="cp_other_street_address= '<?php echo $AppOthers[0]->chukai_address;?>'" value="{{ $AppOthers[0]->chukai_address }}" name="cp_other_street_address" class="custom_text_field form-control disabcop" ng-required="true" placeholder="港区 1-2-3">
                            <div class="ng-cloak" ng-show="coporateForm.cp_other_street_address.$touched && coporateForm.cp_other_street_address.$invalid && coporateForm.cp_other_street_address.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">電話番号<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" ng-model="cp_other_mobile" ng-init="cp_other_mobile= '<?php echo $AppOthers[0]->chukai_telephone;?>'" value="{{ $AppOthers[0]->chukai_telephone }}" name="cp_other_mobile" class="custom_text_filed form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                            <div class="ng-cloak" ng-show="coporateForm.cp_other_mobile.$touched && coporateForm.cp_other_mobile.$invalid && coporateForm.cp_other_mobile.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">電話番号を入力してください</small></div>
                        </td>
                        <th class="table-sidebar">FAX<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td>
                            <input type="text" ng-model="cp_other_fax" ng-init="cp_other_fax= '<?php echo $AppOthers[0]->chukai_fax;?>'" value="{{ $AppOthers[0]->chukai_fax }}" name="cp_other_fax" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                            <div class="ng-cloak" ng-show="coporateForm.cp_other_fax.$touched && coporateForm.cp_other_fax.$invalid && coporateForm.cp_other_fax.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">FAXを入力してください</small></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-sidebar">担当者<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        <td colspan="4">
                            <input type="text" maxlength="100" ng-model="cp_other_person_incharge" ng-init="cp_other_person_incharge= '<?php echo $AppOthers[0]->chukai_tantou;?>'" value="{{ $AppOthers[0]->chukai_tantou }}" name="cp_other_person_incharge" class="custom_text_field form-control disabcop" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_other_person_incharge.$touched && coporateForm.cp_other_person_incharge.$invalid && coporateForm.cp_other_person_incharge.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">担当者を入力してください</small></div>
                        </td>
                    </tr>
                </table>
                <div class="custom-form-section custom-table-header">
                           <h4>添付ファイル</h4>
                        </div>
                        <table class="table table-bordered table-responsive">
                           <tr>
                              <th class="table-sidebar" style="width: 20em;">証明書コピー</th>
                              <td>
                                 <ul style="list-style-type: none;">
                                    <li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperatecertificatecopy" /></span>
                                           <span class="fileinput-filename"></span><span class="fileinput-new"><?php
                                           if(empty($certificatecopyfile))
                                           {
                                             echo "選択されていません";
                                           }
                                           else {
                                              echo $certificatecopyfile[0]->file_name;
                                           }
                                           ?></span>
                                       </div>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">入居申込書</th>
                              <td>
                                 <ul style="list-style-type: none;">
                                    <li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperatetenantapplicationform" /></span>
                                           <span class="fileinput-filename"></span><span class="fileinput-new"><?php
                                           if(empty($tenantapplicationformfile))
                                           {
                                             echo "選択されていません";
                                           }
                                           else {
                                              echo $tenantapplicationformfile[0]->file_name;
                                           }
                                           ?></span>
                                       </div>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">その他資料</th>
                              <td>
                                 <ul style="list-style-type: none;">
                                    <li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother1" /></span>
                                           <span class="fileinput-filename"></span><span class="fileinput-new"><?php
                                           if(empty($other1file))
                                           {
                                             echo "選択されていません";
                                           }
                                           else {
                                              echo $other1file[0]->file_name;
                                           }
                                           ?></span>
                                       </div>
                                    </li>
         									<li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother2" /></span>
                                           <span class="fileinput-filename"></span><span class="fileinput-new"><?php
                                           if(empty($other2file))
                                           {
                                             echo "選択されていません";
                                           }
                                           else {
                                              echo $other2file[0]->file_name;
                                           }
                                           ?></span>
                                       </div>
                                    </li>
         									<li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother3" /></span>
                                           <span class="fileinput-filename"></span><span class="fileinput-new"><?php
                                           if(empty($other3file))
                                           {
                                             echo "選択されていません";
                                           }
                                           else {
                                              echo $other3file[0]->file_name;
                                           }
                                           ?></span>
                                       </div>
                                    </li>
         									<li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother4" /></span>
                                           <span class="fileinput-filename"></span><span class="fileinput-new"><?php
                                           if(empty($other4file))
                                           {
                                             echo "選択されていません";
                                           }
                                           else {
                                              echo $other4file[0]->file_name;
                                           }
                                           ?></span>
                                       </div>
                                    </li>
         									<li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother5" /></span>
                                           <span class="fileinput-filename"></span><span class="fileinput-new"><?php
                                           if(empty($other5file))
                                           {
                                             echo "選択されていません";
                                           }
                                           else {
                                              echo $other5file[0]->file_name;
                                           }
                                           ?></span>
                                       </div>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                        </table>
						<div class="container text-center">

                        <button type="button" class="btn btn-warning confirmbtn1" onclick="history.go(-1);">キャンセル</button>
                        <input type="submit" class="btn btn-primary confirmbtn1" ng-disabled="coporateForm.$invalid" value="確認します">

                     </div>
            </form>
        </div>
      </div>
    </div>
</div>
</body>
</html>
