@include('SessionHandling')
<html>
    <head>
        <title>サーチ</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="custom/css/custom.css" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top:80px;">
        <div class="custom-container">
              <div class="row">
              <div class="col-xs-12">
                  <div class="form-tab">

                      <div class="top-menu">
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
                                    } ?>
                                  </p>
                              </div>
                              <div class="col-xs-6">
                                  <p class="text-right p-no-margin"><a href="/Menu" class="btn logout-btn custom-btn-primary custom-sm-radius" style="margin-right:10px;">メニュー</a> <a href="/Logout" class="btn logout-btn btn-danger custom-sm-radius">ログアウト</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <form action="RequestSearch" method="GET" enctype="multipart/form-data" style="margin-top: 45px;">
                      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group form-inline">
                            <div class="row">
                              <div class="search_label">
                                <label for="propertyname">物件名 </label>
                              </div>
                              <div class="search_input">
                                <input style="width: 100%;" type="text" class="form-control" name="bukken_name">
                              </div>
                            </div>
                          </div>
                          <div class="form-group form-inline">
                            <div class="row">
                              <div class="search_label">
                                <label for="propertyname">号室 </label>
                              </div>
                              <div class="search_input">
                                <input style="width: 100%;" type="text" class="form-control" name="room_no">
                              </div>
                            </div>
                          </div>
                          <div class="form-group form-inline">
                            <div class="row">
                              <div class="search_label">
                                <label for="period">審査期間</label>
                              </div>
                              <div class="search_input">
                                <select name="from_period" class="form-control">
                                  @for ($i = 2010; $i <= 2050; $i++)
                                    @if ($i == (date("Y")-1))
                                      <option selected value="{{ $i }}">{{ $i }}</option>  
                                    @endif
    									              <option value="{{ $i }}">{{ $i }}</option>
									                @endfor
                                </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <label style="margin: 0px 20px;">&mdash;</label>
                                <select name="to_period" class="form-control">
                                  @for ($i = 2010; $i <= 2050; $i++)
                                    @if ($i == date("Y"))
                                      <option selected value="{{ $i }}">{{ $i }}</option>  
                                    @endif
    									              <option value="{{ $i }}">{{ $i }}</option>
									                @endfor
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group form-inline">
                            <div class="row">
                              <div class="col-xs-12 text-center">
                                <button class="custom-btn-modi btn btn-success btn-md custom-md-radius">検索 </button>
                              </div>
                            </div>
                          </div>
                      </form>
                  </div>
                </div>
                </div>
                <div class="list-name-modi">
                  <div class="row">
                    <div class="col-xs-6">

                    </div>
                    <div class="col-xs-6" style="text-align: right;">

                    </div>
                  </div>
                  <div class="row">
                    <div class="table-responsive">
                      <table class="table table-striped">


                    </table>
                    </div>
                  </div>
                </div>

        </div>
    </body>
</html>
