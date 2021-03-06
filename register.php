
<!-- dang nhap -->
<div class="modal fade" id="myModal-res" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content boxRegis">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <legend>Đăng ký</legend>
        <div class="text-pop"><i>Đã có tài khoản? <a href="" data-toggle="modal" data-target="#myModal-log" data-dismiss="modal"><u>Đăng nhập</u></a></i></div>
      </div>

      <div class="modal-body">
      <form class="" id="regis" name="regis" action="register-noti.php" method="POST" onSubmit="javascript:return validate();">
        <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-5">
                    <label for="fullname" class="control-label">Họ và tên</label>
                </div>
                <div class="col-md-7">
                    <input class="form-control" type="text" name="lblFullname" id="lblFullname" value="Nhập họ tên..." onfocus="onfocus_fullname()">
                    <input class="form-control" type="text" name="fullname" id="fullname" style="display:none;" onkeyup="return check_fullname()";>
                    <div id="fullname_response" style="display:none;"></div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-5">
                    <label for="username" class="control-label">Tên đăng nhập</label>
                </div>
                <div class="col-md-7">
                    <input class="form-control" type="text" name="lblUsername" id="lblUsername" value="Tên đăng nhập..." onfocus="onfocus_username()">
                    <input class="form-control" type="text" name="username" id="username" style="display: none;" onkeyup="return check_username()";>
                    <div id="username_response" style="display:none;"></div>
                </div>
              </div>

              <div class="row">
                  <div class="col-md-5">
                      <label for="password" class="control-label">Mật khẩu</label>
                  </div>
                  <div class="col-md-7">
                      <input class="form-control" type="text" name="lblPassword" id="lblPassword" value="Mật khẩu..." onfocus="onfocus_password()">
                      <input class="form-control" type="password" name="password" id="password" style="display:none;" onkeyup="return check_password()";>
                      <div id="password_response" style="display:none;"></div>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-5">
                      <label for="email" class="control-label">Email</label>
                  </div>
                  <div class="col-md-7">
                      <input class="form-control" type="text" name="lblEmail" id="lblEmail" value="Nhập email..." onfocus="onfocus_email()">
                      <input class="form-control" type="text" name="email" id="email" autocomplete="off" style="display:none;" onkeyup="return check_email()";>
                      <div id="email_response" style="display:none;"></div>
                  </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-xs-10 col-sm-11 col-xs-offset-1">
                    <button class="btn btn-block btn-social btn-facebook" style="margin-top:20px;">
                        <i class="fa fa-facebook"></i> Facebook
                    </button>
                </div>
                <div class="col-xs-10 col-sm-11 col-xs-offset-1">
                    <button class="btn btn-block btn-social btn-google-plus" style="margin-top:20px;">
                        <i class="fa fa-google-plus"></i> Google
                    </button>
                </div>
              </div>
              
            </div>
        </div>
        <button type="submit" class="btn btn-default btn-pop center-block" value="res" name="btnRes" id="btnRes" style="margin-top:20px;">Đăng ký</button>
        
        </form>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
