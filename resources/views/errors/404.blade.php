<html>
    <head>
      <meta charset="UTF-8">
      <title>エラーページ</title>
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="/custom/css/custom.css">
      <script type="text/javascript" src="/js/jquery.min.js"></script>
      <script type="text/javascript" src="/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
      <script type="text/javascript" src="/custom/js/custom.js"></script>
    </head>
    <body style="padding-top:30px;">
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="modal modal-md fade" id="mailForm" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button style="font-size:2em;" type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 style="color:#555;"><span style="vertical-align: text-top;color:#449d44;" class="glyphicon glyphicon-envelope"></span> 管理者に報告する</h3>
                            </div>
                            <div class="modal-body">
                                <form action="/SendMail" method="POST" id="sendMailForm" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <label for="adminEmail">宛先：</label>
                                            </div>
                                            <div class="col-xs-10">
                                                <input type="email" class="form-control" id="adminEmail" name="adminEmail" readonly="readonly" value="naoki.fukaya@gspi.co.jp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <label for="mailSubject">件名：</label>
                                            </div>
                                            <div class="col-xs-10">
                                                <?php if(session_status()===PHP_SESSION_NONE) { session_start(); if(isset($_SESSION[ 'username'])){ ?>
                                                <input type="hidden" name="userid" value="{{$_SESSION['username']}}">
                                                <input type="text" class="form-control" id="mailSubject" placeholder="ここに件名を入力" value="{{$_SESSION['username']}} ({{date(" Y-m-d ")}})" name="mailSubject">
                                                <?php } else { ?>
                                                <input type="text" class="form-control" id="mailSubject" placeholder="ここに件名を入力" value="Forgot Password ({{date(" Y-m-d ")}})" name="mailSubject">
                                                <?php } } else if(session_status()===PHP_SESSION_ACTIVE){ if(isset($_SESSION[ 'username'])){ ?>
                                                <input type="hidden" name="userid" value="{{$_SESSION['username']}}">
                                                <input type="text" class="form-control" id="mailSubject" placeholder="ここに件名を入力" value="{{$_SESSION['username']}} ({{date(" Y-m-d ")}})" name="mailSubject">
                                                <?php } else { ?>
                                                <input type="text" class="form-control" id="mailSubject" placeholder="ここに件名を入力" value="Forgot Password ({{date(" Y-m-d ")}})" name="mailSubject">
                                                <?php }} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <label for="mailBody">本文：</label>
                                            </div>
                                            <div class="col-xs-10">
                                                <textarea rows="10" class="form-control" id="mailBody" name="mailBody" placeholder="ここにメッセージを入力"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 text-center">
                                                <button type="submit" class="btn btn-default btn-success btn-sm"><span class="glyphicon glyphicon-envelope"></span> メールを送る</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">

          <div class="row">
            <div class="col-xs-12">
              <div class="form-tab">
                <div class="top-menu" style="border-bottom:none;">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="row">
                        <div class="col-xs-6">
                          <?php if (session_status()===PHP_SESSION_ACTIVE) { ?>
                            <p class="userid"><?php
                            if(session_status()===PHP_SESSION_NONE){
                              session_start(); echo $_SESSION['username'].'さん';
                             }elseif (session_status()===PHP_SESSION_ACTIVE) {
                                 if (empty($_SESSION['username'])) {
                                 } else {
                                    echo '(社員 ID):'.$_SESSION['username'].'さん';
                                 }
                             }else{
                              return;
                              }?></p>
                          <?php } ?>
                        </div>
                        <div class="col-xs-6">
                            <p class="text-right p-no-margin"><a href="/Menu" class="btn menu-btn custom-btn-primary custom-sm-radius" style="margin-right:10px;">メニュー</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="error-message">
                <h3><center>ページが見つかりません</center></h3>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
                <div class="contact-admin text-center">
                    <button class="btn btn-default btn-lg" id="successsent" data-toggle="modal" data-target="#mailForm">管理者に連絡する</button>
                </div>
            </div>
        </div>

        </div>
		<?php if (!empty($message_sent)) { ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="modal modal-md fade" id="successForm" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button style="font-size:2em;" type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style="color:#555;"><span style="vertical-align: text-top;color:#449d44;" class="glyphicon glyphicon-envelope"></span> 送信</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-success">
                                    メッセージが送信されました。
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <button type="button" id="btnhidealert" class="custom-btn-modi btn btn-success btn-md custom-md-radius">戻る</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#successForm').modal("show");
        $('#btnhidealert').click(function() {
            $('#successForm').modal("hide");
        });
    </script>
    <?php } ?>
    </body>
</html>
