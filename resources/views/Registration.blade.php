@include('SessionHandling')
<!DOCTYPE html>
<html lang="en" ng-app>
   <head>
      <meta charset="utf-8"/>
      <title>アプリケーション登録</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="custom/css/custom.css">
     <link rel="stylesheet" type="text/css" href="custom/css/jasny-bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
      <script type="text/javascript" src="custom/js/custom.js"></script>
     <script type="text/javascript" src="custom/js/jasny-bootstrap.js"></script>
   </head>
   <body style="padding-top:30px;">

   <!--<script type="text/javascript">
		var moveblock = document.getElementsByClassName("moveblock")[0];
		moveblock.onkeyup = function(e) {
			var target = e.srcElement;
			var maxLength = parseInt(target.attributes["maxlength"].value, 10);
			var myLength = target.value.length;
			if (myLength >= maxLength) {
				var next = target;
				while (next = next.nextElementSibling) {
					if (next == null)
						break;
					if (next.tagName.toLowerCase() == "input") {
						next.focus();
						break;
					}
				}
			}
		}
	</script>-->

   <style> .ng-cloak { display: none !important; } </style>
      <div id="white-background">
      </div>
      <div id="dlgbox">
         <div id="dlg-header">もう一度チェック</div>
         <div id="dlg-body">
            記入内容に間違いがなければ下記「この内容で登録」ボタンをクリックしてください
         </div>
         <div id="dlg-footer">
            <button class="btn btn-primary btn-block" onclick="dlgfade()">OK</button>
         </div>
      </div>
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
                            if(session_status()===PHP_SESSION_NONE) {
                              session_start(); echo $_SESSION['username'].'さん';
                            } elseif (session_status()===PHP_SESSION_ACTIVE) {
                               echo $_SESSION['username'].'さん';
                            } else {
                              echo "";
                            } ?></p>
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

         <div class="col-xs-12">
            <div class="row">
               <div class="form-tab">

                  <div class="personal-form-tab form-tab-list">
                     <input type="radio" name="fomrRadio" id="personalForm" value="1" checked="checked">&nbsp;<label for="personalForm"><span></span> 個人</label>
                  </div>
                  <div class="coperation-from-tab form-tab-list">
                     <input type="radio" name="fomrRadio" id="coperationForm" value="2">&nbsp;<label for="coperationForm"><span></span> 法人</label>
                  </div>
               </div>
            </div>
            <div class="row flipper" id="flip1">
               <div class="custom-form-container">
                  <div class="custom-form-section custom-table-header">
                     <h4>賃貸借申込内容</h4>
                  </div>
                  <form method="post" id="personal" name="personalForm" role="form" action="PersonalForm" enctype="multipart/form-data" novalidate="novalidate">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th class="table-sidebar" colspan="2" width="200">契約種別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element inline-form-element-2">
                                 <input type="radio" class="custom-radio-field" id="contract_type_N" checked="checked" value="N" name="contract_type"><label for="contract_type_N"><span></span> 普通</label>
                              </div>
                              <div class="inline-form-element inline-form-element-2">
                                 <input type="radio" class="custom-radio-field" id="contract_type_R" value="R" name="contract_type"><label for="contract_type_R"><span></span> 定期</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">入居予定 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2" class="yearselectfield">
                              <select name="occupacy_year" ng-model="occupacy_year" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">YYYY</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                                 <option value="2018">2018</option>
                                 <option value="2019">2019</option>
                                 <option value="2020">2020</option>
                                 <option value="2021">2021</option>
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                                 <option value="2024">2024</option>
                                 <option value="2025">2025</option>
                                 <option value="2026">2026</option>
                                 <option value="2027">2027</option>
                                 <option value="2028">2028</option>
                                 <option value="2029">2029</option>
                                 <option value="2030">2030</option>
                                 <option value="2031">2031</option>
                                 <option value="2032">2032</option>
                                 <option value="2033">2033</option>
                                 <option value="2034">2034</option>
                                 <option value="2035">2035</option>
                                 <option value="2036">2036</option>
                                 <option value="2037">2037</option>
                                 <option value="2038">2038</option>
                                 <option value="2039">2039</option>
                                 <option value="2040">2040</option>
                                 <option value="2041">2041</option>
                                 <option value="2042">2042</option>
                                 <option value="2043">2043</option>
                                 <option value="2044">2044</option>
                                 <option value="2045">2045</option>
                                 <option value="2046">2046</option>
                                 <option value="2047">2047</option>
                                 <option value="2048">2048</option>
                                 <option value="2049">2049</option>
                                 <option value="2050">2050</option>
                              </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                              <select name="occupacy_month" ng-model="occupacy_month" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">MM</option>
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                              </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                              <select name="occupacy_date" ng-model="occupacy_date" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">DD</option>
                                 <option value="1">01</option>
                                 <option value="2">02</option>
                                 <option value="3">03</option>
                                 <option value="4">04</option>
                                 <option value="5">05</option>
                                 <option value="6">06</option>
                                 <option value="7">07</option>
                                 <option value="8">08</option>
                                 <option value="9">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="18">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                                 <option value="29">29</option>
                                 <option value="30">30</option>
                                 <option value="31">31</option>
                              </select>&nbsp;&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;
                           </td>
                           <td  colspan="3">
                              <div class="inline-form-element ppcheck">
                                 <input type="checkbox" value="上旬" id="occupacy_status_early" name="occupacy_status" class="custom-radio-field"><label for="occupacy_status_early"><span></span> 上旬</label>
                              </div>
                              <div class="inline-form-element ppcheck">
                                 <input type="checkbox" value="中旬" id="occupacy_status_middle" name="occupacy_status" class="custom-radio-field"><label for="occupacy_status_middle"><span></span> 中旬</label>
                              </div>
                              <div class="inline-form-element ppcheck">
                                 <input type="checkbox" value="下旬" id="occupacy_status_late" name="occupacy_status" class="custom-radio-field"><label for="occupacy_status_late"><span></span> 下旬</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="4">物件</th>
                           <th class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" class="form-control disabper numberonly" ng-model="postalcode" name="postalcode" placeholder="1234567" ng-required="true" ng-minlength="7" maxlength="7" pattern="\d*">
                              <div ng-show="personalForm.postalcode.$touched && personalForm.postalcode.$error.required && personalForm.postalcode.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
郵便番号を入力してください</small></div>
                              <div ng-show="personalForm.postalcode.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
7文字入力してください</small></div>

                              <div ng-show="personalForm.postalcode.$error.number" class="ng-cloak"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" class="custom-text-field form-control disabper" ng-model="prefectures" maxlength="10" name="prefectures" placeholder="東京" ng-required="true">
                              <div ng-show="personalForm.prefectures.$touched && personalForm.prefectures.$invalid && personalForm.prefectures.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
都道府県を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="3">
                              <input type="text" class="custom-text-field form-control disabper" ng-model="street_address" name="street_address" placeholder="港区- 1-2-3" ng-required="true" maxlength="200">
                              <div ng-show="personalForm.street_address.$touched && personalForm.street_address.$invalid && personalForm.street_address.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="3">
                              <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="form-control form-control disabper" ng-model="address_kana" name="address_kana" maxlength="200" placeholder="ミナトク１－２－３" ng-required="true">
                              <div ng-show="personalForm.address_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
日本語のみカタカナを入力してください
</small></div>
                              <div ng-show="personalForm.address_kana.$touched && personalForm.address_kana.$invalid && personalForm.address_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
住所(カナ)を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="4">物件</th>
                           <th class="table-sidebar">物件名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" name="property_name" ng-model="property_name" class="custom-text-field form-control disabper" maxlength="200" ng-required="true">
                              <div ng-show="personalForm.property_name.$touched && personalForm.property_name.$invalid && personalForm.property_name.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">物件名を入力してください</small></div>
                           </td>
                           <td>
                              <input type="text" name="issue_room" maxlength="10" ng-model="issue_room" class="custom-text-field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.issue_room.$touched && personalForm.issue_room.$invalid && personalForm.issue_room.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">号室を入力してください</small></div>
                           </td>
						   <th class="table-sidebar">号室 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                        </tr>
                        <tr>
                           <th class="table-sidebar">物件名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="3">
                              <input type="text" ng-model="property_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="property_name_kana" maxlength="200" class="custom-text-field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.property_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
カタカナのみを入力してください</small></div>
                              <div ng-show="personalForm.property_name_kana.$touched && personalForm.property_name_kana.$invalid && personalForm.property_name_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
物件名(カナ)を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">間取り</th>
                           <td>
                              <input type="text" ng-model="floor_plan" name="floor_plan" class="custom-text-field form-control disabper placeholderRight" maxlength="7" placeholder="2">
                           </td>
                           <td colspan="2" class="form-inline">
                              <div class="inline-form-element pcheck">
                                 <input type="checkbox" id="personal_r" name="floor_plan_status" class="custom-checkbox-field" value="R"><label for="personal_r"><span></span>R</label>
                              </div>
                              <div class="inline-form-element pcheck">
                                 <input type="checkbox" id="personal_k" name="floor_plan_status" class="custom-checkbox-field" value="K"><label for="personal_k"><span></span>K</label>
                              </div>
                              <div class="inline-form-element pcheck">
                                 <input type="checkbox" id="personal_DK" name="floor_plan_status" class="custom-checkbox-field" value="DK"><label for="personal_DK"><span></span>DK</label>
                              </div>
                              <div class="inline-form-element pcheck">
                                 <input type="checkbox" id="personal_LDK" name="floor_plan_status" class="custom-checkbox-field" value="LDK"><label for="personal_LDK"><span></span>LDK</label>
                              </div>

                           </td>
                           <td colspan="2" class="form-inline">
                              <input type="text" ng-model="floor_plan_size" pattern="^(\d{0,4}\.\d{0,4}|\d{0,4}|\.\d{0,4})$" name="floor_plan_size" class="custom-text-field form-control disabper placeholderRight floatonly" placeholder="22.5"> &nbsp;&nbsp;&nbsp;m<sup>2</sup>
                              <div ng-show="personalForm.floor_plan_size.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
このフォーマットxxxx.xxxxで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">敷金</th>
                           <td>
                              <input type="text" ng-model="deposit" pattern="\d*" name="deposit" class="custom-text-field form-control disabper placeholderRight numberonly" placeholder="80000" maxlength="30">
                              <div ng-show="personalForm.deposit.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
入力整数のみ</small></div>
                           </td>
                           <th class="table-sidebar">退去償却</th>
                           <td>
                              <input type="text" pattern="\d*" ng-model="leave_amortization" name="leave_amortization" class="placeholderRight custom-text-field form-control disabper numberonly" placeholder="10000" maxlength="30">
                              <div ng-show="personalForm.leave_amortization.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
入力整数のみ</small></div>
                           </td>
                           <th class="table-sidebar">礼金</th>
                           <td>
                              <input type="text" ng-model="keymoney" pattern="\d*" name="keymoney" class="placeholderRight custom-text-field form-control disabper numberonly" placeholder="60000" maxlength="30">
                              <div ng-show="personalForm.keymoney.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
唯一の整数を入力します</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">前家賃</span></th>
                           <td>
                              <input type="text" ng-model="beforerent" pattern="\d*" name="beforerent" class="placeholderRight custom-text-field form-control disabper numberonly" placeholder="5" maxlength="30">
                              <div ng-show="personalForm.beforerent.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
唯一の整数を入力します</small></div>
                           </td>
                           <td>月分まで受領予定</td>
                        </tr>
                  <tr>
                     <th class="table-sidebar" colspan="2">家賃 <span class="glyphicon custom-asterisk glyphicon-asterisk"></th>
                     <td>
                        <input type="text" ng-model="rent" name="rent" class="placeholderRight custom-text-field form-control disabper cash numberonly" ng-requierd="true" placeholder="80000" ng-required="true" maxlength="30">
                        <div ng-show="personalForm.rent.$touched && personalForm.rent.$invalid && personalForm.rent.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
家賃を入力してください</small></div>
                     </td>
                     <td>円</td>
                  </tr>
                        <tr>
                           <th class="table-sidebar" style="width:320px;" colspan="2">管理費/共益費</th>
                           <td>
                              <input type="text" ng-model="admin_expense" pattern="\d*" name="admin_expense" class="placeholderRight custom-text-field form-control disabper cash numberonly" placeholder="3000" maxlength="30">
                              <div ng-show="personalForm.admin_expense.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;"></small></div>
                           </td>
                           <td>円</td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">駐車料金</th>
                           <td>
                              <input type="text" ng-model="parking_fee" pattern="\d*" name="parking_fee" class="placeholderRight custom-text-field form-control disabper cash numberonly" placeholder="0" maxlength="30">
                              <div ng-show="personalForm.parking_fee.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <td>円</td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">その他費用</th>
                           <td>
                              <input type="text" ng-model="other_expense" pattern="\d*" name="other_expense" class="placeholderRight custom-text-field form-control disabper cash numberonly" placeholder="0" maxlength="30">
                              <div ng-show="personalForm.other_expense.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                           </td>
                           <td>円</td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">合計<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-value="total()" name="total" id="totalcash" class="placeholderRight custom-text-field form-control disabper numberonly" placeholder="43000" readonly="readonly">
                           </td>
                           <td>円</td>
                        </tr>
                     </table>
                     <div class="custom-form-section custom-table-header">
                        <h4>申込者・賃借人</h4>
                     </div>
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th style="width:130px;" class="table-sidebar" rowspan="4">現住所</th>
                           <th style="width:190px;" class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" class="numberonly custom-text-field form-control disabper" ng-model="address_postal_code" name="address_postal_code"  placeholder="1234567" ng-required="true" ng-minlength="7" maxlength="7" pattern="\d*">
                              <div ng-show="personalForm.address_postal_code.$touched && personalForm.address_postal_code.$error.required && personalForm.address_postal_code.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;">郵便番号を入力してください</small></div>
                              <div ng-show="personalForm.address_postal_code.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>

                              <div ng-show="personalForm.address_postal_code.$error.number" class="ng-cloak"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-model="address_prefecture" maxlength="10" name="address_prefecture" class="custom-text-field form-control disabper" placeholder="東京" ng-required="true">
                              <div ng-show="personalForm.address_prefecture.$touched && personalForm.address_prefecture.$error.required && personalForm.address_prefecture.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
