@include('SessionHandling')
<html>
   <head>
      <title>アプリケーションのレビュ</title>
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="/custom/css/custom.css" />
      <script src="bootstrap/js/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
   </head>
   <body style="padding:20px 0px;">
      <div class="custom-container">

        <div class="row">
          <div class="col-xs-12">
            <div class="form-tab">

              <div class="row">
                <div class="col-xs-6">
                    <p class="userid">(社員 ID): <?php
                      if(session_status()===PHP_SESSION_NONE){
                        session_start(); echo $_SESSION['username'].'さん';
                      } elseif (session_status()===PHP_SESSION_ACTIVE) {
                        echo $_SESSION['username'].'さん';
                      } else {
                        echo "";
                      } ?> </p>
                </div>
                <div class="col-xs-6">
                    <p class="text-right p-no-margin"><a href="/Menu" class="btn menu-btn custom-btn-primary custom-sm-radius" style="margin-right:10px;">戻ります</a> <a href="/Logout" class="btn logout-btn btn-danger custom-sm-radius">ログアウト</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="table-responsive">
              <table class="table table-bordered review-table">
                <tr>
                 <th class="table-sidebar" width="250px">申込者</th>
                  <td>
                   <ul style="list-style-type: none;">
                    <li>
                      {{ $AppComs[0]->company_name }}
                    </li>
                   </ul>
                 </td>
                </tr>
                <tr>
                   <th class="table-sidebar">申込物件 - 号室</th>
           		   <td>
                  <ul style="list-style-type: none;">
                    <li>
                      {{ $AppBodys[0]->bukken_name }} - {{ $AppBodys[0]->room_no }}
                    </li>
                  </ul>
                 </td>
                </tr>
                <tr>
                  <th class="table-sidebar">審査結果</th>
                  <td>
                    <ul style="list-style-type: none;">
                      <li>リスクスコア：</li>
               	      <li>２ヶ月以上滞納確率：</li>
               	      <li>リスク区分：</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th class="table-sidebar">その他情報</th>
                  <td>
                    <ul style="list-style-type: none;">
                      <li>
                		@if ($AppCosigner[0]->sex == 'F')
		                	女
        		        @else
                			男
		                @endif
        		        </li>
                		<li>{{ $AppCosigner[0]->age }}</li>
		                <li>{{ $AppCosigner[0]->birthday }}</li>
        		        <li>{{ $AppCosigner[0]->postal_code }}&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;{{ $AppCosigner[0]->prefecture }}&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; {{ $AppCosigner[0]->address }}</li>
                		<li>{{ $AppCosigner[0]->telephone }}</li>
		                <li>{{ $AppCosigner[0]->work_place_name }}</li>
		                <li>{{ $AppCosigner[0]->work_place_prefecture }} - {{ $AppCosigner[0]->work_place_address }}</li>
        		        <li>{{ $AppCosigner[0]->work_place_tel }}</li>
                		<li>{{ $AppCosigner[0]->kinzoku_y }}年 - {{ $AppCosigner[0]->kinzoku_m }}ヶ月</li>
		                <li><?php echo (float)$AppCosigner[0]->nenshu;?>万円</li>
        		        <li>{{ $AppOthers[0]->chukai_company }}</li>
                    </ul>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <a href="/{{ $route }}" class="center-block downloadcsv-btn btn btn-default btn-md custom-md-radius">戻る</a>
          </div>
        </div>

      </div>
   </body>
</html>
