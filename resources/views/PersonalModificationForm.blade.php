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
            var Input = '<?php echo $AppBodys[0]->is_teiki?>';
            if(Input == 'N')
            {
                $('#contract_type_N').attr('checked','checked');
            }
            else {
                $('#contract_type_R').attr('checked','checked');
            }
            var nyuko_yotei_jiki = '<?php echo $AppBodys[0]->nyuko_yotei_jiki?>';
            if(nyuko_yotei_jiki =='上旬')
            {
                $('#occupacy_status_early').attr('checked','checked');
            }
            else if ( nyuko_yotei_jiki == '中旬') {
                $('#occupacy_status_middle').attr('checked','checked');
            }
            else if (nyuko_yotei_jiki == '下旬'){
                $('#occupacy_status_late').attr('checked','checked');
            }
            var applicator_sex ='<?php echo $AppPersonal[0]->sex;?>';
            if(applicator_sex=='M')
            {
                $('#appliacant_lessee_sex_M').attr('checked','checked');
            }
            else {
                $('#appliacant_lessee_sex_F').attr('checked','checked');
            }
            var applicator_family = '<?php echo $AppPersonal[0]->family;?>';
            if(applicator_family=='01')
            {
                $('#appliacant_lessee_family_structure_1').attr('checked','checked');

            }
            else if (applicator_family=='02') {
                $('#appliacant_lessee_family_structure_2').attr('checked','checked');
            }
            else if (applicator_family=='03') {
                $('#appliacant_lessee_family_structure_3').attr('checked','checked');
            }
            else if (applicator_family=='04') {
                $('#appliacant_lessee_family_structure_4').attr('checked','checked');
            }
            else if (applicator_family=='05'){
                $('#appliacant_lessee_family_structure_5').attr('checked','checked');
            }
            var applicator_address_type = '<?php echo $AppPersonal[0]->address_type;?>';
            if(applicator_address_type=='01')
            {
                $('#appliacant_lessee_type_1').attr('checked','checked');

            }
            else if (applicator_address_type=='02') {
                $('#appliacant_lessee_type_2').attr('checked','checked');
            }
            else if (applicator_address_type=='03') {
                $('#appliacant_lessee_type_3').attr('checked','checked');
            }
            else if (applicator_address_type=='04') {
                $('#appliacant_lessee_type_4').attr('checked','checked');
            }
            else if (applicator_address_type=='05'){
                $('#appliacant_lessee_type_5').attr('checked','checked');
            }
            else if (applicator_address_type=='06') {
              $('#appliacant_lessee_type_6').attr('checked','checked');
            }
            var applicator_rentai = '<?php echo $AppPersonal[0]->rentai_hoshonin?>';
            if(applicator_rentai=='01')
            {
                $('#appliacant_lessee_joint_1').attr('checked','checked');
            }
            else if (applicator_rentai=='02') {
                $('#appliacant_lessee_joint_2').attr('checked','checked');
            }
            else if (applicator_rentai=='03') {
                $('#appliacant_lessee_joint_3').attr('checked','checked');
            }
            else if (applicator_rentai=='04') {
                $('#appliacant_lessee_joint_4').attr('checked','checked');
            }
            else if (applicator_rentai=='05') {
                $('#appliacant_lessee_joint_5').attr('checked','checked');
            }
            else if (applicator_rentai=='06') {
                $('#appliacant_lessee_joint_6').attr('checked','checked');
            }
            else if (applicator_rentai=='07'){
                $('#appliacant_lessee_joint_7').attr('checked','checked');
            }
            var applicator_tenkyo_riyu = '<?php echo $AppPersonal[0]->tenkyo_riyu?>';
            if(applicator_tenkyo_riyu=='01')
            {
                $('#appliacant_lessee_move_reason_1').attr('checked','checked');

            }
            else if (applicator_tenkyo_riyu=='02') {
                $('#appliacant_lessee_move_reason_2').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='03') {
                $('#appliacant_lessee_move_reason_3').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='04') {
                $('#appliacant_lessee_move_reason_4').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='05') {
                $('#appliacant_lessee_move_reason_5').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='06') {
                $('#appliacant_lessee_move_reason_6').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='07') {
                $('#appliacant_lessee_move_reason_7').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='08') {
                $('#appliacant_lessee_move_reason_8').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='09') {
                $('#appliacant_lessee_move_reason_9').attr('checked','checked');
            }
            else if (applicator_tenkyo_riyu=='10'){
                $('#appliacant_lessee_move_reason_10').attr('checked','checked');
            }
            var applicator_job_type = '<?php echo $AppPersonal[0]->job_type;?>';
            if(applicator_job_type=='01')
            {
                $('#appliacant_lessee_job_category_1').attr('checked','checked');
            }
            else if (applicator_job_type=='02') {
                $('#appliacant_lessee_job_category_2').attr('checked','checked');
            }
            else if (applicator_job_type=='03') {
                $('#appliacant_lessee_job_category_3').attr('checked','checked');
            }
            else if (applicator_job_type=='04') {
                $('#appliacant_lessee_job_category_4').attr('checked','checked');
            }
            else if (applicator_job_type=='05') {
                $('#appliacant_lessee_job_category_5').attr('checked','checked');
            }
            else if (applicator_job_type=='06') {
                $('#appliacant_lessee_job_category_6').attr('checked','checked');
            }
            else if (applicator_job_type=='07') {
                $('#appliacant_lessee_job_category_7').attr('checked','checked');
            }
            else if (applicator_job_type=='08') {
                $('#appliacant_lessee_job_category_8').attr('checked','checked');
            }
            else if (applicator_job_type=='09') {
                $('#appliacant_lessee_job_category_9').attr('checked','checked');
            }
            else if (applicator_job_type=='10') {
                $('#appliacant_lessee_job_category_10').attr('checked','checked');
            }
            else {
                $('#appliacant_lessee_job_category_11').attr('checked','checked');
            }
            var applicator_business_type = '<?php echo $AppPersonal[0]->business_type?>';
            if(applicator_business_type=='01')
            {
                $('#appliacant_lessee_business_1').attr('checked','checked');
            }
            else if (applicator_business_type=='02') {
                $('#appliacant_lessee_business_2').attr('checked','checked');
            }
            else if (applicator_business_type=='03') {
                $('#appliacant_lessee_business_3').attr('checked','checked');
            }
            else if (applicator_business_type=='04') {
                $('#appliacant_lessee_business_4').attr('checked','checked');
            }
            else if (applicator_business_type=='05') {
                $('#appliacant_lessee_business_5').attr('checked','checked');
            }
            else if (applicator_business_type=='06') {
                $('#appliacant_lessee_business_6').attr('checked','checked');
            }
            else if (applicator_business_type=='07') {
                $('#appliacant_lessee_business_7').attr('checked','checked');
            }
            else if (applicator_business_type=='08') {
                $('#appliacant_lessee_business_8').attr('checked','checked');
            }
            else if (applicator_business_type=='09') {
                $('#appliacant_lessee_business_9').attr('checked','checked');
            }
            else if (applicator_business_type=='10') {
                $('#appliacant_lessee_business_10').attr('checked','checked');
            }
            else if (applicator_business_type=='11'){
                $('#appliacant_lessee_business_11').attr('checked','checked');
            }
            var applicator_employers = '<?php echo $AppPersonal[0]->employers;?>';
            if(applicator_employers=='10')
            {
                $('#app_number_of_employee_1').attr('checked','checked');

            }
            else if (applicator_employers=='49') {
                $('#app_number_of_employee_2').attr('checked','checked');
            }
            else if (applicator_employers=='299') {
                $('#app_number_of_employee_3').attr('checked','checked');
            }
            else if (applicator_employers=='301'){
                $('#app_number_of_employee_4').attr('checked','checked');
            }
            var application_contact_sex = '<?php echo $AppContact[0]->sex?>';
            if(application_contact_sex=='M')
            {
                $('#emergency_first_contact_sex_M').attr('checked','checked');
            }
            else {
                $('#emergency_first_contact_sex_F').attr('checked','checked');
            }
            var application_resident_relationship = '<?php echo $AppResident[0]->nyukyosha;?>';
            if(application_resident_relationship=='01')
            {
                $('#resident_relationship_1').attr('checked','checked');
            }
            else if (application_resident_relationship=='02') {
                $('#resident_relationship_2').attr('checked','checked');
            }
            else if (application_resident_relationship=='03') {
                $('#resident_relationship_3').attr('checked','checked');
            }
            else if (application_resident_relationship=='04'){
                $('#resident_relationship_4').attr('checked','checked');
            }
            var application_resident_sex_1 = '<?php echo $AppResident[0]->nyukyosha_1_sex?>';
            if(application_resident_sex_1=='M')
            {
                $('#resident_relationship_M').attr('checked','checked');

            }
            else if(application_resident_sex_1=='F'){
                $('#resident_relationship_F').attr('checked','checked');
            }
            var application_resident_sex_2 = '<?php echo $AppResident[0]->nyukyosha_2_sex?>';
            if(application_resident_sex_2=='M')
            {
                $('#re_sex_2_M').attr('checked','checked');
            }
            else if(application_resident_sex_2 =='F') {
                $('#re_sex_2_F').attr('checked','checked');
            }
            var application_resident_sex_3 = '<?php echo $AppResident[0]->nyukyosha_3_sex?>';
            if(application_resident_sex_3=='M')
            {
                $('#re_sex_3_M').attr('checked','checked');
            }
            else if (application_resident_sex_3=='F'){
                $('#re_sex_3_F').attr('checked','checked');
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
                            $('#personal_r').attr('checked','checked');

                        }
                        else if(Status=='K')
                        {
                        $('#personal_k').attr('checked','checked');

                        }
                        else if(Status=='DK')
                        {
                        $('#personal_DK').attr('checked','checked');
                        }
                        else if(Status=='LDK')
                        {
                        $('#personal_LDK').attr('checked','checked');
                        }

        });
    </script>
   </head>
   <body style="padding:30px;">
     <style> .ng-cloak {display: none !important;} </style>
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

        <div class="row flipper" id="flip1">
            <div class="col-xs-12">


               <div class="custom-form-container">
                  <div class="custom-form-section custom-table-header">
                     <h4>賃貸借申込内容</h4>
                  </div>
                  <form method="post" id="personal" name="personalForm" role="form" action="/PersonalFormModification/{{ $Arr[0]->app_no }}" enctype="multipart/form-data" novalidate>
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th class="table-sidebar" colspan="2" width="200">契約種別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element inline-form-element-2">
                                 <input type="radio" class="custom-radio-field" id="contract_type_N" value="N" name="contract_type"><label for="contract_type_N"><span></span> 普通</label>
                              </div>
                              <div class="inline-form-element inline-form-element-2">
                                 <input type="radio" class="custom-radio-field" id="contract_type_R" value="R" name="contract_type"><label for="contract_type_R"><span></span> 定期</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">入居予定 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2" class="form-inline yearselectfield">
							<select name="occupacy_year" class="disabper custom-select">
                                <option hidden="hidden">YYYY</option>
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
                            </select>&nbsp;年&nbsp;
                            <select name="occupacy_month" class="disabper custom-select">
                                <option hidden="hidden">MM</option>
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
                            </select>&nbsp;月&nbsp;
                            <select name="occupacy_date" class="disabper custom-select">
                                <option hidden="hidden">DD</option>
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
                            </select> 日
                           </td>
                           <td  colspan="3">
                              <div class="inline-form-element pcheck">
                                 <input type="checkbox" value="上旬" id="occupacy_status_early" name="occupacy_status" class="custom-checkbox-field"><label for="occupacy_status_early"><span></span> 上旬</label>
                              </div>
                              <div class="inline-form-element pcheck">
                                 <input type="checkbox" value="中旬" id="occupacy_status_middle" name="occupacy_status" class="custom-checkbox-field"><label for="occupacy_status_middle"><span></span> 中旬</label>
                              </div>
                              <div class="inline-form-element pcheck">
                                 <input type="checkbox" value="下旬" id="occupacy_status_late" name="occupacy_status" class="custom-checkbox-field"><label for="occupacy_status_late"><span></span> 下旬</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="4">物件所在地</th>
                           <th class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" class="form-control disabper numberonly" maxlength="7" ng-model="postalcode" name="postalcode" ng-init="postalcode= '<?php echo $AppBodys[0]->postal_code;?>'" value="{{ $AppBodys[0]->postal_code }}" ng-required="true" ng-minlength="7" pattern="\d*">
                              <div ng-show="personalForm.postalcode.$touched && personalForm.postalcode.$error.required && personalForm.postalcode.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;">郵便番号を入力してください</small></div>
                              <div ng-show="personalForm.postalcode.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                              <div ng-show="personalForm.postalcode.$error.number" class="ng-cloak"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" class="custom-text-field form-control disabper" ng-model="prefectures" maxlength="10" name="prefectures" ng-init="prefectures = '<?php echo $AppBodys[0]->prefecture;?>'" value="{{ $AppBodys[0]->prefecture }}" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.prefectures.$touched && personalForm.prefectures.$invalid && personalForm.prefectures.$error.required"><small style="color: red; display: block; text-align: center;">都道府県を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="3">
                              <input type="text" class="custom-text-field form-control disabper" ng-model="street_address" name="street_address" ng-init="street_address ='<?php echo $AppBodys[0]->address;?>'" value="{{ $AppBodys[0]->address }}" ng-required="true" maxlength="200" placeholder="港区１－２－３">
                              <div class="ng-cloak" ng-show="personalForm.street_address.$touched && personalForm.street_address.$invalid && personalForm.street_address.$error.required"><small style="color: red; display: block; text-align: center;">住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="3">
                              <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom-text-field form-control disabper" ng-model="address_kana" name="address_kana" maxlength="200" ng-init="address_kana ='<?php echo $AppBodys[0]->address_kana;?>'" value="{{ $AppBodys[0]->address_kana }}" ng-required="true" placeholder="ミナトク１－２－３">
                              <div class="ng-cloak" ng-show="personalForm.address_kana.$error.pattern"><small style="color: red; display: block; text-align: center;">カタカナを入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.address_kana.$touched && personalForm.address_kana.$invalid && personalForm.address_kana.$error.required"><small style="color: red; display: block; text-align: center;">住所(カナ)を入力してください</small></div>
                           </td>
                        </tr>
                        <!--
                        <tr>
                           <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="3">
                              <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="form-control form-control disabper" ng-model="address_kana" name="address_kana" maxlength="200" ng-init="address_kana='<?php echo $AppBodys[0]->address_kana;?>'" value="{{ $AppBodys[0]->address_kana }} ng-required="true" />
                              <div class="ng-cloak" ng-show="personalForm.address_kana.$error.pattern"><small style="color: red; display: block; text-align: center;">カタカナを入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.address_kana.$touched && personalForm.address_kana.$invalid && personalForm.address_kana.$error.required"><small style="color: red; display: block; text-align: center;">有効なアドレスを入力してください</small></div>
                           </td>
                        </tr> -->
                        <tr>
                           <th class="table-sidebar" rowspan="4">物件</th>
                           <th class="table-sidebar">物件名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" name="property_name" ng-model="property_name" class="custom-text-field form-control disabper" maxlength="200" ng-required="true" ng-init="property_name='<?php echo $AppBodys[0]->bukken_name;?>'" value="{{ $AppBodys[0]->bukken_name }}">
                              <div class="ng-cloak" ng-show="personalForm.property_name.$touched && personalForm.property_name.$invalid && personalForm.property_name.$error.required"><small style="color: red; display: block; text-align: center;">物件名を入力してください</small></div>
                           </td>
                           <td>
                              <input type="text" name="issue_room" maxlength="10" ng-model="issue_room" ng-init="issue_room='<?php echo $AppBodys[0]->room_no;?>'" value="{{ $AppBodys[0]->room_no }}" class="custom-text-field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.issue_room.$touched && personalForm.issue_room.$invalid && personalForm.issue_room.$error.required"><small style="color: red; display: block; text-align: center;">号室を入力してください</small></div>
                           </td>
                           <th class="table-sidebar">号室 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        </tr>
                        <tr>
                           <th class="table-sidebar">物件名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="3">
                              <input type="text" ng-model="property_name_kana" ng-init="property_name_kana='<?php echo $AppBodys[0]->bukken_name_kana;?>'" value="{{ $AppBodys[0]->bukken_name_kana }}" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="property_name_kana" maxlength="200" class="custom-text-field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.property_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;">物件名(カナ)を入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.property_name_kana.$touched && personalForm.property_name_kana.$invalid && personalForm.property_name_kana.$error.required"><small style="color: red; display: block; text-align: center;">物件名(カナ)を入力してください </small></div>
                           </td>
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
                              <input type="text" ng-model="floor_plan" name="floor_plan" ng-init="floor_plan='<?php echo $floor_plan;?>'" value="{{ $floor_plan }}" class="custom-text-field form-control disabper placeholderRight" maxlength="7" placeholder="2">
                           </td>
                           <td colspan="2" class="form-inline">
                              <div class="inline-form-element ccheck">
                                 <input type="checkbox" id="personal_r" name="floor_plan_status" class="custom-checkbox-field" value="R"><label for="personal_r"><span></span>R</label>
                              </div>
                              <div class="inline-form-element ccheck">
                                 <input type="checkbox" id="personal_k" name="floor_plan_status" class="custom-checkbox-field" value="K"><label for="personal_k"><span></span>K</label>
                              </div>
                              <div class="inline-form-element ccheck">
                                 <input type="checkbox" id="personal_DK" name="floor_plan_status" class="custom-checkbox-field" value="DK"><label for="personal_DK"><span></span>DK</label>
                              </div>
                              <div class="inline-form-element ccheck">
                                 <input type="checkbox" id="personal_LDK" name="floor_plan_status" class="custom-checkbox-field" value="LDK"><label for="personal_LDK"><span></span>LDK</label>
                              </div>

                           </td>
                           <td colspan="2" class="form-inline">
                              <input type="text" ng-model="floor_plan_size" ng-init="floor_plan_size='<?php echo (float)$AppBodys[0]->square_meter;?>'" value="{{ (float)$AppBodys[0]->square_meter }}"pattern="^(\d{0,4}\.\d{0,4}|\d{0,4}|\.\d{0,4})$" name="floor_plan_size" class="custom-text-field form-control disabper floatonly" placeholder="22.5"> &nbsp;&nbsp;&nbsp;m<sup>2</sup>
                              <div class="ng-cloak" ng-show="personalForm.floor_plan_size.$error.pattern"><small style="color: red; display: block; text-align: center;">このフォーマットxxxx.xxxxで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">敷金</th>
                           <td>
                              <input type="text" ng-model="deposit" ng-init="deposit='<?php echo $AppBodys[0]->shikikin_hosho;?>'" value="{{ $AppBodys[0]->shikikin_hosho }}" pattern="\d*" name="deposit" class="custom-text-field form-control disabper placeholderRight numberonly" placeholder="80000" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.deposit.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <th class="table-sidebar">退去償却</th>
                           <td>
                              <input type="text" pattern="\d*" ng-model="leave_amortization" ng-init="leave_amortization='<?php echo $AppBodys[0]->shikikin_shokyaku;?>'" value="{{ $AppBodys[0]->shikikin_shokyaku }}" name="leave_amortization" class="custom-text-field form-control disabper placeholderRight numberonly" placeholdeer="10000" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.leave_amortization.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <th class="table-sidebar">礼金</th>
                           <td>
                              <input type="text" ng-model="keymoney" ng-init="keymoney='<?php echo $AppBodys[0]->reikin;?>'" value="{{ $AppBodys[0]->reikin }}" pattern="\d*" name="keymoney" class="custom-text-field form-control disabper placeholderRight numberonly" placeholder="60000" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.keymoney.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">前家賃</th>
                           <td>
                              <input type="text" ng-model="beforerent" ng-init="beforerent='<?php echo $AppBodys[0]->mae_yachin;?>'" value="{{ $AppBodys[0]->mae_yachin }}" pattern="\d*" name="beforerent" class="custom-text-field form-control disabper placeholderRight numberonly" placeholder="5" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.beforerent.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <td>
                                月分まで受領予定
                           </td>
                        </tr>
                  <tr>
                     <th class="table-sidebar" colspan="2">家賃 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                     <td>
                        <input type="text" ng-model="rent" ng-init="rent='<?php echo $AppBodys[0]->rent;?>'" value="{{ $AppBodys[0]->rent }}" name="rent" class="custom-text-field form-control disabper cash numberonly placeholderRight numberonly" ng-required="true" placeholder="80000" maxlength="30">
                        <div class="ng-cloak" ng-show="personalForm.rent.$touched && personalForm.rent.$invalid && personalForm.rent.$error.required"><small style="color: red; display: block; text-align: center;">家賃を入力してください</small></div>
                     </td>
                      <td>
                          円
                      </td>
                  </tr>
                        <tr>
                           <th class="table-sidebar" style="width:320px;" colspan="2">管理費/共益費</th>
                           <td>
                              <input type="text" ng-model="admin_expense" ng-init="admin_expense='<?php echo $AppBodys[0]->mng_cost;?>'" value="{{ $AppBodys[0]->mng_cost }}" pattern="\d*" name="admin_expense" class="custom-text-field form-control disabper cash placeholderRight numberonly" placeholder="3000" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.admin_expense.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <td>
                              円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">駐車料金</th>
                           <td>
                              <input type="text" ng-model="parking_fee" ng-init="parking_fee='<?php echo $AppBodys[0]->park_cost;?>'" value="{{ $AppBodys[0]->park_cost }}" pattern="\d*" name="parking_fee" class="custom-text-field form-control disabper cash placeholderRight numberonly" placeholder="0" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.parking_fee.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <td>
                                円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">その他費用</th>
                           <td>
                              <input type="text" ng-model="other_expense" ng-init="other_expense='<?php echo $AppBodys[0]->other_cost;?>'" value="{{ $AppBodys[0]->other_cost }}" pattern="\d*" name="other_expense" class="custom-text-field form-control disabper cash placeholderRight numberonly" placeholder="0" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.other_expense.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <td>
                                 円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">合計</th>
                           <td>
                              <input type="text" value="{{ $AppBodys[0]->monthly_rent }}" name="total" id="totalcash" class="custom-text-field form-control disabper numberonly placeholderRight" readonly="readonly">
                           </td>
                           <td>
                                 円
                           </td>
                        </tr>
                     </table>
                     <div class="custom-form-section custom-table-header">
                        <h4>申込者・賃借人(乙)</h4>
                     </div>
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th style="width:130px;" class="table-sidebar" rowspan="4">現住所</th>
                           <th style="width:190px;" class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" class="custom-text-field form-control disabper numberonly" ng-model="address_postal_code" name="address_postal_code"  ng-init="address_postal_code='<?php echo $AppPersonal[0]->postal_code;?>'" value="{{ $AppPersonal[0]->postal_code }}" ng-required="true" ng-minlength="7" maxlength="7">
                              <div class="ng-cloak" ng-show="personalForm.address_postal_code.$touched && personalForm.address_postal_code.$error.required && personalForm.address_postal_code.$invalid"><small style="color: red; display: block; text-align: center;">郵便番号を入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.address_postal_code.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.address_postal_code.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-model="address_prefecture" maxlength="10" name="address_prefecture" ng-init="address_prefecture='<?php echo $AppPersonal[0]->prefecture;?>'" value="{{ $AppPersonal[0]->prefecture }}" class="custom-text-field form-control disabper" placeholder="東京" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.address_prefecture.$touched && personalForm.address_prefecture.$error.required && personalForm.address_prefecture.$invalid"><small style="color: red; display: block; text-align: center;">都道府県を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="200" ng-model="address_street" ng-init="address_street='<?php echo $AppPersonal[0]->address;?>'" value="{{ $AppPersonal[0]->address }}" name="address_street" class="custom-text-field form-control disabper" placeholder="港区 1-2-3" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.address_street.$touched && personalForm.address_street.$invalid && personalForm.address_street.$error.required"><small style="color: red; display: block; text-align: center;">住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="200" ng-model="address_street_kana" ng-init="address_street_kana='<?php echo $AppPersonal[0]->address_kana;?>'" value="{{ $AppPersonal[0]->address_kana }}" name="address_street_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom-text-field form-control disabper" placeholder="ミナトク１－２－３" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.address_street_kana.$error.pattern"><small style="color: red; display: block; text-align: center;">カタカナのみを入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.address_street_kana.$touched && personalForm.address_street_kana.$invalid && personalForm.address_street_kana.$error.required"><small style="color: red; display: block; text-align: center;">住所(カナ)を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="100" ng-model="applicant_lessee_name" ng-init="applicant_lessee_name='<?php echo $AppPersonal[0]->name;?>'" value="{{ $AppPersonal[0]->name }}" name="applicant_lessee_name" class="custom-text-field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.applicant_lessee_name.$touched && personalForm.applicant_lessee_name.$invalid && personalForm.applicant_lessee_name.$error.required"><small style="color: red; display: block; text-align: center;">氏名を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">氏名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="100" ng-model="applicant_lessee_name_kana" ng-init="applicant_lessee_name_kana='<?php echo $AppPersonal[0]->name_kana;?>'" value="{{ $AppPersonal[0]->name_kana }}" name="applicant_lessee_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom-text-field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.applicant_lessee_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;">カタカナのみで入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.applicant_lessee_name_kana.$touched && personalForm.applicant_lessee_name_kana.$invalid && personalForm.applicant_lessee_name_kana.$error.required"><small style="color: red; display: block; text-align: center;">氏名(カナ)を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">性別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_sex_M" value="M" name="appliacant_lessee_sex" class="custom-radio-field"><label for="appliacant_lessee_sex_M"><span></span> 男</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_sex_F" name="appliacant_lessee_sex" value="F" class="custom-radio-field"><label for="appliacant_lessee_sex_F"><span></span> 女</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="1" class="form-inline">
                              <select name="applicant_lessee_birth_year" class="disabper custom-select">
                                <option hidden="hidden">YYYY</option>
                                  <?php
                                		$appper_ymd = $AppPersonal[0]->birthday;
                                		$appper_year = substr($appper_ymd, 0, 4);
                                		$appper_month = substr($appper_ymd, 5, 2);
                                		$appper_date = substr($appper_ymd, 8, 7);
                                	?>

                                	@for ($i = 1900; $i <= 2050; $i++)
                                		@if ($i == $appper_year)
                                		<option selected value="{{ $i }}">{{ $i }}</option>
                                		@else
    									                <option value="{{ $i }}">{{ $i }}</option>
                                    @endif
									                  @endfor
                            </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                            <select name="applicant_lessee_birth_month" class="disabper custom-select">
                                <option hidden="hidden">MM</option>
                          	      @for ($i = 1; $i <= 12; $i++)
                                		<?php
                                			if ($i<=9)
	                                			$appper_month_value = '0'.$i;
	                                		else
	                                			$appper_month_value = $i;
                                		?>
                                		@if ($i == $appper_month)
                                		<option selected value="{{ $appper_month_value }}">{{ $i }}</option>
                                		@else
    									              <option value="{{ $appper_month_value }}">{{ $i }}</option>
                                    @endif
									@endfor
                            </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                            <select name="applicant_lessee_birth_date" class="disabper custom-select">
                                <option hidden="hidden">DD</option>
                                 @for ($i = 1; $i <= 31; $i++)
                                		<?php
                                			if ($i<=9)
	                                			$appper_date_value = '0'.$i;
	                                		else
	                                			$appper_date_value = $i;
                                		?>
                                		@if ($i == $appper_date)
                                		<option selected value="{{ $appper_date_value }}">{{ $i }}</option>
                                		@else
    									              <option value="{{ $appper_date_value }}">{{ $i }}</option>
                                    @endif
									                  @endfor
                            </select>&nbsp;&nbsp;&nbsp;日
                           </td>
                           <th class="table-sidebar">
                              年齢 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>
                           <td colspan="2">
                              <input type="text" ng-model="applicant_lessee_birth_age" id="applicant_lessee_birth_age" ng-init="applicant_lessee_birth_age='<?php echo $AppPersonal[0]->age;?>'" value="{{ $AppPersonal[0]->age }}" name="applicant_lessee_birth_age" class="custom-text-field form-control disabper numberonly" ng-required="true" maxlength="3" ng-min="1" ng-max="150">
                              <div class="ng-cloak" ng-show="personalForm.applicant_lessee_birth_age.$touched && personalForm.applicant_lessee_birth_age.$invalid && personalForm.applicant_lessee_birth_age.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">年齢を入力してください</small></div>
							  <small class="applicant_lessee_birth_age-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">固定電話</th>
                           <td>
                              <input type="text" ng-model="applicant_lessee_fixed_line_phone" ng-init="applicant_lessee_fixed_line_phone='<?php echo $AppPersonal[0]->telephone;?>'" value="{{ $AppPersonal[0]->telephone }}" name="applicant_lessee_fixed_line_phone" class="custom-text-field form-control disabper numberonly" placeholder="03123456" maxlength="20">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">携帯電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-model="applicant_lessee_mobile_phone" ng-init="applicant_lessee_mobile_phone='<?php echo $AppPersonal[0]->mobile_phone;?>'" value="{{ $AppPersonal[0]->mobile_phone }}" name="applicant_lessee_mobile_phone" class="custom-text-field form-control disabper numberonly" placeholder="09012345678" ng-required="true" maxlength="20">
                              <div class="ng-cloak" ng-show="personalForm.applicant_lessee_mobile_phone.$touched && personalForm.applicant_lessee_mobile_phone.$invalid && personalForm.applicant_lessee_mobile_phone.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">メールアドレス</th>
                           <td>
                              <input type="email" ng-model="applicant_lessee_email" name="applicant_lessee_email" ng-init="applicant_lessee_email='<?php echo $AppPersonal[0]->mail_address;?>'" value="{{ $AppPersonal[0]->mail_address }}" class="custom-text-field form-control disabper" placeholder="abcd@ef.gh" maxlength="100">
                              <div class="ng-cloak" ng-show="personalForm.applicant_lessee_email.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">メールアドレスを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">家族構成 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_family_structure_1" value="01" name="appliacant_lessee_family_structure" class="custom-radio-field"><label for="appliacant_lessee_family_structure_1"><span></span> 1. 独身</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_family_structure_2"name="appliacant_lessee_family_structure" value="02" class="custom-radio-field"><label for="appliacant_lessee_family_structure_2"><span></span> 2. 独身(子あり)</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_family_structure_3"name="appliacant_lessee_family_structure" value="03" class="custom-radio-field"><label for="appliacant_lessee_family_structure_3"><span></span> 3. 配偶者あり</label>

                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_family_structure_4" name="appliacant_lessee_family_structure" value="04" class="custom-radio-field"><label for="appliacant_lessee_family_structure_4"><span></span> 4. 単身(既婚)</label>

                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_family_structure_5" name="appliacant_lessee_family_structure" value="05" class="custom-radio-field other-with-input"><label for="appliacant_lessee_family_structure_5"><span></span> 5. その他</label>

                              </div>
                              <input type="text" name="family_structured_other" value="{{$AppPersonal[0]->family_other}}" class="custom-text-field form-control disabper input-for-other" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="2">現住居</th>
                           <th class="table-sidebar">種類 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_type_1" value="01" name="appliacant_lessee_type" class="custom-radio-field"><label for="appliacant_lessee_type_1"><span></span> 1. 賃貸</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_type_2" value="02" name="appliacant_lessee_type" class="custom-radio-field"><label for="appliacant_lessee_type_2"><span></span> 2. 家族所有</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_type_3" name="appliacant_lessee_type" value="03" class="custom-radio-field"><label for="appliacant_lessee_type_3"><span></span> 3. 社宅/寮</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_type_4" name="appliacant_lessee_type" value="04" class="custom-radio-field"><label for="appliacant_lessee_type_4"><span></span> 4. 公営住宅</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_type_5" name="appliacant_lessee_type" value="05" class="custom-radio-field"><label for="appliacant_lessee_type_5"><span></span> 5. 自己所有</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_type_6" name="appliacant_lessee_type" value="06" class="custom-radio-field"><label for="appliacant_lessee_type_6"><span></span> 6. その他</label>
                              </div>
                              <div ng-show="personalForm.family_structured_other.$touched && personalForm.family_structured_other.$invalid && personalForm.family_structured_other.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">情報を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">連帯保証人 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_1" name="appliacant_lessee_joint" value="01" class="custom-radio-field"><label for="appliacant_lessee_joint_1"><span></span> 1. 親</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_2" name="appliacant_lessee_joint" value="02" class="custom-radio-field"><label for="appliacant_lessee_joint_2"><span></span> 2. 兄弟</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_3" name="appliacant_lessee_joint" value="03" class="custom-radio-field"><label for="appliacant_lessee_joint_3"><span></span> 3. 親族</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_4" name="appliacant_lessee_joint" value="04" class="custom-radio-field"><label for="appliacant_lessee_joint_4"><span></span> 4. 配偶者</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_5" name="appliacant_lessee_joint" value="05" class="custom-radio-field"><label for="appliacant_lessee_joint_5"><span></span> 5. 友人/知人</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_6" name="appliacant_lessee_joint" value="06" class="custom-radio-field"><label for="appliacant_lessee_joint_6"><span></span> 6. 保証会社</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_7" name="appliacant_lessee_joint" value="07" class="custom-radio-field"><label for="appliacant_lessee_joint_7"><span></span> 7. その他</label>
                              </div>

                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">転居理由 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_1" name="appliacant_lessee_move_reason" value="01" class="custom-radio-field"><label for="appliacant_lessee_move_reason_1"><span></span> 1. 結婚</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_2" name="appliacant_lessee_move_reason" value="02" class="custom-radio-field"><label for="appliacant_lessee_move_reason_2"><span></span> 2. 独立</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_3" name="appliacant_lessee_move_reason" value="03" class="custom-radio-field"><label for="appliacant_lessee_move_reason_3"><span></span> 3. 就職/入学</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_4" name="appliacant_lessee_move_reason" value="04" class="custom-radio-field"><label for="appliacant_lessee_move_reason_4"><span></span> 4. 転勤</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_5" name="appliacant_lessee_move_reason" value="05" class="custom-radio-field"><label for="appliacant_lessee_move_reason_5"><span></span> 5. 転職</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_6" value="06" name="appliacant_lessee_move_reason" class="custom-radio-field"><label for="appliacant_lessee_move_reason_6"><span></span> 6. 通勤時間</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_7" name="appliacant_lessee_move_reason" value="07" class="custom-radio-field"><label for="appliacant_lessee_move_reason_7"><span></span> 7. 手狭</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_8" name="appliacant_lessee_move_reason" class="custom-radio-field" value="08"><label for="appliacant_lessee_move_reason_8"><span></span> 8. 家賃が高い</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_9" value="09" name="appliacant_lessee_move_reason" class="custom-radio-field"><label for="appliacant_lessee_move_reason_9"><span></span>9. 環境</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_move_reason_10" value="10" name="appliacant_lessee_move_reason" class="custom-radio-field other-with-input"><label for="appliacant_lessee_move_reason_10"><span></span>10. その他</label>
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="text" name="movereason_other" value="{{$AppPersonal[0]->tenkyo_other}}" class="custom-text-field form-control disabper input-for-other" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">職種 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_1" name="appliacant_lessee_job_category" class="custom-radio-field" value="01"><label for="appliacant_lessee_job_category_1"><span></span> 1. 正社員</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_2" name="appliacant_lessee_job_category" value="02" class="custom-radio-field"><label for="appliacant_lessee_job_category_2"><span></span> 2-a.正社員以外(契約)</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_3" name="appliacant_lessee_job_category" value="03" class="custom-radio-field"><label for="appliacant_lessee_job_category_3"><span></span> 2-b.正社員以外(派遣)</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_4" name="appliacant_lessee_job_category" value="04" class="custom-radio-field"><label for="appliacant_lessee_job_category_4"><span></span> 3..公務員</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_5" name="appliacant_lessee_job_category" value="05" class="custom-radio-field"><label for="appliacant_lessee_job_category_5"><span></span> 4.S自営業</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_6" name="appliacant_lessee_job_category" value="06" class="custom-radio-field"><label for="appliacant_lessee_job_category_6"><span></span> 5.パート/アルバイト</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_7" name="appliacant_lessee_job_category" value="07" class="custom-radio-field"><label for="appliacant_lessee_job_category_7"><span></span> 6.学生</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_8" name="appliacant_lessee_job_category" value="08" class="custom-radio-field"><label for="appliacant_lessee_job_category_8"><span></span> 7.年金</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_9" name="appliacant_lessee_job_category" value="09" class="custom-radio-field"><label for="appliacant_lessee_job_category_9"><span></span> 8.生活保護</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_10" name="appliacant_lessee_job_category" value="10" class="custom-radio-field"><label for="appliacant_lessee_job_category_10"><span></span> 9.無職</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_11" name="appliacant_lessee_job_category" value="11" class="custom-radio-field other-with-input"><label for="appliacant_lessee_job_category_11"><span></span> 10.その他</label>
                              </div>
                              <input type="text" name="job_category_other" value="{{$AppPersonal[0]->job_other}}" class="custom-text-field form-control disabper input-for-other" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">業種 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_1" value="01" name="appliacant_lessee_business" class="custom-radio-field"><label for="appliacant_lessee_business_1"><span></span> 1.金融機関</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_2" value="02" name="appliacant_lessee_business" class="custom-radio-field"><label for="appliacant_lessee_business_2"><span></span> 2.不動産</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_3" name="appliacant_lessee_business" value="03" class="custom-radio-field"><label for="appliacant_lessee_business_3"><span></span> 3.建築/工事</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_4" name="appliacant_lessee_business" value="04" class="custom-radio-field"><label for="appliacant_lessee_business_4"><span></span> 4.製造</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_5" name="appliacant_lessee_business" value="05" class="custom-radio-field"><label for="appliacant_lessee_business_5"><span></span> 5.IT関連</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_6" name="appliacant_lessee_business" value="06" class="custom-radio-field"><label for="appliacant_lessee_business_6"><span></span> 6.広告</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_7" name="appliacant_lessee_business" value="07" class="custom-radio-field"><label for="appliacant_lessee_business_7"><span></span> 7.小売/サービス</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_8" name="appliacant_lessee_business" value="08" class="custom-radio-field"><label for="appliacant_lessee_business_8"><span></span> 8.陸運</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_9" name="appliacant_lessee_business" value="09" class="custom-radio-field"><label for="appliacant_lessee_business_9"><span></span> 9.教育</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_10" name="appliacant_lessee_business" value="10" class="custom-radio-field"><label for="appliacant_lessee_business_10"><span></span> 10.医療機関</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_11" name="appliacant_lessee_business" value="11" class="custom-radio-field other-with-input"><label for="appliacant_lessee_business_11"><span></span> 11.その他</label>
                              </div>
                              <input type="text" name="business_other" value="{{$AppPersonal[0]->business_other}}" class="custom-text-field form-control disabper input-for-other" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">運転免許番号</th>
                           <?php
                         	$driver_all = $AppPersonal[0]->drivers_licence;
                         	$driver_1 = substr($driver_all, 0, 4);
                         	$driver_2 = substr($driver_all, 4, 4);
                         	$driver_3 = substr($driver_all, 8, 4);
                           ?>
                           <td class="form-inline" colspan="5">
                              <input type="text" ng-model="driver_licence_1" name="driver_licence_1" class="form-control disabper placeholdercenter numberonly" ng-init="driver_licence_1='<?php echo $driver_1;?>'" value="{{ $driver_1 }}" ng-minlength="4" pattern="\d*" maxlength="4">
                              <div class="ng-cloak" ng-show="personalForm.driver_licence_1.$error.minlength"><small style="color: red; display: block; text-align: center;">4文字入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.driver_licence_1.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                              &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                              <input type="text" ng-model="driver_licence_2" name="driver_licence_2" class="form-control disabper placeholdercenter numberonly" ng-init="driver_licence_2='<?php echo $driver_2;?>'" value="{{ $driver_2 }}" ng-minlength="4" maxlength="4" pattern="\d*">
                              <div class="ng-cloak" ng-show="personalForm.driver_licence_2.$error.minlength"><small style="color: red; display: block; text-align: center;">4文字入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.driver_licence_2.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                              &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                              <input type="text" ng-model="driver_licence_3" name="driver_licence_3" class="seven form-control disabper placeholdercenter numberonly" ng-init="driver_licence_3='<?php echo $driver_3;?>'" value="{{ $driver_3 }}" pattern="\d*" ng-minlength="4" maxlength="4">
                              <div class="ng-cloak" ng-show="personalForm.driver_licence_3.$error.minlength"><small style="color: red; display: block; text-align: center;">4文字入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.driver_licence_3.$error.pattern"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">国籍 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-model="country_of_citizenship" maxlength="100" name="country_of_citizenship" class="custom-text-field form-control disabper" ng-init="country_of_citizenship='<?php echo $AppPersonal[0]->nationality;?>'" value="{{ $AppPersonal[0]->nationality }}" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.country_of_citizenship.$touched && personalForm.country_of_citizenship.$invalid && personalForm.country_of_citizenship.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">国籍を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">現在の家賃</th>
                           <td class="form-inline">
                              <input type="text" ng-model="current_rent" ng-init="current_rent='<?php echo (float)$AppPersonal[0]->current_rent;?>'" value="{{ (float)$AppPersonal[0]->current_rent }}" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" name="current_rent" class="form-control disabper placeholderRight floatonly" placeholder="8.5" maxlength="30">
                              &nbsp;&nbsp;&nbsp;万円/月
                              <div class="ng-cloak" ng-show="personalForm.current_rent.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">ご返済額(ローン以外)</th>
                           <td class="form-inline">
                              <input type="text" ng-model="repayment_amount" ng-init="repayment_amount='<?php echo (float)$AppPersonal[0]->hensai;?>'" value="{{ (float)$AppPersonal[0]->hensai }}" name="repayment_amount" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" class="form-control disabper placeholderRight floatonly" placeholder="0" maxlength="30">
                              &nbsp;万円/月
                              <div class="ng-cloak" ng-show="personalForm.repayment_amount.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">居住年数</th>
                           <td class="form-inline">
                              <input type="text" ng-model="residence_years" ng-init="residence_years='<?php echo $AppPersonal[0]->kyoju_nensu_y;?>'" value="{{ $AppPersonal[0]->kyoju_nensu_y }}" name="residence_years" class="form-control disabper numberonly" maxlength="4">
                              &nbsp;年&nbsp;
                              <input type="text" ng-model="residence_months" id="residence_months" ng-init="residence_months='<?php echo $AppPersonal[0]->kyoju_nensu_m;?>'" value="{{ $AppPersonal[0]->kyoju_nensu_m }}" name="residence_months" class="form-control disabper numberonly" maxlength="2">
                              &nbsp;ヶ月
                              <small class="residence_months-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="10">勤め先</th>
                           <th class="table-sidebar">名称</th>
                           <td><input type="text" maxlength="100" ng-model="junkyard_name" ng-init="junkyard_name='<?php echo $AppPersonal[0]->work_place_name;?>'" name="junkyard_name" value="{{ $AppPersonal[0]->work_place_name }}" class="custom-text-field form-control disabper">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">名称(カナ)</th>
                           <td>
                              <input type="text" ng-model="junkyard_name_kana" ng-init="junkyard_name_kana='<?php echo $AppPersonal[0]->work_place_name_kana;?>'" value="{{ $AppPersonal[0]->work_place_name_kana }}" maxlength="100" name="junkyard_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom_text_field form-control disabper">
                              <div class="ng-cloak" ng-show="personalForm.junkyard_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;">カタカナのみで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県</th>
                           <td><input type="text" maxlength="10" value="{{ $AppPersonal[0]->work_place_pref }}" ng-model="junkyard_prefecture" ng-init="junkyard_prefecture='<?php echo $AppPersonal[0]->work_place_pref;?>'" name="junkyard_prefecture" class="custom_text_field form-control disabper" placeholder="東京">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所</th>
                           <td><input type="text" maxlength="200" value="{{ $AppPersonal[0]->work_place_address }}" ng-model="junkyard_street_address" ng-init="junkyard_street_address='<?php echo $AppPersonal[0]->work_place_address;?>'" name="junkyard_street_address" class="custom_text_field form-control disabper" placeholder="港区 1-2-3">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ)</th>
                           <td><input type="text" ng-model="junkyard_address_kana" ng-init="junkyard_address_kana='<?php echo $AppPersonal[0]->work_place_address_kana;?>'" value="{{ $AppPersonal[0]->work_place_address_kana }}" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="200" name="junkyard_address_kana" class="custom_text_field form-control disabper" placeholder="ミナトク１－２－３">
                              <div class="ng-cloak" ng-show="personalForm.junkyard_address_kana.$error.pattern"><small style="color: red; display: block; text-align: center;">カタカナのみで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">電話番号</th>
                           <td>
                              <input type="text" ng-model="junkyard_phone" ng-init="junkyard_phone='<?php echo $AppPersonal[0]->work_place_tel;?>'" value="{{ $AppPersonal[0]->work_place_tel }}" name="junkyard_phone" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">従業員数 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="app_number_of_employee_1" value="10" name="app_number_of_employee" class="custom-radio-field"><label for="app_number_of_employee_1"><span></span> 1. 10人未満</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="app_number_of_employee_2" name="app_number_of_employee" value="49" class="custom-radio-field"><label for="app_number_of_employee_2"><span></span> 2. 50人未満</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="app_number_of_employee_3" name="app_number_of_employee" value="299" class="custom-radio-field"><label for="app_number_of_employee_3"><span></span> 3. 300人未満</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="app_number_of_employee_4" name="app_number_of_employee" value="301" class="custom-radio-field"><label for="app_number_of_employee_4"><span></span> 4. 300人以上</label>
                              </div>

                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">年収</th>
                           <td class="form-inline">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="annual_income" ng-init="annual_income='<?php echo (float)$AppPersonal[0]->nenshu;?>'" value="{{ (float)$AppPersonal[0]->nenshu }}" name="annual_income" class="custom_text_field form-control disabper placeholderRight floatonly" placeholder="600" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.annual_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;万円
                     </td>
                     <th class="table-sidebar">
                              月収
                     </th>
                     <td class="form-inline">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="monthly_income" ng-init="monthly_income='<?php echo (float)$AppPersonal[0]->gesshu;?>'" value="{{ (float)$AppPersonal[0]->gesshu }}" name="monthly_income" class="custom_text_field form-control disabper floatonly" placeholder="32.5" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.monthly_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">部署</th>
                           <td class="form-inline">
                              <input type="text" maxlength="100" ng-model="department" ng-init="department='<?php echo $AppPersonal[0]->busho;?>'" name="department" value="{{ $AppPersonal[0]->busho }}" class="custom_text_field form-control disabper">
                           </td>
						   <th class="table-sidebar">
                              役職
							</th>
							<td>
                              <input type="text" maxlength="100" ng-model="manager" ng-init="manager='<?php echo $AppPersonal[0]->yakushoku;?>'" name="manager" value="$AppPersonal[0]->yakushoku" class="custom_text_field form-control disabper">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤続年数</th>
                           <td class="form-inline">
                              <input type="text" ng-model="length_of_service_year" ng-init="length_of_service_year='<?php echo $AppPersonal[0]->kinzoku_y;?>'" value="{{ $AppPersonal[0]->kinzoku_y }}" name="length_of_service_year" class="custom_text_field form-control disabper placeholderRight numberonly" maxlength="4">
                              &nbsp;年&nbsp;
                              <input type="text" ng-model="length_of_service_month" id="length_of_service_month" ng-init="length_of_service_month='<?php echo $AppPersonal[0]->kinzoku_m;?>'" value="{{ $AppPersonal[0]->kinzoku_m }}" pattern="\d*" name="length_of_service_month" class="custom_text_field form-control disabper numberonly placeholderRight" ng-required="true" min="1" max="12" maxlength="2">
                              <small class="length_of_service_month-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>
                              &nbsp;ヶ月
                           </td>
                        </tr>
                     </table>
                     <div class="custom-form-section">
                        <h4>緊急連絡先</h4>
                     </div>
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th style="width:150px;" class="table-sidebar" rowspan="4">現住所</th>
                           <th style="width:170px;" class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_address_postalcode" ng-init="emergency_address_postalcode='<?php echo $AppContact[0]->postal_code;?>'" value="{{ $AppContact[0]->postal_code }}" name="emergency_address_postalcode" class="form-control disabper numberonly" placeholder="1234567" ng-required="true" ng-minlength="7" maxlength="7">
                              <div class="ng-cloak" ng-show="personalForm.emergency_address_postalcode.$touched && personalForm.emergency_address_postalcode.$error.required && personalForm.emergency_address_postalcode.$invalid"><small style="color: red; display: block; text-align: center;">郵便番号を入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.emergency_address_postalcode.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.emergency_address_postalcode.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_address_prefecture" ng-init="emergency_address_prefecture='<?php echo $AppContact[0]->prefecture;?>'" value="{{ $AppContact[0]->prefecture }}" name="emergency_address_prefecture" maxlength="10" class="custom-text-field form-control disabper" placeholder="東京" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.emergency_address_prefecture.$touched && personalForm.emergency_address_prefecture.$invalid && personalForm.emergency_address_prefecture.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_address_street" ng-init="emergency_address_street='<?php echo $AppContact[0]->address;?>'" value="{{ $AppContact[0]->address }}" name="emergency_address_street" maxlength="200" class="custom-text-field form-control disabper" placeholder="港区 1-2-3" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.emergency_address_street.$touched && personalForm.emergency_address_street.$invalid && personalForm.emergency_address_street.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" ng-model="emergency_address_street_kana" ng-init="emergency_address_street_kana='<?php echo $AppContact[0]->address_kana;?>'" value="{{ $AppContact[0]->address_kana }}" name="emergency_address_street_kana" maxlength="200" class="custom-text-field form-control disabper" placeholder="ミナトク１－２－３" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.emergency_address_street_kana.$touched && personalForm.emergency_address_street_kana.$invalid && personalForm.emergency_address_street_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.emergency_address_street_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2" style="width:340px;">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" maxlength="100" ng-model="emergency_first_contact_name" ng-init="emergency_first_contact_name='<?php echo $AppContact[0]->name;?>'" value="{{ $AppContact[0]->name }}" name="emergency_first_contact_name" class="custom-text-field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.emergency_first_contact_name.$touched && personalForm.emergency_first_contact_name.$invalid && personalForm.emergency_first_contact_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                           </td>
                           <th class="table-sidebar">
                              氏名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>
                           <td colspan="2">
                              <input type="text" maxlength="100" ng-model="emergency_first_contact_name_kana" ng-init="emergency_first_contact_name_kana='<?php echo $AppContact[0]->name_kaka;?>'" value="{{ $AppContact[0]->name_kaka }}" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="emergency_first_contact_name_kana" class="custom-text-field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.emergency_first_contact_name_kana.$touched && personalForm.emergency_first_contact_name_kana.$invalid && personalForm.emergency_first_contact_name_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名(カナ)を入力してください</small></div>
                              <div class="ng-cloak" ng-show="personalForm.emergency_first_contact_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">性別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td  colspan="2">
                              <div class="inline-form-element">
                              <input type="radio" id="emergency_first_contact_sex_M" name="emergency_first_contact_sex" class="custom-radio-field" value="M"><label for="emergency_first_contact_sex_M"><span></span> 男</label>
                            </div>

                            <div class="inline-form-element">
                              <input type="radio" id="emergency_first_contact_sex_F" name="emergency_first_contact_sex" class="custom-radio-field" value="F"><label for="emergency_first_contact_sex_F"><span></span> 女</label>
                            </div>

                           </td>
                           <th class="table-sidebar">
                              続き柄 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_first_contact_relationship" ng-init="emergency_first_contact_relationship='<?php echo $AppContact[0]->tsuzukigara;?>'" value="{{ $AppContact[0]->tsuzukigara }}" name="emergency_first_contact_relationship" class="custom-text-field form-control disabper" placeholder="母親" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.emergency_first_contact_relationship.$touched && personalForm.emergency_first_contact_relationship.$invalid && personalForm.emergency_first_contact_relationship.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2" class="form-inline">
                              <select name="emergency_first_contact_birth_year" class="disabper custom-select">
                                <option hidden="hidden">YYYY</option>
									<?php
                                		$appcos_ymd = $AppContact[0]->birthday;
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
                            </select>&nbsp;年&nbsp;
                            <select name="emergency_first_contact_birth_month" class="disabper custom-select">
                                <option hidden="hidden">MM</option>
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
                            </select>&nbsp;月&nbsp;
                            <select name="emergency_first_contact_birth_date" class="disabper custom-select">
                                <option hidden="hidden">DD</option>
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
                              </select>&nbsp;日
                           <th class="form-inline table-sidebar">
                              年齢 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_first_contact_birth_age" id="emergency_first_contact_birth_age" ng-init="emergency_first_contact_birth_age='<?php echo $AppContact[0]->age;?>'" value="{{ $AppContact[0]->age }}" name="emergency_first_contact_birth_age" class="custom-text-field form-control disabper numberonly" ng-required="true" maxlength="3" ng-min="1" ng-max="150">
                              <div class="ng-cloak" ng-show="personalForm.emergency_first_contact_birth_age.$touched && personalForm.emergency_first_contact_birth_age.$invalid && personalForm.emergency_first_contact_birth_age.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">年齢を入力してください</small></div>
							  <small class="emergency_first_contact_birth_age-error-message" style="color: red; display: block; text-align: center;" ng-required="true"></small>
                           </td>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">固定電話</th>
                           <td colspan="2"><input type="text" ng-model="efc_fixed_line_phone" ng-init="efc_fixed_line_phone='<?php echo $AppContact[0]->telephone;?>'" value="{{ $AppContact[0]->telephone }}" name="efc_fixed_line_phone" class="custom-text-field form-control disabper numberonly" placeholder="03123456" maxlength="20">
                           </td>
                           <th class="form-inline table-sidebar">
                              携帯電話
                           </th>
                           <td colspan="2">
                              <input type="text" ng-model="efc_mobile_phone" ng-init="efc_mobile_phone='<?php echo $AppContact[0]->mobile_phone;?>'" value="{{ $AppContact[0]->mobile_phone }}" name="efc_mobile_phone" class="custom-text-field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                              <div class="ng-cloak" ng-show="personalForm.efc_mobile_phone.$touched && personalForm.efc_mobile_phone.$invalid && personalForm.efc_mobile_phone.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="4">勤め先</th>
                           <th class="table-sidebar">名称</th>
                           <td colspan="2">
                              <input type="text" ng-model="efc_junkyard_name" ng-init="efc_junkyard_name='<?php echo $AppContact[0]->work_place;?>'" value="{{ $AppContact[0]->work_place }}" maxlength="100" name="efc_junkyard_name" class="custom_text_field form-control disabper">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">名称(カナ)</th>
                           <td colspan="2">
                              <input type="text" ng-model="efc_junkyard_name_kana" ng-init="efc_junkyard_name_kana='<?php echo $AppContact[0]->work_place_kana;?>'" value="{{ $AppContact[0]->work_place_kana }}" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" name="efc_junkyard_name_kana" class="custom_text_field form-control disabper">
                              <div class="ng-cloak" ng-show="personalForm.efc_junkyard_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">年収</th>
                           <td colspan="2" class="form-inline">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="efc_annual_income" name="efc_annual_income" ng-init="efc_annual_income='<?php echo (float)$AppContact[0]->nenshu;?>'" value="{{ (float)$AppContact[0]->nenshu }}" class="custom_text_field form-control disabper placeholderRight floatonly" placeholder="600" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.efc_annual_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;
                              万円
                           </td>
                           <th class="table-sidebar">
                              月収
                           </th>
                           <td colspan="2" class="form-inline">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="efc_monthly_income" name="efc_monthly_income" ng-init="efc_monthly_income='<?php echo (float)$AppContact[0]->gesshu;?>'" value="{{ (float)$AppContact[0]->gesshu }}" class="custom_text_field form-control disabper floatonly" placeholder="32.5" maxlength="30">
							  <div class="ng-cloak" ng-show="personalForm.efc_monthly_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;
                              万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">緊急連絡先</th>
                           <td>
                              <input type="text" ng-model="efc_emergency_contact" ng-init="efc_emergency_contact='<?php echo $AppContact[0]->work_place_tel;?>'" value="{{ $AppContact[0]->work_place_tel }}" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" name="efc_emergency_contact" class="custom_text_field form-control disabper numberonly" placeholder="03123456" maxlength="20">
                              <div class="ng-cloak" ng-show="personalForm.efc_emergency_contact.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                           </td>
                        </tr>
                     </table>
                     <div class="custom-form-section custom-table-header">
                        <h4>入居者</h4>
                     </div>
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th style="width:120px;" class="table-sidebar" style="width:150px;" rowspan="17">入居者 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        </tr>
                        <tr>

                           <td colspan="7">
                              <div class="inline-form-element">
                                 <input type="radio" id="resident_relationship_1" value="01" name="resident_relationship" class="custom-radio-field"><label for="resident_relationship_1"><span></span> 1.申込者のみ</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="resident_relationship_2" value="02" name="resident_relationship" class="custom-radio-field"><label for="resident_relationship_2"><span></span> 2.申込者および家族</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="resident_relationship_3" value="03" name="resident_relationship" class="custom-radio-field"><label for="resident_relationship_3"><span></span> 3.家族(申込者以外)</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="resident_relationship_4" value="04" name="resident_relationship" class="custom-radio-field other-with-input"><label for="resident_relationship_4"><span></span> 4.その他</label>
                              </div>

                              <input type="text" maxlength="100" name="resident_other" value="{{ $AppResident[0]->nyukyosha_other }}" class="custom-text-field disabper form-control input-for-other" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <td style="width:40px;" rowspan="5">1</td>
                        </tr>
                        <tr>
                           <th style="width:160px;" class="table-sidebar">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="100" ng-model="re_name_1" ng-init="re_name_1='<?php echo $AppResident[0]->nyukyosha_1_name;?>'" value="{{ $AppResident[0]->nyukyosha_1_name }}" name="re_name_1" class="custom_text_field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.re_name_1.$touched && personalForm.re_name_1.$invalid && personalForm.re_name_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                           </td>
                           <th class="table-sidebar text-center">性別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td class="form-inline">
                              <input type="radio" id="resident_relationship_M" value="M" name="re_sex" class="custom-radio-field"><label for="resident_relationship_M"><span></span> 男</label>
                              <input type="radio" id="resident_relationship_F" value="F" name="re_sex" class="custom-radio-field"><label for="resident_relationship_F"><span></span> 女</label>
                           </td>
                           <th class="table-sidebar">続き柄 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="10" ng-model="re_relation_1" placeholder="本人" ng-init="re_relation_1='<?php echo $AppResident[0]->nyukyosha_1_tsuzukigara;?>'" value="{{ $AppResident[0]->nyukyosha_1_tsuzukigara }}" name="re_relation_1" class="custom_text_field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.re_relation_1.$touched && personalForm.re_relation_1.$invalid && personalForm.re_relation_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してくださいs</small></div>
                           </td>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2" class="form-inline">
                             <select name="re_birth_year_1" class="disabper custom-select">
                                <option hidden="hidden">YYYY</option>
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
                            </select>&nbsp;年&nbsp;
                            <select name="re_birth_month_1" class="disabper custom-select">
                                <option hidden="hidden">MM</option>
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
                            </select>&nbsp;月&nbsp;
                            <select name="re_birth_date_1" class="disabper custom-select">
                                <option hidden="hidden">DD</option>
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
                            </select> 日
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">携帯電話</th>
                           <td>
                              <input type="text" ng-model="re_mobile_1" ng-init="re_mobile_1='<?php echo $AppResident[0]->nyukyosha_1_mobile_phone;?>'" value="{{ $AppResident[0]->nyukyosha_1_mobile_phone }}" name="re_mobile_1" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                           <th class="table-sidebar">年収</th>
                           <td class="form-inline" colspan="3">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="re_annual_income_1" ng-init="re_annual_income_1='<?php echo (float)$AppResident[0]->nyukyosha_1_nenshu;?>'" value="{{ (float)$AppResident[0]->nyukyosha_1_nenshu }}" name="re_annual_income_1" class="custom_text_field form-control disabper placeholderRight floatonly" placeholder="600" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.re_annual_income_1.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;
                              万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤め先 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="4">
                              <input type="text" ng-model="re_junkyard_1" ng-init="re_junkyard_1='<?php echo $AppResident[0]->nyukyosha_1_work_place;?>'" value="{{ $AppResident[0]->nyukyosha_1_work_place }}" name="re_junkyard_1" class="custom_text_field form-control disabper" ng-required="true" maxlength="100">
                              <div class="ng-cloak" ng-show="personalForm.re_junkyard_1.$touched && personalForm.re_junkyard_1.$invalid && personalForm.re_junkyard_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">勤め先を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="5">2</td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">氏名</th>
                           <td>
                              <input type="text" maxlength="100" ng-init="re_name_2='<?php echo $AppResident[0]->nyukyosha_2_name;?>'" value="{{ $AppResident[0]->nyukyosha_2_name }}" ng-model="re_name_2" name="re_name_2" class="custom_text_field form-control disabper">
                           </td>
                           <th class="table-sidebar text-center">性別</th>
                           <td>
                              <div class="inline-form-element">
                              <input type="radio" id="re_sex_2_M" value="M" name="re_sex_2" class="custom-radio-field re_sex_2_M uncheckableradio"><label for="re_sex_2_M"><span></span> 男</label>
                            </div>
                            <div class="inline-form-element">
                              <input type="radio" id="re_sex_2_F" value="F" name="re_sex_2" class="custom-radio-field re_sex_2_M uncheckableradio"><label for="re_sex_2_F"><span></span> 女</label>
                             </div>

                           </td>
                           <th class="table-sidebar">続き柄</th>
                           <td>
                              <input type="text" maxlength="10" ng-init="re_relation_2='<?php echo $AppResident[0]->nyukyosha_2_tsuzukigara;?>'" value="{{ $AppResident[0]->nyukyosha_2_tsuzukigara }}" ng-model="re_relation_2" name="re_relation_2" class="custom_text_field form-control disabper" placeholder="妻">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">生年月日</th>
                           <td colspan="2" class="form-inline">
                              <select name="re_birth_year_2" class="disabper custom-select">
                                <option hidden="hidden" value="0000">YYYY</option>
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
                            </select>&nbsp;年&nbsp;
                            <select name="re_birth_month_2" class="disabper custom-select">
                                <option hidden="hidden" value="00">MM</option>
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
                            </select>&nbsp;月&nbsp;
                            <select name="re_birth_date_2" class="disabper custom-select">
                                <option hidden="hidden" value="00">DD</option>
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
                            </select> 日
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">携帯電話</th>
                           <td>
                              <input type="text" ng-model="re_mobile_2" ng-init="re_mobile_2='<?php echo $AppResident[0]->nyukyosha_2_mobile_phone;?>'" value="{{ $AppResident[0]->nyukyosha_2_mobile_phone }}" name="re_mobile_2" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                           <th class="table-sidebar">年収</th>
                           <td class="form-inline" colspan="3">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="re_annual_income_2" ng-init="re_annual_income_2='<?php echo (float)$AppResident[0]->nyukyosha_2_nenshu;?>'" value="{{ (float)$AppResident[0]->nyukyosha_2_nenshu }}" name="re_annual_income_2" class="custom_text_field form-control disabper placeholderRight floatonly" placeholder="100" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.re_annual_income_2.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤め先</th>
                           <td colspan="4">
                              <input type="text" ng-init="re_junkyard_2='<?php echo $AppResident[0]->nyukyosha_2_work_place;?>'" value="{{ $AppResident[0]->nyukyosha_2_work_place }}" name="re_junkyard_2" ng-model="re_junkyard_2" class="custom_text_field form-control disabper" maxlength="100">
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="5">3</td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">氏名</th>
                           <td>
                              <input type="text" maxlength="100" ng-model="re_name_3" ng-init="re_name_3='<?php echo $AppResident[0]->nyukyosha_3_name;?>'" value="{{ $AppResident[0]->nyukyosha_3_name }}" ng-model="re_name_3" name="re_name_3" class="custom_text_field form-control disabper">
                           </td>
                           <th class="table-sidebar text-center">性別</th>
                           <td>
                              <div class="inline-form-element">
                              <input type="radio" id="re_sex_3_M" name="re_sex_3" class="custom-radio-field re_sex_3_M uncheckableradio" value="M"><label for="re_sex_3_M"><span></span> 男</label>
                            </div>

                            <div class="inline-form-element">
                              <input type="radio" id="re_sex_3_F" name="re_sex_3" class="custom-radio-field re_sex_3_M uncheckableradio" value="F"><label for="re_sex_3_F"><span></span> 女</label>
                            </div>

                           </td>
                           <th class="table-sidebar">続き柄</th>
                           <td>
                              <input type="text" maxlength="10" ng-model="re_relation_3" ng-init="re_relation_3='<?php echo $AppResident[0]->nyukyosha_3_tsuzukigara;?>'" value="{{ $AppResident[0]->nyukyosha_3_tsuzukigara }}" ng-model="re_relation_3" name="re_relation_3" class="custom_text_field form-control disabper" placeholder="息子">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">生年月日</th>
                           <td colspan="2" class="form-inline">
                              <select name="re_birth_year_3" class="disabper custom-select">
                                <option hidden="hidden" value="0000">YYYY</option>
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
                            </select>&nbsp;年&nbsp;
                            <select name="re_birth_month_3" class="disabper custom-select">
                                <option hidden="hidden" value="00">MM</option>
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
                            </select>&nbsp;月&nbsp;
                            <select name="re_birth_date_3" class="disabper custom-select">
                                <option hidden="hidden" value="00">DD</option>
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
                            </select> 日
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">携帯電話</th>
                           <td>
                              <input type="text" ng-model="re_mobile_3" ng-init="re_mobile_3='<?php echo $AppResident[0]->nyukyosha_3_mobile_phone;?>'" value="{{ $AppResident[0]->nyukyosha_3_mobile_phone }}" pattern="\d{0,20}" name="re_mobile_3" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                           <th class="table-sidebar">年収</th>
                           <td class="form-inline" colspan="3">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="re_annual_income_3" ng-init="re_annual_income_3='<?php echo (float)$AppResident[0]->nyukyosha_3_nenshu;?>'" value="{{ (float)$AppResident[0]->nyukyosha_3_nenshu }}" name="re_annual_income_3" class="custom_text_field form-control disabper placeholderRight floatonly" placeholder="600" maxlength="30">
                              <div class="ng-cloak" ng-show="personalForm.re_annual_income_3.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp; 万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤め先</th>
                           <td colspan="4">
                              <input type="text" ng-model="re_junkyard_3" ng-init="re_junkyard_3='<?php echo $AppResident[0]->nyukyosha_3_work_place;?>'" value="{{ $AppResident[0]->nyukyosha_3_work_place }}" ng-model="re_junkyard_3" name="re_junkyard_3" class="custom_text_field form-control disabper" maxlength="100">
                           </td>
                        </tr>
                     </table>
                     <div class="custom-form-section custom-table-header">
                        <h4>その他</h4>
                     </div>
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th colspan="2" class="table-sidebar">備考欄</th>
                           <td colspan="5">
                              <input type="text" value="{{ $AppOthers[0]->biki }}" name="other_remark" class="custom_text_field form-control disabper">
                           </td>
                        </tr>
                        <tr>
                           <th style="width:140px;" class="table-sidebar" rowspan="5">仲介会社</th>
                        </tr>
                        <tr>
                           <th style="width:180px;" class="table-sidebar">会社名</th>
                           <td colspan="5">
                              <input type="text" maxlength="1000" ng-model="other_company_name" ng-model="other_company_name" ng-init="other_company_name='<?php echo $AppOthers[0]->chukai_company;?>'" ng-model="other_company_name" name="other_company_name" class="custom_text_field form-control disabper">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <input type="text" maxlength="200" ng-model="other_street_address" ng-model="other_street_address" ng-init="other_street_address='<?php echo $AppOthers[0]->chukai_address;?>'" value="{{ $AppOthers[0]->chukai_address }}" name="other_street_address" class="custom_text_field form-control disabper" ng-required="true" placeholder="港区１－２－３">
                              <div class="ng-cloak" ng-show="personalForm.other_street_address.$touched && personalForm.other_street_address.$invalid && personalForm.other_street_address.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">電話番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="other_mobile" ng-init="other_mobile='<?php echo $AppOthers[0]->chukai_telephone;?>'" value="{{ $AppOthers[0]->chukai_telephone }}" name="other_mobile" class="custom_text_filed form-control disabper numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                              <div class="ng-cloak" ng-show="personalForm.other_mobile.$touched && personalForm.other_mobile.$invalid && personalForm.other_mobile.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">電話番号を入力してください</small></div>
                           </td>
                           <th class="table-sidebar text-center">FAX <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="other_fax" ng-init="other_fax='<?php echo $AppOthers[0]->chukai_fax;?>'" value="{{ $AppOthers[0]->chukai_fax }}" name="other_fax" class="custom_text_field form-control disabper numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                              <div class="ng-cloak" ng-show="personalForm.other_fax.$touched && personalForm.other_fax.$invalid && personalForm.other_fax.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">FAXを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">担当者 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <input type="text" maxlength="100" ng-model="other_person_incharge" ng-init="other_person_incharge='<?php echo $AppOthers[0]->chukai_tantou;?>'" value="{{ $AppOthers[0]->chukai_tantou }}" name="other_person_incharge" class="custom_text_field form-control disabper" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.other_person_incharge.$touched && personalForm.other_person_incharge.$invalid && personalForm.other_person_incharge.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">担当者を入力してください</small></div>
                           </td>
                        </tr>
                     </table>
                     <div class="custom-form-section custom-table-header">
                        <h4>添付ファイル</h4>
                     </div>
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th class="table-sidebar" style="width: 320px;">証明書コピー</th>
                           <td>
                              <ul style="list-style-type: none;">
                                 <li>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalcertificatecopy" /></span>&nbsp;
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
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personaltenantapplicationform" /></span>&nbsp;&nbsp;&nbsp;
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
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother1" /></span>&nbsp;&nbsp;&nbsp;
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
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother2" /></span>&nbsp;&nbsp;&nbsp;
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
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother3" /></span>&nbsp;&nbsp;&nbsp;
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
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother4" /></span>&nbsp;&nbsp;&nbsp;
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
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother5" /></span>&nbsp;&nbsp;&nbsp;
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
                        <button class="btn btn-primary confirmbtn1" ng-disabled="personalForm.$invalid">確認します</button>

                     </div>

                  </form>

               </div>
            </div>
        </div>
      </div>
   </body>
</html>