都道府県を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="200" ng-model="address_street" name="address_street" class="custom-text-field form-control disabper" placeholder="港区- 1-2-3" ng-required="true">
                              <div class="ng-cloak" ng-show="personalForm.address_street.$touched && personalForm.address_street.$invalid && personalForm.address_street.$error.required"><small style="color: red; display: block; text-align: center;">住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="200" ng-model="address_street_kana" name="address_street_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom-text-field form-control disabper" placeholder="ミナトク１－２－３" ng-required="true">
                              <div ng-show="personalForm.address_street_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">カタカナのみを入力してください。</small></div>
                              <div ng-show="personalForm.address_street_kana.$touched && personalForm.address_street_kana.$invalid && personalForm.address_street_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">住所(カナ)を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="100" ng-model="applicant_lessee_name" name="applicant_lessee_name" class="custom-text-field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.applicant_lessee_name.$touched && personalForm.applicant_lessee_name.$invalid && personalForm.applicant_lessee_name.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">氏名を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">氏名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="100" ng-model="applicant_lessee_name_kana" name="applicant_lessee_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom-text-field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.applicant_lessee_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">カタカナのみで入力してください</small></div>
                              <div ng-show="personalForm.applicant_lessee_name_kana.$touched && personalForm.applicant_lessee_name_kana.$invalid && personalForm.applicant_lessee_name_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">氏名(カナ)を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">性別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_sex_M" value="M" checked="checked" name="appliacant_lessee_sex" class="custom-radio-field"><label for="appliacant_lessee_sex_M"><span></span> 男</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_sex_F" name="appliacant_lessee_sex" value="F" class="custom-radio-field"><label for="appliacant_lessee_sex_F"><span></span> 女</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="1" class="form-inline yearselectfield">
                              <select name="applicant_lessee_birth_year" ng-model="applicant_lessee_birth_year" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">YYYY</option>
                                 <option value="1900">1900</option>
                                 <option value="1901">1901</option>
                                 <option value="1902">1902</option>
                                 <option value="1903">1903</option>
                                 <option value="1904">1904</option>
                                 <option value="1905">1905</option>
                                 <option value="1906">1906</option>
                                 <option value="1907">1907</option>
                                 <option value="1908">1908</option>
                                 <option value="1909">1909</option>
                                 <option value="1910">1910</option>
                                 <option value="1911">1911</option>
                                 <option value="1912">1912</option>
                                 <option value="1913">1913</option>
                                 <option value="1914">1914</option>
                                 <option value="1915">1915</option>
                                 <option value="1916">1916</option>
                                 <option value="1917">1917</option>
                                 <option value="1918">1918</option>
                                 <option value="1919">1919</option>
                                 <option value="1920">1920</option>
                                 <option value="1921">1921</option>
                                 <option value="1922">1922</option>
                                 <option value="1923">1923</option>
                                 <option value="1924">1924</option>
                                 <option value="1925">1925</option>
                                 <option value="1926">1926</option>
                                 <option value="1927">1927</option>
                                 <option value="1928">1928</option>
                                 <option value="1929">1929</option>
                                 <option value="1930">1930</option>
                                 <option value="1931">1931</option>
                                 <option value="1932">1932</option>
                                 <option value="1933">1933</option>
                                 <option value="1934">1934</option>
                                 <option value="1935">1935</option>
                                 <option value="1936">1936</option>
                                 <option value="1937">1937</option>
                                 <option value="1938">1938</option>
                                 <option value="1939">1939</option>
                                 <option value="1940">1940</option>
                                 <option value="1941">1941</option>
                                 <option value="1942">1942</option>
                                 <option value="1943">1943</option>
                                 <option value="1944">1944</option>
                                 <option value="1945">1945</option>
                                 <option value="1946">1946</option>
                                 <option value="1947">1947</option>
                                 <option value="1948">1948</option>
                                 <option value="1949">1949</option>
                                 <option value="1950">1950</option>
                                 <option value="1951">1951</option>
                                 <option value="1952">1952</option>
                                 <option value="1953">1953</option>
                                 <option value="1954">1954</option>
                                 <option value="1955">1955</option>
                                 <option value="1956">1956</option>
                                 <option value="1957">1957</option>
                                 <option value="1958">1958</option>
                                 <option value="1959">1959</option>
                                 <option value="1960">1960</option>
                                 <option value="1961">1961</option>
                                 <option value="1962">1962</option>
                                 <option value="1963">1963</option>
                                 <option value="1964">1964</option>
                                 <option value="1965">1965</option>
                                 <option value="1966">1966</option>
                                 <option value="1967">1967</option>
                                 <option value="1968">1968</option>
                                 <option value="1969">1969</option>
                                 <option value="1970">1970</option>
                                 <option value="1971">1971</option>
                                 <option value="1972">1972</option>
                                 <option value="1973">1973</option>
                                 <option value="1974">1974</option>
                                 <option value="1975">1975</option>
                                 <option value="1976">1976</option>
                                 <option value="1977">1977</option>
                                 <option value="1978">1978</option>
                                 <option value="1979">1979</option>
                                 <option value="1980">1980</option>
                                 <option value="1981">1981</option>
                                 <option value="1982">1982</option>
                                 <option value="1983">1983</option>
                                 <option value="1984">1984</option>
                                 <option value="1985">1985</option>
                                 <option value="1986">1986</option>
                                 <option value="1987">1987</option>
                                 <option value="1988">1988</option>
                                 <option value="1989">1989</option>
                                 <option value="1990">1990</option>
                                 <option value="1991">1991</option>
                                 <option value="1992">1992</option>
                                 <option value="1993">1993</option>
                                 <option value="1994">1994</option>
                                 <option value="1995">1995</option>
                                 <option value="1996">1996</option>
                                 <option value="1997">1997</option>
                                 <option value="1998">1998</option>
                                 <option value="1999">1999</option>
                                 <option value="2000">2000</option>
                                 <option value="2001">2001</option>
                                 <option value="2002">2002</option>
                                 <option value="2003">2003</option>
                                 <option value="2004">2004</option>
                                 <option value="2005">2005</option>
                                 <option value="2006">2006</option>
                                 <option value="2007">2007</option>
                                 <option value="2008">2008</option>
                                 <option value="2009">2009</option>
                                 <option value="2010">2010</option>
                                 <option value="2011">2011</option>
                                 <option value="2012">2012</option>
                                 <option value="2013">2013</option>
                                 <option value="2014">2014</option>
                                 <option value="2015">2015</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                                 <option value="2018">2018</option>
                                 <option value="2019">2019</option>
                                 <option value="2020">2020</option>
                                 <option value="2021">2021</option>
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                                 <option value="2024">2024</option>
                                 <option value="2025">2025</option>
                                 <option value="2026">2026</option>
                                 <option value="2027">2027</option>
                                 <option value="2028">2028</option>
                                 <option value="2029">2029</option>
                                 <option value="2030">2030</option>
                                 <option value="2031">2031</option>
                                 <option value="2032">2032</option>
                                 <option value="2033">2033</option>
                                 <option value="2034">2034</option>
                                 <option value="2035">2035</option>
                                 <option value="2036">2036</option>
                                 <option value="2037">2037</option>
                                 <option value="2038">2038</option>
                                 <option value="2039">2039</option>
                                 <option value="2040">2040</option>
                                 <option value="2041">2041</option>
                                 <option value="2042">2042</option>
                                 <option value="2043">2043</option>
                                 <option value="2044">2044</option>
                                 <option value="2045">2045</option>
                                 <option value="2046">2046</option>
                                 <option value="2047">2047</option>
                                 <option value="2048">2048</option>
                                 <option value="2049">2049</option>
                                 <option value="2050">2050</option>
                              </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                              <select name="applicant_lessee_birth_month" ng-model="applicant_lessee_birth_month" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">MM</option>
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                              </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                              <select name="applicant_lessee_birth_date" ng-model="applicant_lessee_birth_date" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">DD</option>
                                 <option value="1">01</option>
                                 <option value="2">02</option>
                                 <option value="3">03</option>
                                 <option value="4">04</option>
                                 <option value="5">05</option>
                                 <option value="6">06</option>
                                 <option value="7">07</option>
                                 <option value="8">08</option>
                                 <option value="9">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="18">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                                 <option value="29">29</option>
                                 <option value="30">30</option>
                                 <option value="31">31</option>
                              </select>&nbsp;&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;
                           </td>

                           <td colspan="2">
                              <input type="text" ng-model="applicant_lessee_birth_age" id="applicant_lessee_birth_age" name="applicant_lessee_birth_age" class="custom-text-field form-control disabper numberonly placeholderRight" ng-required="true" maxlength="3" ng-min="1" ng-max="150">
                              <div ng-show="personalForm.applicant_lessee_birth_age.$touched && personalForm.applicant_lessee_birth_age.$invalid && personalForm.applicant_lessee_birth_age.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">歳を入力してください</small></div>
							  <small class="applicant_lessee_birth_age-error-message" style="color: red; display: block; text-align: center;" ng-required="true"></small>
                           </td>
                           <th class="table-sidebar">
                              歳 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">固定電話</th>
                           <td>
                              <input type="text" ng-model="applicant_lessee_fixed_line_phone" name="applicant_lessee_fixed_line_phone" class="custom-text-field form-control disabper numberonly" placeholder="03123456" maxlength="20">
                              <div ng-show="personalForm.applicant_lessee_fixed_line_phone.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">正の整数のみ、最大20の長さを入力します</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">携帯電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-model="applicant_lessee_mobile_phone" name="applicant_lessee_mobile_phone" class="custom-text-field form-control disabper numberonly" placeholder="09012345678" ng-required="true" maxlength="20">
                              <div ng-show="personalForm.applicant_lessee_mobile_phone.$touched && personalForm.applicant_lessee_mobile_phone.$invalid && personalForm.applicant_lessee_mobile_phone.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">メールアドレス</th>
                           <td>
                              <input type="email" maxlength="100" ng-model="applicant_lessee_email" name="applicant_lessee_email" class="custom-text-field form-control disabper" placeholder="abcd@ef.gh">
                              <div ng-show="personalForm.applicant_lessee_email.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">メールアドレスを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2" >家族構成 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_family_structure_1" checked="checked" value="01" name="appliacant_lessee_family_structure" class="custom-radio-field"><label for="appliacant_lessee_family_structure_1"><span></span> 1. 独身</label>
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
                              <input type="text" maxlength="100" name="family_structured_other" class="custom-text-field form-control disabper input-for-other" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="2">現住居</th>
                           <th class="table-sidebar">種類 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_type_1" value="01" name="appliacant_lessee_type" class="custom-radio-field" checked="checked"><label for="appliacant_lessee_type_1"><span></span> 1. 賃貸</label>
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
                              <div ng-show="personalForm.family_structured_other.$touched && personalForm.family_structured_other.$invalid && personalForm.family_structured_other.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">種類を入力してください。</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">連帯保証人 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_joint_1" name="appliacant_lessee_joint" value="01" class="custom-radio-field" checked="checked"><label for="appliacant_lessee_joint_1"><span></span> 1. 親</label>
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
                                 <input type="radio" id="appliacant_lessee_move_reason_1" name="appliacant_lessee_move_reason" value="01" class="custom-radio-field" checked="checked"><label for="appliacant_lessee_move_reason_1"><span></span> 1. 結婚</label>
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
                              <input type="text" name="movereason_other" class="custom-text-field form-control disabper input-for-other" placeholder="その他の場合、ここに記入" maxlength="100">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">職種 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_1" name="appliacant_lessee_job_category" class="custom-radio-field" value="01" checked="checked"><label for="appliacant_lessee_job_category_1"><span></span> 1. 正社員</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_2" name="appliacant_lessee_job_category" value="02" class="custom-radio-field"><label for="appliacant_lessee_job_category_2"><span></span> 2-a.正社員以外(契約)</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_3" name="appliacant_lessee_job_category" value="03" class="custom-radio-field"><label for="appliacant_lessee_job_category_3"><span></span> 2-b.正社員以外(派遣)</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_4" name="appliacant_lessee_job_category" value="04" class="custom-radio-field"><label for="appliacant_lessee_job_category_4"><span></span> 3.公務員</label>
                              </div>
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_job_category_5" name="appliacant_lessee_job_category" value="05" class="custom-radio-field"><label for="appliacant_lessee_job_category_5"><span></span> 4.自営業</label>
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
                              <input type="text" maxlength="100" name="job_category_other" class="custom-text-field form-control disabper input-for-other" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">業種 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="appliacant_lessee_business_1" value="01" name="appliacant_lessee_business" class="custom-radio-field" checked="checked"><label for="appliacant_lessee_business_1"><span></span> 1.金融機関</label>
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
                                 <input type="radio" id="appliacant_lessee_business_11" name="appliacant_lessee_business" value="11" class="other-with-input custom-radio-field"><label for="appliacant_lessee_business_11"><span></span> 11.その他</label>
                              </div>
                              <input type="text" maxlength="100" name="business_other" class="input-for-other custom-text-field form-control disabper" placeholder="その他の場合、ここに記入">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">運転免許番号</th>
                           <td class="form-inline moveblock" colspan="5">
                              <input type="text" maxlength="4" ng-model="driver_licence_1" name="driver_licence_1" class="form-control disabper numberonly placeholdercenter" placeholder="1234" ng-minlength="4" pattern="\d*">
                              <div ng-show="personalForm.driver_licence_1.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                              <div ng-show="personalForm.driver_licence_1.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">整数のみを入力してください</small></div>
                              &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                              <input type="text" maxlength="4" ng-model="driver_licence_2" name="driver_licence_2" class="form-control disabper numberonly placeholdercenter" placeholder="4321" ng-minlength="4" pattern="\d*">
                              <div ng-show="personalForm.driver_licence_2.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                              <div ng-show="personalForm.driver_licence_2.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">整数のみを入力してください</small></div>
                              &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                              <input type="text" maxlength="4" ng-model="driver_licence_3" name="driver_licence_3" class="seven form-control disabper numberonly placeholdercenter" placeholder="6789" pattern="\d*" ng-minlength="4">
                              <div ng-show="personalForm.driver_licence_3.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                              <div ng-show="personalForm.driver_licence_3.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">整数のみを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">国籍 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-model="country_of_citizenship" maxlength="100" name="country_of_citizenship" class="custom-text-field form-control disabper" placeholder="日本" ng-required="true">
                              <div ng-show="personalForm.country_of_citizenship.$touched && personalForm.country_of_citizenship.$invalid && personalForm.country_of_citizenship.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">国籍を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">現在の家賃</th>
                           <td class="form-inline">
                              <input type="text" ng-model="current_rent" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" name="current_rent" class="placeholderRight form-control disabper floatonly" placeholder="8.5">
                              &nbsp;&nbsp;&nbsp;万円/月
                              <div ng-show="personalForm.current_rent.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">ご返済額(ローン以外)</th>
                           <td class="form-inline">
                              <input type="text" ng-model="repayment_amount" name="repayment_amount" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" class="placeholderRight form-control disabper floatonly" placeholder="0">
                              &nbsp;&nbsp;&nbsp;万円/月
                              <div ng-show="personalForm.repayment_amount.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">居住年数</th>
                           <td class="form-inline">
                              <input type="text" ng-model="residence_years" pattern="\d*" name="residence_years" class="form-control disabper placeholderRight numberonly" maxlength="4">
                              &nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;&nbsp;
                              <div ng-show="personalForm.residence_years.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">唯一の正の整数を入力してください</small></div>
                              <input type="text" ng-model="residence_months" pattern="\d*" id="residence_months" name="residence_months" class="form-control disabper placeholderRight numberonly" min="0" max="12" maxlength="2">
                              &nbsp;&nbsp;&nbsp;ヶ月
                              <div ng-show="personalForm.residence_months.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">唯一の正の整数を入力してください</small></div>
							  <small class="residence_months-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="10">勤め先</th>
                           <th class="table-sidebar">名称</th>
                           <td><input type="text" maxlength="100" ng-model="junkyard_name" name="junkyard_name" class="custom-text-field form-control disabper">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">名称(カナ)</th>
                           <td>
                              <input type="text" ng-model="junkyard_name_kana" maxlength="100" name="junkyard_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom_text_field form-control disabper">
                              <div ng-show="personalForm.junkyard_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">カタカナのみで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県</th>
                           <td><input type="text" maxlength="10" ng-model="junkyard_prefecture" name="junkyard_prefecture" class="custom_text_field form-control disabper" placeholder="東京">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所</th>
                           <td><input type="text" maxlength="200" ng-model="junkyard_street_address" name="junkyard_street_address" class="custom_text_field form-control disabper" placeholder="港区1-2-3">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ)</th>
                           <td><input type="text" ng-model="junkyard_address_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="200" name="junkyard_address_kana" class="custom_text_field form-control disabper" placeholder="ミナトク１－２－３">
                              <div ng-show="personalForm.junkyard_address_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">カタカナのみで入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">電話番号</th>
                           <td>
                              <input type="text" ng-model="junkyard_phone" name="junkyard_phone" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">従業員数 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <div class="inline-form-element">
                                 <input type="radio" id="app_number_of_employee_1" value="10" name="app_number_of_employee" class="custom-radio-field" checked="checked"><label for="app_number_of_employee_1"><span></span> 1. 10人未満</label>
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
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="annual_income" name="annual_income" class="placeholderRight custom_text_field form-control disabper floatonly" placeholder="600" maxlength="30">
                              <div ng-show="personalForm.annual_income.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;万円
                     </td>
                     <th class="table-sidebar">
                              月収
                     </th>
                     <td class="form-inline">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="monthly_income" name="monthly_income" class="placeholderRight custom_text_field form-control disabper floatonly" placeholder="32.5" maxlength="30">
                              <div ng-show="personalForm.monthly_income.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">部署</th>
                           <td colspan="2" class="form-inline">
                              <input type="text" maxlength="100" ng-model="department" name="department" class="custom_text_field form-control disabper" placeholder="賃貸本部">
                              &nbsp;&nbsp;&nbsp;&nbsp;役職&nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="text" maxlength="100" ng-model="manager" name="manager" class="custom_text_field form-control disabper" placeholder="マネージャー">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤続年数</th>
                           <td class="form-inline">
                              <input type="text" ng-model="length_of_service_year" pattern="\d*" name="length_of_service_year" class="custom_text_field form-control disabper numberonly" maxlength="4">&nbsp;&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;&nbsp;
                              <div ng-show="personalForm.length_of_service_year.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
