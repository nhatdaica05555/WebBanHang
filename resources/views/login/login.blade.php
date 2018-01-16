<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="{{asset('')}}">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  
  <script src="assets/js/login.js"></script>
  <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
  <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login" style="border: 1px solid rgba(0, 0, 0, 0.22)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Login</a>
                </div>
                <div class="col-xs-6">
                  <a href="{{route('getRegister')}}" id="register-form-link">Register</a>
                </div>
              </div>
              <hr>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">

                  <form id="login-form" action="{{route('postLogin')}}" method="post" role="form" style="display: block;">
                    {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group text-center">
                      <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                      <label for="remember"> Remember Me</label>
                    </div>
                    @if(session('thongbao'))
                    <div class='alert alert-danger'>
                         {{session('thongbao')}}
                    </div>
                        @endif
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input style="background-color: #2ecc71" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

                
                  <form id="register-form" action="{{route('postRegister')}}" method="post" role="form" style="display: none;">
                      {{csrf_field()}}
                      @if(count($errors) > 0)
                      <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                                      {{$err}}.<br>
                          @endforeach
                      </div>
                  @endif
                      <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fullname" id="fullname" tabindex="1" class="form-control" placeholder="Fullname" value="">
                      </div>
                      <div class="form-group">
                          <select class="form-control" name="gender">
                              <option>Nam</option>
                              <option>Nữ</option>
                            </select>
                      </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input style="background-color: #2ecc71" type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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

   
</body>
</html>