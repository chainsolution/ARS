@include('SessionHandling')
<!DOCTYPE html>
<html>
    <head>
        <title>メニュー</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="custom/css/custom.css" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top:80px;">
        <div class="custom-container-sm">

          <div class="row">
            <div class="col-xs-12">
              <div class="form-tab">

                <div class="top-menu">
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
                            <p class="text-right"><a href="/Logout" class="btn logout-btn btn-danger custom-sm-radius">ログアウト</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="menu-btn-wrapper">
                  <a class="btn btn-default btn-block btn-lg custom-xs-radius" href="Registration">申込情報を登録する </a>
                  <a class="btn btn-default btn-block btn-lg custom-xs-radius" href="ApplicationSearch">申込者を検索する</a>
                  <a class="btn btn-default btn-block btn-lg custom-xs-radius" href="ContactAdmin">管理者に連絡する </a>
                </div>

              </div>
            </div>
          </div>

        </div>
    </body>
</html>