正の整数のみを入力してください。</small></div>

                              <input type="text" ng-model="length_of_service_month" pattern="\d*" id="length_of_service_month" name="length_of_service_month" class="custom_text_field form-control disabper numberonly" min="1" max="12" maxlength="2"> &nbsp;&nbsp;&nbsp;&nbsp;ヶ月
                              <div ng-show="personalForm.length_of_service_month.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">正の整数のみを入力してください</small></div>
							  <small class="length_of_service_month-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>

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
                              <input type="text" ng-model="emergency_address_postalcode" name="emergency_address_postalcode" class="numberonly form-control disabper" placeholder="1234567" ng-required="true" ng-minlength="7" maxlength="7" pattern="\d*">
                              <div ng-show="personalForm.emergency_address_postalcode.$touched && personalForm.emergency_address_postalcode.$error.required && personalForm.emergency_address_postalcode.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;">郵便番号を入力してください</small></div>
                              <div ng-show="personalForm.emergency_address_postalcode.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>

                              <div ng-show="personalForm.emergency_address_postalcode.$error.number" class="ng-cloak"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_address_prefecture" name="emergency_address_prefecture" maxlength="10" class="custom-text-field form-control disabper" placeholder="東京" ng-required="true">
                              <div ng-show="personalForm.emergency_address_prefecture.$touched && personalForm.emergency_address_prefecture.$invalid && personalForm.emergency_address_prefecture.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_address_street" name="emergency_address_street" maxlength="200" class="custom-text-field form-control disabper" placeholder="港区1-2-3" ng-required="true">
                              <div ng-show="personalForm.emergency_address_street.$touched && personalForm.emergency_address_street.$invalid && personalForm.emergency_address_street.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" ng-model="emergency_address_street_kana" name="emergency_address_street_kana" maxlength="200" class="custom-text-field form-control disabper" placeholder="ミナトク１－２－３" ng-required="true">
                              <div ng-show="personalForm.emergency_address_street_kana.$touched && personalForm.emergency_address_street_kana.$invalid && personalForm.emergency_address_street_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                              <div ng-show="personalForm.emergency_address_street_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2" style="width:340px;">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" maxlength="100" ng-model="emergency_first_contact_name" name="emergency_first_contact_name" class="custom-text-field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.emergency_first_contact_name.$touched && personalForm.emergency_first_contact_name.$invalid && personalForm.emergency_first_contact_name.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                           </td>
                           <th class="table-sidebar">
                              氏名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>
                           <td colspan="2">
                              <input type="text" maxlength="100" ng-model="emergency_first_contact_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="emergency_first_contact_name_kana" class="custom-text-field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.emergency_first_contact_name_kana.$touched && personalForm.emergency_first_contact_name_kana.$invalid && personalForm.emergency_first_contact_name_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名(カナ)を入力してください</small></div>
                              <div ng-show="personalForm.emergency_first_contact_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">性別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td  colspan="2">
                              <div class="inline-form-element">
                              <input type="radio" id="emergency_first_contact_sex_M" name="emergency_first_contact_sex" class="custom-radio-field" value="M" checked="checked"><label for="emergency_first_contact_sex_M"><span></span> 男</label>
                            </div>

                            <div class="inline-form-element">
                              <input type="radio" id="emergency_first_contact_sex_F" name="emergency_first_contact_sex" class="custom-radio-field" value="F"><label for="emergency_first_contact_sex_F"><span></span> 女</label>
                            </div>

                           </td>
                           <th class="table-sidebar">
                              続き柄 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>
                           <td colspan="2">
                              <input type="text" ng-model="emergency_first_contact_relationship" name="emergency_first_contact_relationship" class="custom-text-field form-control disabper" placeholder="母" ng-required="true" maxlength="10">
                              <div ng-show="personalForm.emergency_first_contact_relationship.$touched && personalForm.emergency_first_contact_relationship.$invalid && personalForm.emergency_first_contact_relationship.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2" class="form-inline yearselectfield">
                              <select name="emergency_first_contact_birth_year" ng-model="emergency_first_contact_birth_year" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">YYYY</option>
                                 <option value="1900">1900</option>
                                 <option value="1901">1901</option>
                                 <option value="1902">1902</option>
                                 <option value="1903">1903</option>
                                 <option value="1904">1904</option>
                                 <option value="1905">1905</option>
                                 <option value="1906">1906</option>
                                 <option value="1907">1907</option>
                                 <option value="1908">1908</option>
                                 <option value="1909">1909</option>
                                 <option value="1910">1910</option>
                                 <option value="1911">1911</option>
                                 <option value="1912">1912</option>
                                 <option value="1913">1913</option>
                                 <option value="1914">1914</option>
                                 <option value="1915">1915</option>
                                 <option value="1916">1916</option>
                                 <option value="1917">1917</option>
                                 <option value="1918">1918</option>
                                 <option value="1919">1919</option>
                                 <option value="1920">1920</option>
                                 <option value="1921">1921</option>
                                 <option value="1922">1922</option>
                                 <option value="1923">1923</option>
                                 <option value="1924">1924</option>
                                 <option value="1925">1925</option>
                                 <option value="1926">1926</option>
                                 <option value="1927">1927</option>
                                 <option value="1928">1928</option>
                                 <option value="1929">1929</option>
                                 <option value="1930">1930</option>
                                 <option value="1931">1931</option>
                                 <option value="1932">1932</option>
                                 <option value="1933">1933</option>
                                 <option value="1934">1934</option>
                                 <option value="1935">1935</option>
                                 <option value="1936">1936</option>
                                 <option value="1937">1937</option>
                                 <option value="1938">1938</option>
                                 <option value="1939">1939</option>
                                 <option value="1940">1940</option>
                                 <option value="1941">1941</option>
                                 <option value="1942">1942</option>
                                 <option value="1943">1943</option>
                                 <option value="1944">1944</option>
                                 <option value="1945">1945</option>
                                 <option value="1946">1946</option>
                                 <option value="1947">1947</option>
                                 <option value="1948">1948</option>
                                 <option value="1949">1949</option>
                                 <option value="1950">1950</option>
                                 <option value="1951">1951</option>
                                 <option value="1952">1952</option>
                                 <option value="1953">1953</option>
                                 <option value="1954">1954</option>
                                 <option value="1955">1955</option>
                                 <option value="1956">1956</option>
                                 <option value="1957">1957</option>
                                 <option value="1958">1958</option>
                                 <option value="1959">1959</option>
                                 <option value="1960">1960</option>
                                 <option value="1961">1961</option>
                                 <option value="1962">1962</option>
                                 <option value="1963">1963</option>
                                 <option value="1964">1964</option>
                                 <option value="1965">1965</option>
                                 <option value="1966">1966</option>
                                 <option value="1967">1967</option>
                                 <option value="1968">1968</option>
                                 <option value="1969">1969</option>
                                 <option value="1970">1970</option>
                                 <option value="1971">1971</option>
                                 <option value="1972">1972</option>
                                 <option value="1973">1973</option>
                                 <option value="1974">1974</option>
                                 <option value="1975">1975</option>
                                 <option value="1976">1976</option>
                                 <option value="1977">1977</option>
                                 <option value="1978">1978</option>
                                 <option value="1979">1979</option>
                                 <option value="1980">1980</option>
                                 <option value="1981">1981</option>
                                 <option value="1982">1982</option>
                                 <option value="1983">1983</option>
                                 <option value="1984">1984</option>
                                 <option value="1985">1985</option>
                                 <option value="1986">1986</option>
                                 <option value="1987">1987</option>
                                 <option value="1988">1988</option>
                                 <option value="1989">1989</option>
                                 <option value="1990">1990</option>
                                 <option value="1991">1991</option>
                                 <option value="1992">1992</option>
                                 <option value="1993">1993</option>
                                 <option value="1994">1994</option>
                                 <option value="1995">1995</option>
                                 <option value="1996">1996</option>
                                 <option value="1997">1997</option>
                                 <option value="1998">1998</option>
                                 <option value="1999">1999</option>
                                 <option value="2000">2000</option>
                                 <option value="2001">2001</option>
                                 <option value="2002">2002</option>
                                 <option value="2003">2003</option>
                                 <option value="2004">2004</option>
                                 <option value="2005">2005</option>
                                 <option value="2006">2006</option>
                                 <option value="2007">2007</option>
                                 <option value="2008">2008</option>
                                 <option value="2009">2009</option>
                                 <option value="2010">2010</option>
                                 <option value="2011">2011</option>
                                 <option value="2012">2012</option>
                                 <option value="2013">2013</option>
                                 <option value="2014">2014</option>
                                 <option value="2015">2015</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                                 <option value="2018">2018</option>
                                 <option value="2019">2019</option>
                                 <option value="2020">2020</option>
                                 <option value="2021">2021</option>
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                                 <option value="2024">2024</option>
                                 <option value="2025">2025</option>
                                 <option value="2026">2026</option>
                                 <option value="2027">2027</option>
                                 <option value="2028">2028</option>
                                 <option value="2029">2029</option>
                                 <option value="2030">2030</option>
                                 <option value="2031">2031</option>
                                 <option value="2032">2032</option>
                                 <option value="2033">2033</option>
                                 <option value="2034">2034</option>
                                 <option value="2035">2035</option>
                                 <option value="2036">2036</option>
                                 <option value="2037">2037</option>
                                 <option value="2038">2038</option>
                                 <option value="2039">2039</option>
                                 <option value="2040">2040</option>
                                 <option value="2041">2041</option>
                                 <option value="2042">2042</option>
                                 <option value="2043">2043</option>
                                 <option value="2044">2044</option>
                                 <option value="2045">2045</option>
                                 <option value="2046">2046</option>
                                 <option value="2047">2047</option>
                                 <option value="2048">2048</option>
                                 <option value="2049">2049</option>
                                 <option value="2050">2050</option>
                              </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                              <select name="emergency_first_contact_birth_month" ng-model="emergency_first_contact_birth_month" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">MM</option>
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                              </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                              <select name="emergency_first_contact_birth_date" ng-model="emergency_first_contact_birth_date" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">DD</option>
                                 <option value="1">01</option>
                                 <option value="2">02</option>
                                 <option value="3">03</option>
                                 <option value="4">04</option>
                                 <option value="5">05</option>
                                 <option value="6">06</option>
                                 <option value="7">07</option>
                                 <option value="8">08</option>
                                 <option value="9">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="18">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                                 <option value="29">29</option>
                                 <option value="30">30</option>
                                 <option value="31">31</option>
                              </select>&nbsp;&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;
                           </td>
                           <th class="table-sidebar">
                               年齢<span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                           </th>

                           <td colspan="2">
                              <input type="text" ng-model="emergency_first_contact_birth_age" id="emergency_first_contact_birth_age" name="emergency_first_contact_birth_age" class="custom-text-field form-control disabper placeholderRight numberonly" ng-required="true" maxlength="3" ng-min="1" ng-max="150">
                              <div ng-show="personalForm.emergency_first_contact_birth_age.$touched && personalForm.emergency_first_contact_birth_age.$invalid && personalForm.emergency_first_contact_birth_age.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">年齢を入力してください。</small></div>
							  <small class="emergency_first_contact_birth_age-error-message" style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true"></small>
                           </td>

                        </tr>
                        <tr>
                           <th class="table-sidebar" colspan="2">固定電話</th>
                           <td colspan="2"><input type="text" ng-model="efc_fixed_line_phone" name="efc_fixed_line_phone" class="custom-text-field form-control disabper numberonly" placeholder="03123456" maxlength="20">
                           </td>
                           <th class="form-inline table-sidebar">
                              携帯電話
                           </th>
                           <td colspan="2">
                              <input type="text" ng-model="efc_mobile_phone" name="efc_mobile_phone" class="custom-text-field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar" rowspan="4">勤め先</th>
                           <th class="table-sidebar">名称</th>
                           <td colspan="2">
                              <input type="text" ng-model="efc_junkyard_name" maxlength="100" name="efc_junkyard_name" class="custom_text_field form-control disabper">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">名称(カナ)</th>
                           <td colspan="2">
                              <input type="text" ng-model="efc_junkyard_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" name="efc_junkyard_name_kana" class="custom_text_field form-control disabper">
                              <div ng-show="personalForm.efc_junkyard_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">年収</th>
                           <td colspan="2" class="form-inline">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="efc_annual_income" name="efc_annual_income" class="placeholderRight custom_text_field form-control disabper floatonly" placeholder="600" maxlength="30">
                              <div ng-show="personalForm.efc_annual_income.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;
                              万円
                           </td>
                           <th class="table-sidebar">
                              月収
                           </th>
                           <td colspan="2" class="form-inline">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="efc_monthly_income" name="efc_monthly_income" class="placeholderRight custom_text_field form-control disabper floatonly" placeholder="32.5" maxlength="30">
							  <div ng-show="personalForm.efc_monthly_income.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;
                              万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">緊急連絡先</th>
                           <td>
                                <input type="text" ng-model="efc_emergency_contact" name="efc_emergency_contact" class="custom_text_field form-control disabper numberonly" placeholder="03123456" maxlength="20">
								<div ng-show="personalForm.efc_emergency_contact.$touched && personalForm.efc_emergency_contact.$invalid && personalForm.efc_emergency_contact.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">緊急連絡先を入力してください</small></div>
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
                                 <input type="radio" id="resident_relationship_1" value="01" name="resident_relationship" class="custom-radio-field" checked="checked"><label for="resident_relationship_1"><span></span> 1.申込者のみ</label>
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

                              <input type="text" maxlength="100" name="resident_other" class="custom-text-field disabper form-control input-for-other" placeholder="その他の場合、ここに記入">
                           </td>



                        </tr>
                        <tr>
                           <td style="width:40px;" rowspan="5">1</td>
                        </tr>
                        <tr>
                           <th style="width:160px;" class="table-sidebar">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="100" ng-model="re_name_1" name="re_name_1" class="custom_text_field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.re_name_1.$touched && personalForm.re_name_1.$invalid && personalForm.re_name_1.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                           </td>
                           <th class="table-sidebar text-center">性別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td class="form-inline">
                              <input type="radio" id="resident_relationship_M" value="M" name="re_sex" class="custom-radio-field" checked="checked"><label for="resident_relationship_M"><span></span> 男</label>
                              <input type="radio" id="resident_relationship_F" value="F" name="re_sex" class="custom-radio-field"><label for="resident_relationship_F"><span></span> 女</label>
                           </td>
                           <th class="table-sidebar">続き柄 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" maxlength="10" ng-model="re_relation_1" name="re_relation_1" class="custom_text_field form-control disabper" placeholder="本人" ng-required="true">
                              <div ng-show="personalForm.re_relation_1.$touched && personalForm.re_relation_1.$invalid && personalForm.re_relation_1.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してください</small></div>
                           </td>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2" class="yearselectfield">
                              <select name="re_birth_year_1" ng-model="re_birth_year_1" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">YYYY</option>
                                 <option value="1900">1900</option>
                                 <option value="1901">1901</option>
                                 <option value="1902">1902</option>
                                 <option value="1903">1903</option>
                                 <option value="1904">1904</option>
                                 <option value="1905">1905</option>
                                 <option value="1906">1906</option>
                                 <option value="1907">1907</option>
                                 <option value="1908">1908</option>
                                 <option value="1909">1909</option>
                                 <option value="1910">1910</option>
                                 <option value="1911">1911</option>
                                 <option value="1912">1912</option>
                                 <option value="1913">1913</option>
                                 <option value="1914">1914</option>
                                 <option value="1915">1915</option>
                                 <option value="1916">1916</option>
                                 <option value="1917">1917</option>
                                 <option value="1918">1918</option>
                                 <option value="1919">1919</option>
                                 <option value="1920">1920</option>
                                 <option value="1921">1921</option>
                                 <option value="1922">1922</option>
                                 <option value="1923">1923</option>
                                 <option value="1924">1924</option>
                                 <option value="1925">1925</option>
                                 <option value="1926">1926</option>
                                 <option value="1927">1927</option>
                                 <option value="1928">1928</option>
                                 <option value="1929">1929</option>
                                 <option value="1930">1930</option>
                                 <option value="1931">1931</option>
                                 <option value="1932">1932</option>
                                 <option value="1933">1933</option>
                                 <option value="1934">1934</option>
                                 <option value="1935">1935</option>
                                 <option value="1936">1936</option>
                                 <option value="1937">1937</option>
                                 <option value="1938">1938</option>
                                 <option value="1939">1939</option>
                                 <option value="1940">1940</option>
                                 <option value="1941">1941</option>
                                 <option value="1942">1942</option>
                                 <option value="1943">1943</option>
                                 <option value="1944">1944</option>
                                 <option value="1945">1945</option>
                                 <option value="1946">1946</option>
                                 <option value="1947">1947</option>
                                 <option value="1948">1948</option>
                                 <option value="1949">1949</option>
                                 <option value="1950">1950</option>
                                 <option value="1951">1951</option>
                                 <option value="1952">1952</option>
                                 <option value="1953">1953</option>
                                 <option value="1954">1954</option>
                                 <option value="1955">1955</option>
                                 <option value="1956">1956</option>
                                 <option value="1957">1957</option>
                                 <option value="1958">1958</option>
                                 <option value="1959">1959</option>
                                 <option value="1960">1960</option>
                                 <option value="1961">1961</option>
                                 <option value="1962">1962</option>
                                 <option value="1963">1963</option>
                                 <option value="1964">1964</option>
                                 <option value="1965">1965</option>
                                 <option value="1966">1966</option>
                                 <option value="1967">1967</option>
                                 <option value="1968">1968</option>
                                 <option value="1969">1969</option>
                                 <option value="1970">1970</option>
                                 <option value="1971">1971</option>
                                 <option value="1972">1972</option>
                                 <option value="1973">1973</option>
                                 <option value="1974">1974</option>
                                 <option value="1975">1975</option>
                                 <option value="1976">1976</option>
                                 <option value="1977">1977</option>
                                 <option value="1978">1978</option>
                                 <option value="1979">1979</option>
                                 <option value="1980">1980</option>
                                 <option value="1981">1981</option>
                                 <option value="1982">1982</option>
                                 <option value="1983">1983</option>
                                 <option value="1984">1984</option>
                                 <option value="1985">1985</option>
                                 <option value="1986">1986</option>
                                 <option value="1987">1987</option>
                                 <option value="1988">1988</option>
                                 <option value="1989">1989</option>
                                 <option value="1990">1990</option>
                                 <option value="1991">1991</option>
                                 <option value="1992">1992</option>
                                 <option value="1993">1993</option>
                                 <option value="1994">1994</option>
                                 <option value="1995">1995</option>
                                 <option value="1996">1996</option>
                                 <option value="1997">1997</option>
                                 <option value="1998">1998</option>
                                 <option value="1999">1999</option>
                                 <option value="2000">2000</option>
                                 <option value="2001">2001</option>
                                 <option value="2002">2002</option>
                                 <option value="2003">2003</option>
                                 <option value="2004">2004</option>
                                 <option value="2005">2005</option>
                                 <option value="2006">2006</option>
                                 <option value="2007">2007</option>
                                 <option value="2008">2008</option>
                                 <option value="2009">2009</option>
                                 <option value="2010">2010</option>
                                 <option value="2011">2011</option>
                                 <option value="2012">2012</option>
                                 <option value="2013">2013</option>
                                 <option value="2014">2014</option>
                                 <option value="2015">2015</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                                 <option value="2018">2018</option>
                                 <option value="2019">2019</option>
                                 <option value="2020">2020</option>
                                 <option value="2021">2021</option>
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                                 <option value="2024">2024</option>
                                 <option value="2025">2025</option>
                                 <option value="2026">2026</option>
                                 <option value="2027">2027</option>
                                 <option value="2028">2028</option>
                                 <option value="2029">2029</option>
                                 <option value="2030">2030</option>
                                 <option value="2031">2031</option>
                                 <option value="2032">2032</option>
                                 <option value="2033">2033</option>
                                 <option value="2034">2034</option>
                                 <option value="2035">2035</option>
                                 <option value="2036">2036</option>
                                 <option value="2037">2037</option>
                                 <option value="2038">2038</option>
                                 <option value="2039">2039</option>
                                 <option value="2040">2040</option>
                                 <option value="2041">2041</option>
                                 <option value="2042">2042</option>
                                 <option value="2043">2043</option>
                                 <option value="2044">2044</option>
                                 <option value="2045">2045</option>
                                 <option value="2046">2046</option>
                                 <option value="2047">2047</option>
                                 <option value="2048">2048</option>
                                 <option value="2049">2049</option>
                                 <option value="2050">2050</option>
                              </select>&nbsp;年&nbsp;
                              <select name="re_birth_month_1" ng-model="re_birth_month_1" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">MM</option>
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                              </select>&nbsp;月&nbsp;
                              <select name="re_birth_date_1" ng-model="re_birth_date_1" ng-required="true" class="disabper custom-select">
                                 <option style="display:none" value="">DD</option>
                                 <option value="1">01</option>
                                 <option value="2">02</option>
                                 <option value="3">03</option>
                                 <option value="4">04</option>
                                 <option value="5">05</option>
                                 <option value="6">06</option>
                                 <option value="7">07</option>
                                 <option value="8">08</option>
                                 <option value="9">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="18">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                                 <option value="29">29</option>
                                 <option value="30">30</option>
                                 <option value="31">31</option>
                              </select>&nbsp;日
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">携帯電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td>
                              <input type="text" ng-model="re_mobile_1" name="re_mobile_1" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" ng-required="true" maxlength="20">
							  <div ng-show="personalForm.re_mobile_1.$touched && personalForm.re_mobile_1.$invalid && personalForm.re_mobile_1.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                           </td>
                           <th class="table-sidebar">年収</th>
                           <td class="form-inline" colspan="3">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="re_annual_income_1" name="re_annual_income_1" class="placeholderRight custom_text_field form-control disabper floatonly" placeholder="600" maxlength="30">
                              <div ng-show="personalForm.re_annual_income_1.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;
                              万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤め先 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="4">
                              <input type="text" ng-model="re_junkyard_1" name="re_junkyard_1" class="custom_text_field form-control disabper" ng-required="true" maxlength="100">
                              <div ng-show="personalForm.re_junkyard_1.$touched && personalForm.re_junkyard_1.$invalid && personalForm.re_junkyard_1.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">勤め先を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="5">2</td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">氏名</th>
                           <td>
                              <input type="text" maxlength="100" ng-model="re_name_2" name="re_name_2" class="custom_text_field form-control disabper">
                           </td>
                           <th class="table-sidebar text-center">性別</th>
                           <td>
                              <div class="inline-form-element">
                              <input type="radio" id="re_sex_2_M" value="M" name="re_sex_2" class="uncheckableradio custom-radio-field"><label for="re_sex_2_M"><span></span> 男</label>
                            </div>
                            <div class="inline-form-element">
                              <input type="radio" id="re_sex_2_F" value="F" name="re_sex_2" class="uncheckableradio custom-radio-field"><label for="re_sex_2_F"><span></span> 女</label>
                             </div>

                           </td>
                           <th class="table-sidebar">続き柄</th>
                           <td>
                              <input type="text" maxlength="10" ng-model="re_relation_2" name="re_relation_2" class="custom_text_field form-control disabper" placeholder="妻">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">生年月日</th>
                           <td colspan="2">
                              <select name="re_birth_year_2" class="disabper custom-select yearselectfield">
                                 <option style="display:none" value="">YYYY</option>
                                 <option value="1900">1900</option>
                                 <option value="1901">1901</option>
                                 <option value="1902">1902</option>
                                 <option value="1903">1903</option>
                                 <option value="1904">1904</option>
                                 <option value="1905">1905</option>
                                 <option value="1906">1906</option>
                                 <option value="1907">1907</option>
                                 <option value="1908">1908</option>
                                 <option value="1909">1909</option>
                                 <option value="1910">1910</option>
                                 <option value="1911">1911</option>
                                 <option value="1912">1912</option>
                                 <option value="1913">1913</option>
                                 <option value="1914">1914</option>
                                 <option value="1915">1915</option>
                                 <option value="1916">1916</option>
                                 <option value="1917">1917</option>
                                 <option value="1918">1918</option>
                                 <option value="1919">1919</option>
                                 <option value="1920">1920</option>
                                 <option value="1921">1921</option>
                                 <option value="1922">1922</option>
                                 <option value="1923">1923</option>
                                 <option value="1924">1924</option>
                                 <option value="1925">1925</option>
                                 <option value="1926">1926</option>
                                 <option value="1927">1927</option>
                                 <option value="1928">1928</option>
                                 <option value="1929">1929</option>
                                 <option value="1930">1930</option>
                                 <option value="1931">1931</option>
                                 <option value="1932">1932</option>
                                 <option value="1933">1933</option>
                                 <option value="1934">1934</option>
                                 <option value="1935">1935</option>
                                 <option value="1936">1936</option>
                                 <option value="1937">1937</option>
                                 <option value="1938">1938</option>
                                 <option value="1939">1939</option>
                                 <option value="1940">1940</option>
                                 <option value="1941">1941</option>
                                 <option value="1942">1942</option>
                                 <option value="1943">1943</option>
                                 <option value="1944">1944</option>
                                 <option value="1945">1945</option>
                                 <option value="1946">1946</option>
                                 <option value="1947">1947</option>
                                 <option value="1948">1948</option>
                                 <option value="1949">1949</option>
                                 <option value="1950">1950</option>
                                 <option value="1951">1951</option>
                                 <option value="1952">1952</option>
                                 <option value="1953">1953</option>
                                 <option value="1954">1954</option>
                                 <option value="1955">1955</option>
                                 <option value="1956">1956</option>
                                 <option value="1957">1957</option>
                                 <option value="1958">1958</option>
                                 <option value="1959">1959</option>
                                 <option value="1960">1960</option>
                                 <option value="1961">1961</option>
                                 <option value="1962">1962</option>
                                 <option value="1963">1963</option>
                                 <option value="1964">1964</option>
                                 <option value="1965">1965</option>
                                 <option value="1966">1966</option>
                                 <option value="1967">1967</option>
                                 <option value="1968">1968</option>
                                 <option value="1969">1969</option>
                                 <option value="1970">1970</option>
                                 <option value="1971">1971</option>
                                 <option value="1972">1972</option>
                                 <option value="1973">1973</option>
                                 <option value="1974">1974</option>
                                 <option value="1975">1975</option>
                                 <option value="1976">1976</option>
                                 <option value="1977">1977</option>
                                 <option value="1978">1978</option>
                                 <option value="1979">1979</option>
                                 <option value="1980">1980</option>
                                 <option value="1981">1981</option>
                                 <option value="1982">1982</option>
                                 <option value="1983">1983</option>
                                 <option value="1984">1984</option>
                                 <option value="1985">1985</option>
                                 <option value="1986">1986</option>
                                 <option value="1987">1987</option>
                                 <option value="1988">1988</option>
                                 <option value="1989">1989</option>
                                 <option value="1990">1990</option>
                                 <option value="1991">1991</option>
                                 <option value="1992">1992</option>
                                 <option value="1993">1993</option>
                                 <option value="1994">1994</option>
                                 <option value="1995">1995</option>
                                 <option value="1996">1996</option>
                                 <option value="1997">1997</option>
                                 <option value="1998">1998</option>
                                 <option value="1999">1999</option>
                                 <option value="2000">2000</option>
                                 <option value="2001">2001</option>
                                 <option value="2002">2002</option>
                                 <option value="2003">2003</option>
                                 <option value="2004">2004</option>
                                 <option value="2005">2005</option>
                                 <option value="2006">2006</option>
                                 <option value="2007">2007</option>
                                 <option value="2008">2008</option>
                                 <option value="2009">2009</option>
                                 <option value="2010">2010</option>
                                 <option value="2011">2011</option>
                                 <option value="2012">2012</option>
                                 <option value="2013">2013</option>
                                 <option value="2014">2014</option>
                                 <option value="2015">2015</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                                 <option value="2018">2018</option>
                                 <option value="2019">2019</option>
                                 <option value="2020">2020</option>
                                 <option value="2021">2021</option>
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                                 <option value="2024">2024</option>
                                 <option value="2025">2025</option>
                                 <option value="2026">2026</option>
                                 <option value="2027">2027</option>
                                 <option value="2028">2028</option>
                                 <option value="2029">2029</option>
                                 <option value="2030">2030</option>
                                 <option value="2031">2031</option>
                                 <option value="2032">2032</option>
                                 <option value="2033">2033</option>
                                 <option value="2034">2034</option>
                                 <option value="2035">2035</option>
                                 <option value="2036">2036</option>
                                 <option value="2037">2037</option>
                                 <option value="2038">2038</option>
                                 <option value="2039">2039</option>
                                 <option value="2040">2040</option>
                                 <option value="2041">2041</option>
                                 <option value="2042">2042</option>
                                 <option value="2043">2043</option>
                                 <option value="2044">2044</option>
                                 <option value="2045">2045</option>
                                 <option value="2046">2046</option>
                                 <option value="2047">2047</option>
                                 <option value="2048">2048</option>
                                 <option value="2049">2049</option>
                                 <option value="2050">2050</option>
                              </select>&nbsp;年&nbsp;
                              <select name="re_birth_month_2" class="disabper custom-select">
                                 <option style="display:none" value="">MM</option>
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                              </select>&nbsp;月&nbsp;
                              <select name="re_birth_date_2" class="disabper custom-select">
                                 <option style="display:none" value="">DD</option>
                                 <option value="1">01</option>
                                 <option value="2">02</option>
                                 <option value="3">03</option>
                                 <option value="4">04</option>
                                 <option value="5">05</option>
                                 <option value="6">06</option>
                                 <option value="7">07</option>
                                 <option value="8">08</option>
                                 <option value="9">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="18">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                                 <option value="29">29</option>
                                 <option value="30">30</option>
                                 <option value="31">31</option>
                              </select>&nbsp;日
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">携帯電話</th>
                           <td>
                              <input type="text" ng-model="re_mobile_2" name="re_mobile_2" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                           <th class="table-sidebar">年収</th>
                           <td class="form-inline" colspan="3">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="re_annual_income_2" name="re_annual_income_2" class="placeholderRight custom_text_field form-control disabper floatonly" placeholder="100" maxlength="30">
                              <div ng-show="personalForm.re_annual_income_2.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤め先 </th>
                           <td colspan="4">
                              <input type="text" ng-model="re_junkyard_2" name="re_junkyard_2" class="custom_text_field form-control disabper" maxlength="100">
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="5">3</td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">氏名 </th>
                           <td>
                              <input type="text" maxlength="100" ng-model="re_name_3" name="re_name_3" class="custom_text_field form-control disabper">
                           </td>
                           <th class="table-sidebar text-center">性別 </span></th>
                           <td>
                              <div class="inline-form-element">
                              <input type="radio" id="re_sex_3_M" name="re_sex_3" class="uncheckableradio custom-radio-field" value="M"><label for="re_sex_3_M"><span></span> 男</label>
                            </div>

                            <div class="inline-form-element">
                              <input type="radio" id="re_sex_3_F" name="re_sex_3" class="uncheckableradio custom-radio-field" value="F"><label for="re_sex_3_F"><span></span> 女</label>
                            </div>

                           </td>
                           <th class="table-sidebar">続き柄 </th>
                           <td>
                              <input type="text" maxlength="10" ng-model="re_relation_3" name="re_relation_3" class="custom_text_field form-control disabper" placeholder="子供">
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">生年月日 </th>
                           <td colspan="2" class="form-inline yearselectfield">
                              <select name="re_birth_year_3" class="disabper custom-select">
                                 <option style="display:none" value="">YYYY</option>
                                 <option value="1900">1900</option>
                                 <option value="1901">1901</option>
                                 <option value="1902">1902</option>
                                 <option value="1903">1903</option>
                                 <option value="1904">1904</option>
                                 <option value="1905">1905</option>
                                 <option value="1906">1906</option>
                                 <option value="1907">1907</option>
                                 <option value="1908">1908</option>
                                 <option value="1909">1909</option>
                                 <option value="1910">1910</option>
                                 <option value="1911">1911</option>
                                 <option value="1912">1912</option>
                                 <option value="1913">1913</option>
                                 <option value="1914">1914</option>
                                 <option value="1915">1915</option>
                                 <option value="1916">1916</option>
                                 <option value="1917">1917</option>
                                 <option value="1918">1918</option>
                                 <option value="1919">1919</option>
                                 <option value="1920">1920</option>
                                 <option value="1921">1921</option>
                                 <option value="1922">1922</option>
                                 <option value="1923">1923</option>
                                 <option value="1924">1924</option>
                                 <option value="1925">1925</option>
                                 <option value="1926">1926</option>
                                 <option value="1927">1927</option>
                                 <option value="1928">1928</option>
                                 <option value="1929">1929</option>
                                 <option value="1930">1930</option>
                                 <option value="1931">1931</option>
                                 <option value="1932">1932</option>
                                 <option value="1933">1933</option>
                                 <option value="1934">1934</option>
                                 <option value="1935">1935</option>
                                 <option value="1936">1936</option>
                                 <option value="1937">1937</option>
                                 <option value="1938">1938</option>
                                 <option value="1939">1939</option>
                                 <option value="1940">1940</option>
                                 <option value="1941">1941</option>
                                 <option value="1942">1942</option>
                                 <option value="1943">1943</option>
                                 <option value="1944">1944</option>
                                 <option value="1945">1945</option>
                                 <option value="1946">1946</option>
                                 <option value="1947">1947</option>
                                 <option value="1948">1948</option>
                                 <option value="1949">1949</option>
                                 <option value="1950">1950</option>
                                 <option value="1951">1951</option>
                                 <option value="1952">1952</option>
                                 <option value="1953">1953</option>
                                 <option value="1954">1954</option>
                                 <option value="1955">1955</option>
                                 <option value="1956">1956</option>
                                 <option value="1957">1957</option>
                                 <option value="1958">1958</option>
                                 <option value="1959">1959</option>
                                 <option value="1960">1960</option>
                                 <option value="1961">1961</option>
                                 <option value="1962">1962</option>
                                 <option value="1963">1963</option>
                                 <option value="1964">1964</option>
                                 <option value="1965">1965</option>
                                 <option value="1966">1966</option>
                                 <option value="1967">1967</option>
                                 <option value="1968">1968</option>
                                 <option value="1969">1969</option>
                                 <option value="1970">1970</option>
                                 <option value="1971">1971</option>
                                 <option value="1972">1972</option>
                                 <option value="1973">1973</option>
                                 <option value="1974">1974</option>
                                 <option value="1975">1975</option>
                                 <option value="1976">1976</option>
                                 <option value="1977">1977</option>
                                 <option value="1978">1978</option>
                                 <option value="1979">1979</option>
                                 <option value="1980">1980</option>
                                 <option value="1981">1981</option>
                                 <option value="1982">1982</option>
                                 <option value="1983">1983</option>
                                 <option value="1984">1984</option>
                                 <option value="1985">1985</option>
                                 <option value="1986">1986</option>
                                 <option value="1987">1987</option>
                                 <option value="1988">1988</option>
                                 <option value="1989">1989</option>
                                 <option value="1990">1990</option>
                                 <option value="1991">1991</option>
                                 <option value="1992">1992</option>
                                 <option value="1993">1993</option>
                                 <option value="1994">1994</option>
                                 <option value="1995">1995</option>
                                 <option value="1996">1996</option>
                                 <option value="1997">1997</option>
                                 <option value="1998">1998</option>
                                 <option value="1999">1999</option>
                                 <option value="2000">2000</option>
                                 <option value="2001">2001</option>
                                 <option value="2002">2002</option>
                                 <option value="2003">2003</option>
                                 <option value="2004">2004</option>
                                 <option value="2005">2005</option>
                                 <option value="2006">2006</option>
                                 <option value="2007">2007</option>
                                 <option value="2008">2008</option>
                                 <option value="2009">2009</option>
                                 <option value="2010">2010</option>
                                 <option value="2011">2011</option>
                                 <option value="2012">2012</option>
                                 <option value="2013">2013</option>
                                 <option value="2014">2014</option>
                                 <option value="2015">2015</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                                 <option value="2018">2018</option>
                                 <option value="2019">2019</option>
                                 <option value="2020">2020</option>
                                 <option value="2021">2021</option>
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                                 <option value="2024">2024</option>
                                 <option value="2025">2025</option>
                                 <option value="2026">2026</option>
                                 <option value="2027">2027</option>
                                 <option value="2028">2028</option>
                                 <option value="2029">2029</option>
                                 <option value="2030">2030</option>
                                 <option value="2031">2031</option>
                                 <option value="2032">2032</option>
                                 <option value="2033">2033</option>
                                 <option value="2034">2034</option>
                                 <option value="2035">2035</option>
                                 <option value="2036">2036</option>
                                 <option value="2037">2037</option>
                                 <option value="2038">2038</option>
                                 <option value="2039">2039</option>
                                 <option value="2040">2040</option>
                                 <option value="2041">2041</option>
                                 <option value="2042">2042</option>
                                 <option value="2043">2043</option>
                                 <option value="2044">2044</option>
                                 <option value="2045">2045</option>
                                 <option value="2046">2046</option>
                                 <option value="2047">2047</option>
                                 <option value="2048">2048</option>
                                 <option value="2049">2049</option>
                                 <option value="2050">2050</option>
                              </select>&nbsp;年&nbsp;
                              <select name="re_birth_month_3" class="disabper custom-select">
                                 <option style="display:none" value="">MM</option>
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                              </select>&nbsp;月&nbsp;
                              <select name="re_birth_date_3" class="disabper custom-select">
                                 <option style="display:none" value="">DD</option>
                                 <option value="1">01</option>
                                 <option value="2">02</option>
                                 <option value="3">03</option>
                                 <option value="4">04</option>
                                 <option value="5">05</option>
                                 <option value="6">06</option>
                                 <option value="7">07</option>
                                 <option value="8">08</option>
                                 <option value="9">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="18">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                                 <option value="29">29</option>
                                 <option value="30">30</option>
                                 <option value="31">31</option>
                              </select>&nbsp;日
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">携帯電話</th>
                           <td>
                              <input type="text" ng-model="re_mobile_3" name="re_mobile_3" class="custom_text_field form-control disabper numberonly" placeholder="09012345678" maxlength="20">
                           </td>
                           <th class="table-sidebar">年収</th>
                           <td class="form-inline" colspan="3">
                              <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="re_annual_income_3" name="re_annual_income_3" class="placeholderRight custom_text_field form-control disabper floatonly" placeholder="600" maxlength="30">
                              <div ng-show="personalForm.re_annual_income_3.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              &nbsp;&nbsp;&nbsp;万円
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">勤め先 </th>
                           <td colspan="4">
                              <input type="text" ng-model="re_junkyard_3" name="re_junkyard_3" class="custom_text_field form-control disabper" maxlength="100">
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
                              <input type="text" maxlength="1000" ng-model="other_remark" name="other_remark" class="custom_text_field form-control disabper">

                           </td>
                        </tr>
                        <tr>
                           <th style="width:140px;" class="table-sidebar" rowspan="5">仲介会社</th>
                        </tr>
                        <tr>
                           <th style="width:180px;" class="table-sidebar">会社名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <input type="text" maxlength="200" ng-model="other_company_name" name="other_company_name" class="custom_text_field form-control disabper" ng-required="true">
                       <div ng-show="personalForm.other_company_name.$touched && personalForm.other_company_name.$invalid && personalForm.other_company_name.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">会社名を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <input type="text" maxlength="200" ng-model="other_street_address" name="other_street_address" class="custom_text_field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.other_street_address.$touched && personalForm.other_street_address.$invalid && personalForm.other_street_address.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">電話番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="other_mobile" name="other_mobile" class="custom_text_filed form-control disabper numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                              <div ng-show="personalForm.other_mobile.$touched && personalForm.other_mobile.$invalid && personalForm.other_mobile.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">電話番号を入力してください</small></div>
                           </td>
                           <th class="table-sidebar text-center">FAX <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="2">
                              <input type="text" ng-model="other_fax" name="other_fax" class="custom_text_field form-control disabper numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                              <div ng-show="personalForm.other_fax.$touched && personalForm.other_fax.$invalid && personalForm.other_fax.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">FAXを入力してください</small></div>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">担当者 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           <td colspan="5">
                              <input type="text" maxlength="100" ng-model="other_person_incharge" name="other_person_incharge" class="custom_text_field form-control disabper" ng-required="true">
                              <div ng-show="personalForm.other_person_incharge.$touched && personalForm.other_person_incharge.$invalid && personalForm.other_person_incharge.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">担当者を入力してください</small></div>
                           </td>
                        </tr>
                     </table>
                     <div class="custom-form-section custom-table-header">
                        <h4>添付ファイル</h4>
                     </div>
                     <table class="table table-bordered table-responsive">
                        <tr>
                           <th class="table-sidebar" style="width: 320px;">証明書コピー </th>
                           <td>
                              <ul style="list-style-type: none;">
                                 <li>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalcertificatecopy" /></span>&nbsp;&nbsp;&nbsp;
                                        <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <th class="table-sidebar">入居申込書 </th>
                           <td>
                              <ul style="list-style-type: none;">
                                 <li>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personaltenantapplicationform" /></span>&nbsp;&nbsp;&nbsp;
                                        <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
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
                                        <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                    </div>
                                </li>
                                 <li>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother2" /></span>&nbsp;&nbsp;&nbsp;
                                        <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother3" /></span>&nbsp;&nbsp;&nbsp;
                                        <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother4" /></span>&nbsp;&nbsp;&nbsp;
                                        <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="personalother5" /></span>&nbsp;&nbsp;&nbsp;
                                        <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                     </table>
                     <div class="container fadei">

                        <button type="button" class="btn btn-info confirmbtn1" id="edi">編集</button>
                        <button type="submit" class="btn btn-success confirmbtn1" id="reg">この内容で登録</button>

                     </div>
                     <center><button type="button" onclick="showDialog()" class="btn btn-primary confirmbtn1" id="dis" ng-disabled="personalForm.$invalid">確認します</button></center>
                  </form>
               </div>
            </div>

               <div class="row flipper" style="display: none;" id="flip2">
                  <div class="custom-form-container">
                     <div class="custom-form-section custom-table-header">
                        <h4>賃貸借申込内容</h4>
                     </div>
                     <form method="post" id="coporate" name="coporateForm" role="form" action="CoperationForm" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table class="table table-bordered table-responsive">
                           <tr>
                              <th class="table-sidebar" colspan="2">契約種別 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="5">
                                 <div class="inline-form-element">
                                 <input type="radio" id="cp_contract_type_U" class="custom-radio-field" name="cp_contract_type" value="U" checked="checked"><label for="cp_contract_type_U"><span></span> 普通</label>
                                </div>

                                <div class="inline-form-element">
                                 <input type="radio" id="cp_contract_type_R" class="custom-radio-field" name="cp_contract_type" value="R"><label for="cp_contract_type_R"><span></span> 定期</label>
                                </div>

                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">入居予定 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2" class="yearselectfield">
                                 <select name="cp_occupacy_year" ng-model="cp_occupacy_year" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">YYYY</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    <option value="2038">2038</option>
                                    <option value="2039">2039</option>
                                    <option value="2040">2040</option>
                                    <option value="2041">2041</option>
                                    <option value="2042">2042</option>
                                    <option value="2043">2043</option>
                                    <option value="2044">2044</option>
                                    <option value="2045">2045</option>
                                    <option value="2046">2046</option>
                                    <option value="2047">2047</option>
                                    <option value="2048">2048</option>
                                    <option value="2049">2049</option>
                                    <option value="2050">2050</option>
                                 </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                                 <select name="cp_occupacy_month" ng-model="cp_occupacy_month" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                                 <select name="cp_occupacy_date" ng-model="cp_occupacy_date" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">DD</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                 </select>&nbsp;&nbsp;&nbsp;日
                              </td>
                              <td colspan="3">
                                 <div class="inline-form-element ccheck">
                                    <input type="checkbox" value="上旬" id="cp_occupacy_status_E" name="cp_occupacy_status" class="custom-radio-field"><label for="cp_occupacy_status_E"><span></span> 上旬</label>
                                 </div>
                                 <div class="inline-form-element ccheck">
                                    <input type="checkbox" value="中旬" id="cp_occupacy_status_M" name="cp_occupacy_status" class="custom-radio-field"><label for="cp_occupacy_status_M"><span></span> 中旬</label>
                                 </div>
                                 <div class="inline-form-element ccheck">
                                    <input type="checkbox" value="下旬" id="cp_occupacy_status_L" name="cp_occupacy_status" class="custom-radio-field"><label for="cp_occupacy_status_L"><span></span> 下旬</label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" rowspan="4">物件所在地</th>
                              <th class="table-sidebar">郵便番号 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" ng-minlength="7" maxlength="7" ng-model="cp_postalcode" class="custom-text-field form-control disabcop numberonly" name="cp_postalcode" placeholder="1234567" ng-required="true">
                            <div class="ng-cloak" ng-show="coporateForm.cp_postalcode.$touched && coporateForm.cp_postalcode.$error.required && coporateForm.cp_postalcode.$invalid"><small style="color: red; display: block; text-align: center;">郵便番号を入力してください</small></div>
                              <div class="ng-cloak" ng-show="coporateForm.cp_postalcode.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>
                              <div class="ng-cloak" ng-show="coporateForm.cp_postalcode.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" maxlength="10" ng-model="cp_prefectures" class="custom-text-field form-control disabcop" name="cp_prefectures" placeholder="東京" ng-required="true">
                                 <div ng-show="coporateForm.cp_prefectures.$touched && coporateForm.cp_prefectures.$invalid && coporateForm.cp_prefectures.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="3">
                                 <input type="text" maxlength="200" ng-model="cp_street_address" class="custom-text-field form-control disabcop" name="cp_street_address" placeholder="港区- 1-2-3" ng-required="true">
                                 <div ng-show="coporateForm.cp_street_address.$touched && coporateForm.cp_street_address.$invalid && coporateForm.cp_street_address.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="3">
                                 <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="200" ng-model="cp_address_kana" class="custom-text-field form-control disabcop" name="cp_address_kana" placeholder="ミナトク１－２－３" ng-required="true">
                                 <div ng-show="coporateForm.cp_address_kana.$touched && coporateForm.cp_address_kana.$invalid && coporateForm.cp_address_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                                 <div ng-show="coporateForm.cp_address_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" rowspan="3">物件</th>
                              <th class="table-sidebar">物件名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="3">
                                 <input type="text" maxlength="100" ng-model="cp_property_name" name="cp_property_name" class="custom-text-field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_property_name.$touched && coporateForm.cp_property_name.$invalid && coporateForm.cp_property_name.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">物件名を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">物件名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" maxlength="100" ng-model="cp_property_name_kana" name="cp_property_name_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" class="custom-text-field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_property_name_kana.$touched && coporateForm.cp_property_name_kana.$invalid && coporateForm.cp_property_name_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">物件名(カナ)を入力してください</small></div>
                                 <div ng-show="coporateForm.cp_property_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                              </td>
                              <td>
                                 <input type="text" name="cp_issue_room" maxlength="10" ng-model="cp_issue_room" class="custom-text-field form-control disabper" ng-required="true">
                                 <div ng-show="coporateForm.cp_issue_room.$touched && coporateForm.cp_issue_room.$invalid && coporateForm.cp_issue_room.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;">号室を入力してください</small></div>
                              </td>
							  <th class="table-sidebar">号室 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                           </tr>
                           <tr>
                              <th class="table-sidebar">間取り</th>
                              <td>
                                 <input type="text" ng-model="cp_floor_plan" name="cp_floor_plan" class="placeholderRight custom-text-field form-control disabcop" placeholder="2" maxlength="7">
                              </td>
                              <td colspan="2">
                                 <div class="inline-form-element cccheck">
                                    <input type="checkbox" id="cp_floor_plan_status_r" name="cp_floor_plan_status" class="custom-checkbox-field" value="R" ><label for="cp_floor_plan_status_r"><span></span> R</label>
                                 </div>
                                 <div class="inline-form-element cccheck">
                                    <input type="checkbox" id="cp_floor_plan_status_k" name="cp_floor_plan_status" class="custom-checkbox-field" value="K"><label for="cp_floor_plan_status_k"><span></span> K</label>
                                 </div>
                                 <div class="inline-form-element cccheck">
                                    <input type="checkbox" id="cp_floor_plan_status_dk" name="cp_floor_plan_status" class="custom-checkbox-field" value="DK"><label for="cp_floor_plan_status_dk"><span></span> DK</label>
                                 </div>
                                 <div class="inline-form-element cccheck">
                                    <input type="checkbox" id="cp_floor_plan_status_ldk" name="cp_floor_plan_status" class="custom-checkbox-field" value="LDK"><label for="cp_floor_plan_status_ldk"><span></span> LDK</label>
                                 </div>
                              </td>
                              <td class="form-inline" colspan="2">
                        <input type="text" ng-model="cp_floor_plan_size" pattern="^(\d{0,4}\.\d{0,4}|\d{0,4}|\.\d{0,4})$" name="cp_floor_plan_size" class="placeholderRight custom-text-field form-control disabper floatonly" placeholder="22.5">&nbsp;&nbsp;&nbsp;m<sup>2</sup>
                        <div ng-show="coporateForm.cp_floor_plan_size.$error.pattern"  class="ng-cloak"><small style="color: red; display: block; text-align: center;">このフォーマットxxxx.xxxxで入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">敷金</th>
                              <td>
                                 <input type="text" pattern="\d*" ng-model="cp_deposit" name="cp_deposit" class="placeholderRight custom-text-field form-control disabcop numberonly" placeholder="80000">
                                 <div ng-show="coporateForm.cp_deposit.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                              </td>
                              <th class="table-sidebar">
                                 退去償却
                              </th>
                              <td>
                                 <input type="text" ng-model="cp_amortization" pattern="\d*" name="cp_amortization" class="placeholderRight custom-text-field form-control disabcop numberonly" placeholdeer="10000">
                                 <div ng-show="coporateForm.cp_amortization.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                              </td>
                              <th class="table-sidebar">
                                 礼金
                              </th>
                              <td>
                                 <input type="text" ng-model="cp_keymoney" pattern="\d*" name="cp_keymoney" class="placeholderRight custom-text-field form-control disabcop numberonly" placeholder="60000">
                                 <div ng-show="coporateForm.cp_keymoney.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">前家賃</th>
                              <td>
                                 <input type="text" pattern="\d*" ng-model="cp_before_rent" name="cp_before_rent" class="placeholderRight custom-text-field form-control disabcop numberonly" placeholder="5">
                                 <div ng-show="coporateForm.cp_before_rent.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                              </td>
							  <td>月分まで受領予定</td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">家賃 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" pattern="\d*" ng-model="cp_rent" name="cp_rent" class="placeholderRight custom-text-field form-control disabcop cpcash numberonly" placeholder="80000" ng-required="true">
                                 <div ng-show="coporateForm.cp_rent.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;">入力整数のみ</small></div>
                                 <div ng-show="coporateForm.cp_rent.$touched && coporateForm.cp_rent.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">家賃を入力してください</small></div>
                              </td>
							  <td>円</td>
                           </tr>
                           <tr>
                              <th style="width:320px;" class="table-sidebar" colspan="2">管理費/共益費</th>
                              <td>
                                 <input type="text" pattern="\d*" ng-model="cp_admin_expense" name="cp_admin_expense" class="placeholderRight custom-text-field form-control disabcop cpcash numberonly" placeholder="3000">
                                 <div ng-show="coporateForm.cp_admin_expense.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                              </td>
							  <td>円</td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">駐車料金</th>
                              <td>
                                 <input type="text" pattern="\d*" ng-model="cp_parking_fee" name="cp_parking_fee" class="placeholderRight custom-text-field form-control disabcop cpcash numberonly" placeholder="0">
                                 <div ng-show="coporateForm.cp_parking_fee.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                              </td>
							  <td>円</td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">その他費用</th>
                              <td>
                                 <input type="text" pattern="\d*" ng-model="cp_other_expense" name="cp_other_expense" class="placeholderRight custom-text-field form-control disabcop cpcash numberonly" placeholder="0">
                                 <div ng-show="coporateForm.cp_other_expense.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">入力整数のみ</small></div>
                              </td>
							  <td>円</td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">合計 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" ng-value="cp_total()" id="totalcpcash" name="cp_total" class="placeholderRight custom-text-field form-control disabcop numberonly" placeholder="43000" readonly="readonly">
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
                                 <input type="text" ng-model="cp_address_postal_code" name="cp_address_postal_code" class="numberonly custom-text-field form-control disabcop" placeholder="1234567" ng-required="true" ng-minlength="7" maxlength="7" pattern="\d*">
                                 <div ng-show="coporateForm.cp_address_postal_code.$touched && coporateForm.cp_address_postal_code.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">郵便番号を入力してください</small></div>
                                  <div ng-show="coporateForm.cp_address_postal_code.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>

                                   <div ng-show="coporateForm.cp_address_postal_code.$error.number" class="ng-cloak"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="10" ng-model="cp_address_prefecture" name="cp_address_prefecture" class="custom-text-field form-control disabcop" placeholder="東京" ng-required="true">
                                 <div ng-show="coporateForm.cp_address_prefecture.$touched && coporateForm.cp_address_prefecture.$invalid && coporateForm.cp_address_prefecture.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_address_street" name="cp_address_street" class="custom-text-field form-control disabcop" placeholder="港区1-2-3" ng-required="true">
                                 <div ng-show="coporateForm.cp_address_street.$touched && coporateForm.cp_address_street.$invalid && coporateForm.cp_address_street.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="200" ng-model="cp_address_street_kana" name="cp_address_street_kana" class="custom-text-field form-control disabcop" placeholder="ミナトク１－２－３" ng-required="true">
                                 <div ng-show="coporateForm.cp_address_street_kana.$touched && coporateForm.cp_address_street_kana.$invalid && coporateForm.cp_address_street_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                                 <div ng-show="coporateForm.cp_address_street_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">会社名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_applicant_lessee_name" name="cp_applicant_lessee_name" class="custom-text-field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_applicant_lessee_name.$touched && coporateForm.cp_applicant_lessee_name.$invalid && coporateForm.cp_applicant_lessee_name.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">会社名を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" maxlength="100" colspan="2">会社名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" ng-model="cp_applicant_lessee_name_kana" name="cp_applicant_lessee_name_kana" class="custom-text-field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_applicant_lessee_name_kana.$touched && coporateForm.cp_applicant_lessee_name_kana.$invalid && coporateForm.cp_applicant_lessee_name_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">会社名(カナ)を入力してください</small></div>
                                 <div ng-show="coporateForm.cp_applicant_lessee_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">代表者名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_represent_name" name="cp_represent_name" class="custom-text-field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_represent_name.$touched && coporateForm.cp_represent_name.$invalid && coporateForm.cp_represent_name.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">代表者名を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">代表者名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" ng-model="cp_represent_name_kana" name="cp_represent_name_kana" class="custom-text-field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_represent_name_kana.$touched && coporateForm.cp_represent_name_kana.$invalid && coporateForm.cp_represent_name_kana.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">代表者名(カナ)を入力してください</small></div>
                                 <div ng-show="coporateForm.cp_represent_name_kana.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" rowspan="2">電話番号</th>
                              <th class="table-sidebar">代表 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" ng-model="cp_al_mobile_representative" name="cp_al_mobile_representative" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                                 <div ng-show="coporateForm.cp_al_mobile_representative.$touched && coporateForm.cp_al_mobile_representative.$invalid && coporateForm.cp_al_mobile_representative.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">電話番号を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">担当部署 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" ng-model="cp_al_mobile_department" name="cp_al_mobile_department" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                                 <div ng-show="coporateForm.cp_al_mobile_department.$touched && coporateForm.cp_al_mobile_department.$invalid && coporateForm.cp_al_mobile_department.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">担当部署を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">申込者メールアドレス </th>
                              <td colspan="2">
                                 <input type="email" maxlength="100" ng-model="cp_al_email" name="cp_al_email" class="custom_text_field form-control disabcop" placeholder="abcd@ef.com">
                                 <div ng-show="coporateForm.cp_al_email.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">申込者メールアドレスを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">担当部署 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_al_department" name="cp_al_department" class="custom_text_field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_al_department.$touched && coporateForm.cp_al_department.$invalid && coporateForm.cp_al_department.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">担当部署を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">担当者名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_al_name_of_person_incharge" name="cp_al_name_of_person_incharge" class="custom_text_field form-control disabcop" ng-required="true">
                                 <div ng-show="coporateForm.cp_al_name_of_person_incharge.$touched && coporateForm.cp_al_name_of_person_incharge.$invalid && coporateForm.cp_al_name_of_person_incharge.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">担当者名を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">企業HP <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="url" maxlength="100" ng-model="cp_al_company_hp" name="cp_al_company_hp" class="custom_text_field form-control disabcop" placeholder="http://abcd.ef.gh" ng-required="true">
                                 <div ng-show="coporateForm.cp_al_company_hp.$touched && coporateForm.cp_al_company_hp.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;" ng-required="true">企業HPを入力してください</small></div>

                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">事業内容 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="5">
                                 <div class="inline-form-element">
                                 <input type="radio" id="cp_al_business_1" name="cp_al_business" class="custom-radio-field" value="01" checked="checked"><label for="cp_al_business_1" checked="checked"><span></span> 1.金融機関</label>
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

                                 <input type="text" maxlength="100" name="cp_al_other_business" class="custom_text_field form-control disabcop input-for-other" placeholder="その他の場合、ここに記入">
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">入居理由 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="5">
                                 <div class="inline-form-element">
                                 <input type="radio" id="cp_al_tenants_reason_1" name="cp_al_tenants_reason" class="custom-radio-field" value="01" checked="checked"><label for="cp_al_tenants_reason_1"><span></span> 1.社宅</label>
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

                                 <input type="text" maxlength="100" name="cp_al_other_tenants_reason" class="custom_text_field form-control disabcop input-for-other" placeholder="その他の場合、ここに記入">

                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">設立日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td class="yearselectfield form-inline" colspan="3">
                                 <select name="cp_al_date_of_etablisment_year" ng-model="cp_al_date_of_etablisment_year" ng-required="true" class="disabcop custom-select yearselectfield">
                                    <option style="display:none" value="">YYYY</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    <option value="2038">2038</option>
                                    <option value="2039">2039</option>
                                    <option value="2040">2040</option>
                                    <option value="2041">2041</option>
                                    <option value="2042">2042</option>
                                    <option value="2043">2043</option>
                                    <option value="2044">2044</option>
                                    <option value="2045">2045</option>
                                    <option value="2046">2046</option>
                                    <option value="2047">2047</option>
                                    <option value="2048">2048</option>
                                    <option value="2049">2049</option>
                                    <option value="2050">2050</option>
                                 </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                                 <select name="cp_al_date_of_etablisment_month" ng-model="cp_al_date_of_etablisment_month" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>
                                 &nbsp;&nbsp;&nbsp;月
                                 <div class="inline-form-element">
                                    <input type="radio" id="cp_al_date_of_etablisment_listing_L" name="cp_al_date_of_etablisment_listing" class="custom-radio-field" ng-required="true" value="1" checked="checked"><label for="cp_al_date_of_etablisment_listing_L"><span></span> 上場</label>
                                 </div>
                                 <div class="inline-form-element">
                                    <input type="radio" id="cp_al_date_of_etablisment_listing_U" name="cp_al_date_of_etablisment_listing" class="custom-radio-field" value="0"><label for="cp_al_date_of_etablisment_listing_U"><span></span> 非上場</label>
                                </div>

                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">資本金 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td class="form-inline">

                                 <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_al_capital" name="cp_al_capital" class="placeholderRight custom_text_field form-control disabcop numberonly" placeholder="1000" ng-required="true">
                                 &nbsp;&nbsp;&nbsp;万円
                                 <div ng-show="coporateForm.cp_al_capital.$touched && coporateForm.cp_al_capital.$invalid && coporateForm.cp_al_capital.$error.required" class="ng-cloak"><small style="color: red; display: block; text-align: left; margin-left: 20px;" ng-required="true">資本金を入力してください</small></div>
                                 <div ng-show="coporateForm.cp_al_capital.$error.pattern" class="ng-cloak"><small style="color: red; display: block; text-align: left;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              </td>
                              <th class="table-sidebar">
                                年商 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                              </th>
                              <td class="form-inline">
                                 <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_al_annual_business" name="cp_al_annual_business" class="placeholderRight custom_text_field form-control disabcop floatonly" placeholder="5000" ng-required="true">&nbsp;&nbsp;&nbsp;万円
                                 <div class="ng-cloak" ng-show="coporateForm.cp_al_annual_business.$touched && coporateForm.cp_al_annual_business.$invalid && coporateForm.cp_al_annual_business.$error.required"><small style="color: red; display: block; text-align: left; margin-left: 20px;" ng-required="true">
