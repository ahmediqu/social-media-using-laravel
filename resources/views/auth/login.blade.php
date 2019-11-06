<!DOCTYPE html>
<html lang="en" >
<head>
  <title>
    Reveal - Login  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
   <!--Fav Icons      -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{url('frontend/assets/imgs/favicon/apple-icon-57x57.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{url('frontend/assets/imgs/favicon/apple-icon-60x60.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{url('frontend/assets/imgs/favicon/apple-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('frontend/assets/imgs/favicon/apple-icon-76x76.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{url('frontend/assets/imgs/favicon/apple-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{url('frontend/assets/imgs/favicon/apple-icon-120x120.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{url('frontend/assets/imgs/favicon/apple-icon-144x144.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{url('frontend/assets/imgs/favicon/apple-icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/assets/imgs/favicon/apple-icon-180x180.png')}}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{url('frontend/assets/imgs/favicon/android-icon-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/assets/imgs/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{url('frontend/assets/imgs/favicon/favicon-96x96.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/assets/imgs/favicon/favicon-16x16.png')}}">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
  <style>
      .invalid-feedback{
        display: block;
      }
  </style>
</head>
<body>
    <div class="my-name create-account wel-back">
  <div class="container">
    <div class="row">
      <form action="{{route('login')}}" method="post">
        @csrf
        <div class="col-12">
          <div class="login1">
            <a href="{{url('register')}}" class="account1">Don’t have an account?</a>
            <a href="{{url('register')}}" class="log-in">SIGN UP</a>
          </div>
          <div class="logo">
            <a href="#">
                <!--<img src="{{url('frontend/assets/imgs/blue-logo.png')}}" alt="logo">-->
                <h1>Logo</h1>
            </a>
          </div>
          <div class=" headline">
            <h1>Welcome back, To Blue!</h1>
          </div>
          <div class="headline">
            <p class="p1">Enter your email address and password to access your account.</p>
          </div>
          <div class="form-group">
          <input type="email" name="email" placeholder="Email" required>
          @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" required>
          @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <button type="submit" class="btn btn-info w-100prc" type="submit" id="submitBtn">Log In</button>
          <a href="reset_password" class="forgot">Forgot Password?</a>
        </div>
      </form>
    </div>
  </div>
</div></body>
<script src="{{url('frontend/assets/js/jquery-1.12.4.js')}}"></script>
<script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/assets/js/script.js')}}"></script>

<!-- Load inline external files -->
<script type="text/javascript" src="{{url('frontend/assets/js/jquery-ui.js')}}" class="aScriptFile"></script>
<script type="text/javascript" src="{{url('frontend/assets/js/jquery.ui.touch-punch.js')}}" class="aScriptFile"></script>
<script type="text/javascript" src="{{url('frontend/assets/js/auto-type.js')}}" class="aScriptFile"></script>
<!-- Load inline external files; -->

</body>
</html>