@include('SessionHandling')
<html>
    <head>
        <title>サーチ</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="custom/css/custom.css" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 80px;">
        <div class="custom-container">
              <div class="row">
              <div class="col-xs-12">
                  <div class="form-tab">
                      <div class="top-menu">
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
                                         ?>
                                         <script>
                                             alert('Please login again');
                                             location.replace("/");
                                         </script>
                                         <?php
                                       } else {
                                          echo '(社員 ID):'.$_SESSION['username'].'さん';
                                       }
                                   }else{
                                    return;
                                    }?></p>
                                <?php } ?>
                              </div>
                              <div class="col-xs-6">
                                  <p class="text-right p-no-margin"><a href="/Menu" class="btn menu-btn custom-btn-primary custom-sm-radius" style="margin-right:10px;">メニュー</a> <a href="/Logout" class="btn logout-btn btn-danger custom-sm-radius">ログアウト</a></p>
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
                                <input style="width: 100%;" type="text" class="form-control" name="bukken_name" value="{{ $field_info[0] }}">
                              </div>
                            </div>
                          </div>
                          <div class="form-group form-inline">
                            <div class="row">
                              <div class="search_label">
                                <label for="propertyname">号室 </label>
                              </div>
                              <div class="search_input">
                                <input style="width: 100%;" type="text" class="form-control" name="room_no" value="{{ $field_info[1] }}">
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
                                  @for ($i = 2050; $i >= 2010; $i--)
                                		@if ($i == $from_period)
                                		  <option selected value="{{ $from_period }}">{{ $i }}</option>
                                		@else
    									                <option value="{{ $i }}">{{ $i }}</option>
                                    @endif
									                @endfor
                                </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                <label style="margin: 0px 20px;">&mdash;</label>
                                <select name="to_period" class="form-control">
                                  @for ($i = 2050; $i >= 2010; $i--)
                                		@if ($i == $to_period)
                                		  <option selected value="{{ $to_period }}">{{ $i }}</option>
                                		@else
    									                <option value="{{ $i }}">{{ $i }}</option>
                                    @endif
									                @endfor
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group form-inline">
                            <div class="row">
                              <div class="col-xs-12 text-center">
                                <button class="custom-btn-modi btn btn-success btn-md">検索</button>
                              </div>
                            </div>
                          </div>
                      </form>
                  </div>
                </div>
                </div>

                <?php if ($record_found == 0):?>
                    <h3 class="center-block"><br>検索結果が見つかりませんでした</h3>
                <?php else:?>

                <div class="list-name-modi">
                  <div class="row">
                    <div class="col-xs-12">
                      <p>{{ $record_found }} 件　検索されました</p>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-xs-12">
                    <div class="table-responsive">
                      <table class="table table-striped">
                      <tr>
                        <th>申込者名</th>
                        <th>申込物件名 - 号室</th>
                        <th>リスクスコア</th>
                        <th>2ヶ月以上滞納確率</th>
                        <th>リスク区分</th>
                        <th>審査結果</th>
                        <th>修正</th>
                      </tr>

					          @foreach ($paginate as $item)
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->bukken_name }} - {{ $item->room_no }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a href="/ReviewResult/{{$item->app_no}}/ApplicationSearch" class="btn btn-default btn-md custom-md-radius">審査結果</a>
                        </td>
                        <td>
                          <a href="Modify/{{$item->app_no}}" class="btn btn-default btn-md custom-md-radius">修正</a>
                        </td>
                      </tr>
                    @endforeach

                    </table>
                    <div class="modificationpaginate">
                    		<div class="text-center">
                    			<p class="text-center">{!! $paginate->render()!!}</p>
                    		</div>
                    </div>
                    <div class="text-center">

                      <?php if (empty($field_info[1]) && empty($field_info[0])): ?>
                        <form <?php $blank_space = " "; $blank_space_to_url = urlencode($blank_space);?>action="RequestCSV/{{$field_info[0].$blank_space_to_url}}/{{$field_info[1].$blank_space_to_url}}/{{$field_info[2]}}/{{$field_info[3]}}" method="POST">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="center-block downloadcsv-btn btn btn-default btn-md custom-md-radius">CSV ダウンロード</button>
                        </form>
                      <?php elseif (empty($field_info[0])): ?>
                        <form <?php $blank_space = " "; $blank_space_to_url = urlencode($blank_space);?>action="RequestCSV/{{$field_info[0].$blank_space_to_url}}/{{$field_info[1]}}/{{$field_info[2]}}/{{$field_info[3]}}" method="POST">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="center-block downloadcsv-btn btn btn-default btn-md custom-md-radius">CSV ダウンロード</button>
                        </form>
                      <?php elseif (empty($field_info[1])): ?>
                        <form <?php $blank_space = " "; $blank_space_to_url = urlencode($blank_space);?>action="RequestCSV/{{$field_info[0]}}/{{$field_info[1].$blank_space_to_url}}/{{$field_info[2]}}/{{$field_info[3]}}" method="POST">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="center-block downloadcsv-btn btn btn-default btn-md custom-md-radius">CSV ダウンロード</button>
                        </form>
                      <?php else: ?>
                        <form <?php $blank_space = " "; $blank_space_to_url = urlencode($blank_space);?>action="RequestCSV/{{$field_info[0]}}/{{$field_info[1]}}/{{$field_info[2]}}/{{$field_info[3]}}" method="POST">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="center-block downloadcsv-btn btn btn-default btn-md custom-md-radius">CSV ダウンロード</button>
                        </form>
                      <?php endif; ?>

                    </div>

                    </div>
                    </div>

                  </div>
                </div>
            <?php endif; ?>

        </div>
    </body>
</html>