年商を入力してください</small></div>
                                 <div class="ng-cloak" ng-show="coporateForm.cp_al_annual_business.$error.pattern"><small style="color: red; display: block; text-align: left;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">従業員数 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td class="form-inline">
                                 <input type="text" ng-model="cp_al_number_of_employee" name="cp_al_number_of_employee" class="placeholderRight custom_text_field form-control disabcop numberonly" placeholder="20" ng-required="true">
                                 &nbsp;&nbsp;&nbsp;人
                                 <div class="ng-cloak" ng-show="coporateForm.cp_al_number_of_employee.$touched && coporateForm.cp_al_number_of_employee.$invalid && coporateForm.cp_al_number_of_employee.$error.required"><small style="color: red; display: block; text-align: left; margin-left: 20px;" ng-required="true">従業員数を入力してください</small></div>
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
                                 <input type="text" ng-model="cp_joint_address_postal_code" name="cp_joint_address_postal_code" class="numberonly custom-text-field form-control disabcop" placeholder="1234567" ng-required="true" ng-minlength="7" maxlength="7" pattern="\d*">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_postal_code.$touched && coporateForm.cp_joint_address_postal_code.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">郵便番号を入力してください</small></div>
                               <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_postal_code.$error.minlength"><small style="color: red; display: block; text-align: center;">7文字入力してください</small></div>

                                <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_postal_code.$error.number"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">都道府県 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="10" ng-model="cp_joint_address_prefecture" name="cp_joint_address_prefecture" class="custom-text-field form-control disabcop" placeholder="東京" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_prefecture.$touched && coporateForm.cp_joint_address_prefecture.$invalid && coporateForm.cp_joint_address_prefecture.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">都道府県を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text"  maxlength="100" ng-model="cp_joint_address_street" name="cp_joint_address_street" class="custom-text-field form-control disabcop" placeholder="港区1-2-3" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_street.$touched && coporateForm.cp_joint_address_street.$invalid && coporateForm.cp_joint_address_street.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_joint_address_street_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="cp_joint_address_street_kana" class="custom-text-field form-control disabcop" placeholder="ミナトク１－２－３" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_street_kana.$touched && coporateForm.cp_joint_address_street_kana.$invalid && coporateForm.cp_joint_address_street_kana.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所(カナ)を入力してください</small></div>
                                 <div class="ng-cloak" ng-show="coporateForm.cp_joint_address_street_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">氏名 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_jg_name" name="cp_jg_name" class="custom-text-field form-control disabcop" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_jg_name.$touched && coporateForm.cp_jg_name.$invalid && coporateForm.cp_jg_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                               </td>
                               <th class="table-sidebar">
                                 氏名(カナ) <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                               </th>
                               <td colspan="2">
                                 <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" ng-model="cp_jg_name_kana" name="cp_jg_name_kana" class="custom-text-field form-control disabcop" ng-required="true">
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
                                 続き柄 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                               </th>
                               <td colspan="2">
                                 <input type="text" maxlength="10" ng-model="cp_jg_relationship" name="cp_jg_relationship" class="custom_text_field form-control disabcop" placeholder="母" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_jg_relationship.$touched && coporateForm.cp_jg_relationship.$invalid && coporateForm.cp_jg_relationship.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">生年月日 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2" class="form-inline">
                                 <select name="cp_emergency_first_contact_birth_year" ng-model="cp_emergency_first_contact_birth_year" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">YYYY</option>
                                    <option value="1900">1900</option>
                                    <option value="1901">1901</option>
                                    <option value="1902">1902</option>
                                    <option value="1903">1903</option>
                                    <option value="1904">1904</option>
                                    <option value="1905">1905</option>
                                    <option value="1906">1906</option>
                                    <option value="1907">1907</option>
                                    <option value="1908">1908</option>
                                    <option value="1909">1909</option>
                                    <option value="1910">1910</option>
                                    <option value="1911">1911</option>
                                    <option value="1912">1912</option>
                                    <option value="1913">1913</option>
                                    <option value="1914">1914</option>
                                    <option value="1915">1915</option>
                                    <option value="1916">1916</option>
                                    <option value="1917">1917</option>
                                    <option value="1918">1918</option>
                                    <option value="1919">1919</option>
                                    <option value="1920">1920</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    <option value="2038">2038</option>
                                    <option value="2039">2039</option>
                                    <option value="2040">2040</option>
                                    <option value="2041">2041</option>
                                    <option value="2042">2042</option>
                                    <option value="2043">2043</option>
                                    <option value="2044">2044</option>
                                    <option value="2045">2045</option>
                                    <option value="2046">2046</option>
                                    <option value="2047">2047</option>
                                    <option value="2048">2048</option>
                                    <option value="2049">2049</option>
                                    <option value="2050">2050</option>
                                 </select>&nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;
                                 <select name="cp_emergency_first_contact_birth_month" ng-model="cp_emergency_first_contact_birth_month" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;
                                 <select name="cp_emergency_first_contact_birth_date" ng-model="cp_emergency_first_contact_birth_date" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">DD</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                 </select>日
                                 &nbsp;&nbsp;&nbsp;&nbsp;
                             </td>
                             <th class="table-sidebar">
                               年齢 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span>
                             </th>
                             <td colspan="2">
                                 <input type="text" ng-model="cp_emergency_first_contact_birth_age" id="cp_emergency_first_contact_birth_age" name="cp_emergency_first_contact_birth_age" class="custom-text-field form-control disabcop numberonly" ng-required="true" maxlength="3" ng-min="1" ng-max="150">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_emergency_first_contact_birth_age.$touched && coporateForm.cp_emergency_first_contact_birth_age.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">年齢を入力してください</small></div>
                                  <small class="cp_emergency_first_contact_birth_age-error-message" style="color: red; display: block; text-align: center;" ng-required="true"></small>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">固定電話</th>
                              <td colspan="2"><input type="text" ng-model="cp_efc_fixed_line_phone" name="cp_efc_fixed_line_phone" class="custom_text_field form-control disabcop numberonly numberonly" placeholder="03123456" maxlength="20">
                       </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">携帯電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" ng-model="cp_jg_mobile" name="cp_jg_mobile" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" ng-required="true" maxlength="20">
								  <div class="ng-cloak" ng-show="coporateForm.cp_jg_mobile.$touched && coporateForm.cp_jg_mobile.$invalid && coporateForm.cp_jg_mobile.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" colspan="2">運転免許番号</th>
                              <td colspan="5" class="form-inline">
                                 <input type="text" ng-model="cp_jg_driver_licence_number1" name="cp_jg_driver_licence_number1" class="custom_text_field form-control disabcop numberonly placeholdercenter" placeholder="1234" ng-minlength="4" pattern="\d*" maxlength="4">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number1.$error.minlength"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                                <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number1.$error.maxlength"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                                <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number1.$error.pattern"><small style="color: red; display: block; text-align: center;">整数のみを入力してください</small></div>
                                 &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                                 <input type="text" ng-model="cp_jg_driver_licence_number2" name="cp_jg_driver_licence_number2" class="custom_text_field form-control disabcop numberonly placeholdercenter" placeholder="5678" ng-minlength="4" pattern="\d*" maxlength="4">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number2.$error.minlength"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                                <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number2.$error.maxlength"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                                <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number2.$error.pattern"><small style="color: red; display: block; text-align: center;">整数のみを入力してください</small></div>
                                 &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                                 <input type="text" ng-model="cp_jg_driver_licence_number3" name="cp_jg_driver_licence_number3" class="custom_text_field form-control disabcop numberonly placeholdercenter" placeholder="5678" ng-minlength="4" pattern="\d*" maxlength="4">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number3.$error.minlength"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                                <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number3.$error.maxlength"><small style="color: red; display: block; text-align: center;">唯一の4文字入力してください</small></div>
                                <div class="ng-cloak" ng-show="coporateForm.cp_jg_driver_licence_number3.$error.pattern"><small style="color: red; display: block; text-align: center;">整数のみを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar" rowspan="11">勤め先</th>
                              <th class="table-sidebar">名称</th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_efc_junkyard_name" name="cp_efc_junkyard_name" class="custom_text_field form-control disabcop">
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">名称(カナ)</th>
                              <td colspan="2">
                                 <input type="text" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" maxlength="100" ng-model="cp_efc_junkyard_name_kana" name="cp_efc_junkyard_name_kana" class="custom_text_field form-control disabcop">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_efc_junkyard_name_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">郵便番号</th>
                              <td colspan="2">
                                 <input type="text" ng-model="cp_jg_junkyard_postal_code" name="cp_jg_junkyard_postal_code" class="custom_text_field form-control disabcop numberonly" placeholder="1234567" ng-minlength="7" maxlength="7" pattern="\d*">
								 <div ng-show="coporateForm.cp_jg_junkyard_postal_code.$touched && coporateForm.cp_jg_junkyard_postal_code.$error.required && coporateForm.cp_jg_junkyard_postal_code.$invalid" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
郵便番号を入力してください</small></div>
                              <div ng-show="coporateForm.cp_jg_junkyard_postal_code.$error.minlength" class="ng-cloak"><small style="color: red; display: block; text-align: center;">
7文字入力してください</small></div>

                              <div ng-show="coporateForm.cp_jg_junkyard_postal_code.$error.number" class="ng-cloak"><small style="color: red; display: block; text-align: center;">無効な番号</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">都道府県</span></th>
                              <td colspan="2">
                                 <input type="text" maxlength="10" ng-model="cp_jg_junkyard_prefectures" name="cp_jg_junkyard_prefectures" class="custom_text_field form-control disabcop" placeholder="東京">
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所</th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_jg_junkyard_street_address" name="cp_jg_junkyard_street_address" class="custom_text_field form-control disabcop" placeholder="港区1-2-3">
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">住所(カナ)</th>
                              <td colspan="2">
                                 <input type="text" maxlength="200" ng-model="cp_jg_junkyard_address_kana" pattern="[\u3000-\u303F\u30A0-\u30FF\uff00-\uff9f]*" name="cp_jg_junkyard_address_kana" class="custom_text_field form-control disabcop" placeholder="ミナトク１－２－３">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_jg_junkyard_address_kana.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">カタカナのみを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">年収</th>
                              <td colspan="2" class="form-inline">
                                 <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_efc_annual_income" name="cp_efc_annual_income" class="placeholderRight custom_text_field form-control disabcop floatonly" placeholder="600">
                                 &nbsp;&nbsp;&nbsp;万円
                                 <div ng-show="coporateForm.cp_efc_annual_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                               </td>
                               <th class="table-sidebar">
                                 月収
                               </th>
                               <td colspan="2" class="form-inline">
                                 <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_efc_monthly_income" name="cp_efc_monthly_income" class="placeholderRight custom_text_field form-control disabcop floatonly" placeholder="32.5">&nbsp;&nbsp;&nbsp;万円
                                 <div ng-show="coporateForm.cp_efc_monthly_income.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">部署</th>
                              <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_jg_department" name="cp_jg_department" class="custom_text_field form-control disabcop" placeholder="賃貸本部">
                               </td>
                               <th class="table-sidebar">
                                 役職
                               </th>
                               <td colspan="2">
                                 <input type="text" maxlength="100" ng-model="cp_jg_manager" name="cp_jg_manager" class="custom_text_field form-control disabcop" placeholder="マネージャー">
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">勤続年数</th>
                              <td colspan="3" class="form-inline">
                                 <input type="text" pattern="\d*" ng-model="jd_length_of_service_year" name="jd_length_of_service_year" class="custom_text_field form-control disabcop placeholderRight numberonly" maxlength="4">
                                  <div class="ng-cloak" ng-show="personalForm.length_of_service_year.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">唯一の正の整数を入力してください</small></div>
                                 &nbsp;&nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="text" ng-model="jd_length_of_service_month" id="jd_length_of_service_month" name="jd_length_of_service_month" class="custom_text_field form-control disabcop placeholderRight numberonly" maxlength="2">
                                 &nbsp;&nbsp;&nbsp;ヶ月
                                  <small class="jd_length_of_service_month-error-message" style="color: red; display: block; text-align: center;" ng-required="true"></small>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">勤務先電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2">
                                 <input type="text" ng-model="cp_jg_business_mobile" name="cp_jg_business_mobile" class="custom_text_field form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
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
                                 <input type="radio" id="cp_resident_relationship_1" name="cp_resident_relationship" class="custom-radio-field" value="01" checked="checked"><label for="cp_resident_relationship_1"><span></span> 1.申込者のみ</label>
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

                                <input type="text" name="cp_resident_relationship_other" class="custom_text_field form-control disabcop input-for-other" placeholder="他の">
                              </td>



                           </tr>
                           <tr>
                              <td style="width:40px;" rowspan="5">1</td>
                           </tr>
                           <tr>
                              <th style="width:160px;" class="table-sidebar">氏名<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" maxlength="100" ng-model="cp_re_name_1" name="cp_re_name_1" class="custom_text_field form-control disabcop" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_re_name_1.$touched && coporateForm.cp_re_name_1.$invalid"><small style="color: red; display: block; text-align: center;" ng-required="true">氏名を入力してください</small></div>
                              </td>
                              <th style="width:120px;" class="table-sidebar">性別<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td style="width:200px;">
                                 <div class="inline-form-element">
                                 <input type="radio" id="cp_re_sex_1_M" name="cp_re_sex_1" class="custom-radio-field" value="M" checked="checked"><label for="cp_re_sex_1_M"><span></span> 男</label>
                                </div>
                                <div class="inline-form-element">
                                 <input type="radio" id="cp_re_sex_1_F" name="cp_re_sex_1" class="custom-radio-field" value="F"><label for="cp_re_sex_1_F"><span></span> 女</label>
                                </div>

                              </td>
                              <th class="table-sidebar">続き柄<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" maxlength="10" ng-model="cp_re_relation_1" name="cp_re_relation_1" class="custom_text_field form-control disabcop" placeholder="本人" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_re_relation_1.$touched && coporateForm.cp_re_relation_1.$invalid && coporateForm.cp_re_relation_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">続き柄を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">生年月日<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="2" class="form-inline yearselectfield">
                                 <select name="cp_resident_birth_year_1" ng-model="cp_resident_birth_year_1" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">YYYY</option>
                                    <option value="1900">1900</option>
                                    <option value="1901">1901</option>
                                    <option value="1902">1902</option>
                                    <option value="1903">1903</option>
                                    <option value="1904">1904</option>
                                    <option value="1905">1905</option>
                                    <option value="1906">1906</option>
                                    <option value="1907">1907</option>
                                    <option value="1908">1908</option>
                                    <option value="1909">1909</option>
                                    <option value="1910">1910</option>
                                    <option value="1911">1911</option>
                                    <option value="1912">1912</option>
                                    <option value="1913">1913</option>
                                    <option value="1914">1914</option>
                                    <option value="1915">1915</option>
                                    <option value="1916">1916</option>
                                    <option value="1917">1917</option>
                                    <option value="1918">1918</option>
                                    <option value="1919">1919</option>
                                    <option value="1920">1920</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    <option value="2038">2038</option>
                                    <option value="2039">2039</option>
                                    <option value="2040">2040</option>
                                    <option value="2041">2041</option>
                                    <option value="2042">2042</option>
                                    <option value="2043">2043</option>
                                    <option value="2044">2044</option>
                                    <option value="2045">2045</option>
                                    <option value="2046">2046</option>
                                    <option value="2047">2047</option>
                                    <option value="2048">2048</option>
                                    <option value="2049">2049</option>
                                    <option value="2050">2050</option>
                                 </select>&nbsp;年&nbsp;
                                 <select name="cp_resident_birth_month_1" ng-model="cp_resident_birth_month_1" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>&nbsp;月&nbsp;
                                 <select name="cp_resident_birth_date_1" ng-model="cp_resident_birth_date_1" ng-required="true" class="disabcop custom-select">
                                    <option style="display:none" value="">DD</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                 </select>&nbsp;日
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">携帯電話 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" ng-model="cp_re_mobile_1" name="cp_re_mobile_1" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" ng-required="true" maxlength="20">
								 <div class="ng-cloak" ng-show="coporateForm.cp_re_mobile_1.$touched && coporateForm.cp_re_mobile_1.$invalid && coporateForm.cp_re_mobile_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                              </td>
                              <th class="table-sidebar">年収</th>
                              <td class="form-inline" colspan="3">
                                 <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_re_annual_income_1" name="cp_re_annual_income_1" class="placeholderRight custom_text_field form-control disabcop floatonly" placeholder="600">
                                 &nbsp;&nbsp;&nbsp; 万円
                                 <div class="ng-cloak" ng-show="coporateForm.cp_re_annual_income_1.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">勤め先 <span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="4"><input type="text" ng-model="cp_re_junkyard_1" ng-required="true" name="cp_re_junkyard_1" class="custom_text_field form-control disabcop" maxlength="100">
                              <div class="ng-cloak" ng-show="coporateForm.cp_re_junkyard_1.$touched && coporateForm.cp_re_junkyard_1.$invalid && coporateForm.cp_re_junkyard_1.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">勤め先を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <td rowspan="5">2</td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">氏名</th>
                              <td>
                                 <input type="text" maxlength="100" ng-model="cp_re_name_2" name="cp_re_name_2" class="custom_text_field form-control disabcop">
                              </td>
                              <th class="table-sidebar">性別</th>
                              <td>
                                 <div class="inline-form-element">
                                 <input type="radio" id="cp_re_sex_2_M" name="cp_re_sex_2" class="uncheckableradio custom-radio-field" value="M"><label for="cp_re_sex_2_M"><span></span> 男</label>
                                </div>
                                <div class="inline-form-element">
                                 <input type="radio" id="cp_re_sex_2_F" name="cp_re_sex_2" class="uncheckableradio custom-radio-field" value="F"><label for="cp_re_sex_2_F"><span></span> 女</label>
                                </div>

                              </td>
                              <th class="table-sidebar">続き柄</th>
                              <td>
                                 <input type="text" maxlength="10" ng-model="cp_re_relation_2" name="cp_re_relation_2" class="custom_text_field form-control disabcop" placeholder="妻">
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">生年月日</th>
                              <td colspan="2" class="form-inline">
                                 <select name="cp_re_birth_year_2" class="disabcop custom-select">
                                    <option style="display:none" value="">YYYY</option>
                                    <option value="1900">1900</option>
                                    <option value="1901">1901</option>
                                    <option value="1902">1902</option>
                                    <option value="1903">1903</option>
                                    <option value="1904">1904</option>
                                    <option value="1905">1905</option>
                                    <option value="1906">1906</option>
                                    <option value="1907">1907</option>
                                    <option value="1908">1908</option>
                                    <option value="1909">1909</option>
                                    <option value="1910">1910</option>
                                    <option value="1911">1911</option>
                                    <option value="1912">1912</option>
                                    <option value="1913">1913</option>
                                    <option value="1914">1914</option>
                                    <option value="1915">1915</option>
                                    <option value="1916">1916</option>
                                    <option value="1917">1917</option>
                                    <option value="1918">1918</option>
                                    <option value="1919">1919</option>
                                    <option value="1920">1920</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    <option value="2038">2038</option>
                                    <option value="2039">2039</option>
                                    <option value="2040">2040</option>
                                    <option value="2041">2041</option>
                                    <option value="2042">2042</option>
                                    <option value="2043">2043</option>
                                    <option value="2044">2044</option>
                                    <option value="2045">2045</option>
                                    <option value="2046">2046</option>
                                    <option value="2047">2047</option>
                                    <option value="2048">2048</option>
                                    <option value="2049">2049</option>
                                    <option value="2050">2050</option>
                                 </select>&nbsp;年&nbsp;
                                 <select name="cp_re_birth_month_2" class="disabcop custom-select">
                                    <option hidden="hidden">MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>&nbsp;月&nbsp;
                                 <select name="cp_re_birth_date_2" class="disabcop custom-select">
                                    <option style="display:none" value="">DD</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                 </select>&nbsp;日
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">携帯電話</th>
                              <td>
                                 <input type="text" ng-model="cp_re_mobile_2" name="cp_re_mobile_2" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" maxlength="20">
                              </td>
                              <th class="table-sidebar">年収</th>
                              <td class="form-inline" colspan="3">
                                 <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_re_annual_income_2" name="cp_re_annual_income_2" class="placeholderRight custom_text_field form-control disabcop floatonly" placeholder="100">
                                 &nbsp;&nbsp;&nbsp; 万円
                                 <div class="ng-cloak" ng-show="coporateForm.cp_re_annual_income_2.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">勤め先</th>
                              <td colspan="4">
                                 <input type="text" ng-model="cp_re_junkyard_2" name="cp_re_junkyard_2" class="custom_text_field form-control disabcop" maxlength="100">
                              </td>
                           </tr>
                           <tr>
                              <td rowspan="5">3</td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">氏名</th>
                              <td>
                                 <input type="text" maxlength="100" ng-model="cp_re_name_3" name="cp_re_name_3" class="custom_text_field form-control disabcop">
                              </td>
                              <th class="table-sidebar">性別</th>
                              <td>
                                 <div class="inline-form-element">
                                 <input type="radio" id="cp_re_sex_3_M" name="cp_re_sex_3" class="uncheckableradio custom-radio-field" value="M"><label for="cp_re_sex_3_M"><span></span> 男</label>
                                </div>
                                <div class="inline-form-element">
                                 <input type="radio" id="cp_re_sex_3_F" name="cp_re_sex_3" class="uncheckableradio custom-radio-field" value="F"><label for="cp_re_sex_3_F"><span></span> 女</label>
                                </div>

                              </td>
                              <th class="table-sidebar">続き柄</th>
                              <td>
                                 <input type="text" maxlength="10" ng-model="cp_re_relation_3" name="cp_re_relation_3" class="custom_text_field form-control disabcop" placeholder="子供">
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">生年月日</th>
                              <td colspan="2" class="form-inline">
                                 <select name="cp_re_birth_year_3" class="disabcop custom-select">
                                    <option style="display:none" value="">YYYY</option>
                                    <option value="1900">1900</option>
                                    <option value="1901">1901</option>
                                    <option value="1902">1902</option>
                                    <option value="1903">1903</option>
                                    <option value="1904">1904</option>
                                    <option value="1905">1905</option>
                                    <option value="1906">1906</option>
                                    <option value="1907">1907</option>
                                    <option value="1908">1908</option>
                                    <option value="1909">1909</option>
                                    <option value="1910">1910</option>
                                    <option value="1911">1911</option>
                                    <option value="1912">1912</option>
                                    <option value="1913">1913</option>
                                    <option value="1914">1914</option>
                                    <option value="1915">1915</option>
                                    <option value="1916">1916</option>
                                    <option value="1917">1917</option>
                                    <option value="1918">1918</option>
                                    <option value="1919">1919</option>
                                    <option value="1920">1920</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    <option value="2038">2038</option>
                                    <option value="2039">2039</option>
                                    <option value="2040">2040</option>
                                    <option value="2041">2041</option>
                                    <option value="2042">2042</option>
                                    <option value="2043">2043</option>
                                    <option value="2044">2044</option>
                                    <option value="2045">2045</option>
                                    <option value="2046">2046</option>
                                    <option value="2047">2047</option>
                                    <option value="2048">2048</option>
                                    <option value="2049">2049</option>
                                    <option value="2050">2050</option>
                                 </select>&nbsp;年&nbsp;
                                 <select name="cp_re_birth_month_3" class="disabcop custom-select">
                                    <option hidden="hidden">MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                 </select>&nbsp;月&nbsp;
                                 <select name="cp_re_birth_date_3" class="disabcop custom-select">
                                    <option style="display:none" value="">DD</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                 </select>&nbsp;&nbsp;&nbsp;日
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">携帯電話</th>
                              <td>
                                 <input type="text" ng-model="cp_re_mobile_3" name="cp_re_mobile_3" class="custom_text_field form-control disabcop numberonly" placeholder="09012345678" maxlength="20">
                                 <div ng-show="coporateForm.cp_re_mobile_3.$touched && coporateForm.cp_re_mobile_3.$invalid && coporateForm.cp_re_mobile_3.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">携帯電話を入力してください</small></div>
                              </td>
                              <th class="table-sidebar">年収</th>
                              <td class="form-inline" colspan="3">
                                 <input type="text" pattern="^(\d{0,6}\.\d{0,4}|\d{0,6}|\.\d{0,4})$" ng-model="cp_re_annual_income_3" name="cp_re_annual_income_3" class="placeholderRight custom_text_field form-control disabcop floatonly" placeholder="600">
                                 &nbsp;&nbsp;&nbsp; 万円
                                 <div class="ng-cloak" ng-show="coporateForm.cp_re_annual_income_3.$error.pattern"><small style="color: red; display: block; text-align: left; margin-left: 3px;" ng-required="true">このフォーマットxxxxxx.xxxxで入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">勤め先</th>
                              <td colspan="4">
                                 <input type="text" ng-model="cp_re_junkyard_3" name="cp_re_junkyard_3" class="custom_text_field form-control disabcop">
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
                                 <input type="text" maxlength="1000" ng-model="cp_other_remark" name="cp_other_remark" class="custom_text_field form-control disabcop">
                              </td>
                           </tr>
                           <tr>
                              <th style="width:140px;" class="table-sidebar" rowspan="5">仲介会社</th>
                           </tr>
                           <tr>
                              <th class="table-sidebar">会社名<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="4">
                                  <input type="text" ng-model="cp_other_company_name" ng-required="true" maxlength="200" name="cp_other_company_name" class="custom_text_field form-control disabcop">
                                  <div class="ng-cloak" ng-show="coporateForm.cp_other_company_name.$touched && coporateForm.cp_other_company_name.$invalid && coporateForm.cp_other_company_name.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">会社名を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th style="width:180px;" class="table-sidebar">住所<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="4">
                                 <input type="text" maxlength="200" ng-model="cp_other_street_address" name="cp_other_street_address" class="custom_text_field form-control disabcop" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_other_street_address.$touched && coporateForm.cp_other_street_address.$invalid && coporateForm.cp_other_street_address.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">住所を入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">電話番号<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="text" ng-model="cp_other_mobile" name="cp_other_mobile" class="custom_text_filed form-control disabcop numberonly" placeholder="03123456" ng-required="true" maxlength="20">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_other_mobile.$touched && coporateForm.cp_other_mobile.$invalid && coporateForm.cp_other_mobile.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">電話番号を入力してください</small></div>
                              </td>
                              <th class="table-sidebar">FAX<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td>
                                 <input type="number" pattern="\d{0,20}" ng-model="cp_other_fax" name="cp_other_fax" class="custom_text_field form-control disabcop" placeholder="03123456" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_other_fax.$touched && coporateForm.cp_other_fax.$invalid && coporateForm.cp_other_fax.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">FAXを入力してください</small></div>
                                  <div class="ng-cloak" ng-show="coporateForm.cp_other_fax.$error.pattern"><small style="color: red; display: block; text-align: center;" ng-required="true">20の整数の長さを入力してください</small></div>
                              </td>
                           </tr>
                           <tr>
                              <th class="table-sidebar">担当者<span class="glyphicon custom-asterisk glyphicon-asterisk"></span></th>
                              <td colspan="4">
                                 <input type="text" maxlength="100" ng-model="cp_other_person_incharge" name="cp_other_person_incharge" class="custom_text_field form-control disabcop" ng-required="true">
                                 <div class="ng-cloak" ng-show="coporateForm.cp_other_person_incharge.$touched && coporateForm.cp_other_person_incharge.$invalid && coporateForm.cp_other_person_incharge.$error.required"><small style="color: red; display: block; text-align: center;" ng-required="true">担当者を入力してください</small></div>
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
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperatecertificatecopy" /></span>&nbsp;&nbsp;&nbsp;
                                           <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
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
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperatetenantapplicationform" /></span>&nbsp;&nbsp;&nbsp;
                                           <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
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
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother1" /></span>&nbsp;&nbsp;&nbsp;
                                           <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother2" /></span>&nbsp;&nbsp;&nbsp;
                                           <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother3" /></span>&nbsp;&nbsp;&nbsp;
                                           <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother4" /></span>&nbsp;&nbsp;&nbsp;
                                           <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="fileinput fileinput-new" data-provides="fileinput">
                                           <span class="btn btn-default btn-file"><span>ファイルを選択</span><input type="file" name="corperateother5" /></span>&nbsp;&nbsp;&nbsp;
                                           <span class="fileinput-filename"></span><span class="fileinput-new">選択されていません</span>
                                       </div>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                        </table>
                        <div class="container fadeicop">

                           <button type="button" class="btn btn-info confirmbtn1" id="editcop">編集</button>
                           <button type="submit" class="btn btn-success confirmbtn1" id="reg">この内容で登録</button>

                        </div>
                        <center><button type="button" onclick="showDialog()" class="btn btn-primary confirmbtn1" id="disa" ng-disabled="coporateForm.$invalid">確認します</button></center>
                     </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
