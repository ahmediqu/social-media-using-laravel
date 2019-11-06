<!DOCTYPE html>
<html lang="en" >
<head>
  <title>
    Reveal - Register </title>
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
  
        <style type="text/css" class="aInlineCss">
        
         .bl {

         }
         .bl a {
            display: inline;
            margin: 0;
            font-size: 16px;
         }
         .bl a:active,
         .bl a:hover,
         .bl a:focus {
            text-decoration: none;
         }
         .is-invalid{
            display: block;
         }
            </style>

</head>
<body >
    <div class="my-name create-account">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="login1">
          <a href="{{url('login')}}" class="account1">Have an account?</a>
          <a href="{{url('login')}}" class="log-in">LOG IN</a>
        </div>
        <div class="logo">
          <a href="#">'
          <!--<img src="{{url('frontend/assets/imgs/blue-logo.png')}}" alt="logo">-->
          <h1>Logo</h1>
          </a>
        </div>
        <div class="">
          <h1>Hello, lets get started on your profile.</h1>
        </div>
        <br />
        
          <form action="{{route('register')}}" method="post">
            @csrf
            <p class="p1">Enter your email address to create your account.</p>
            <div class="form-group">
            <input type="text" name="name" placeholder="Full Name"  class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name')}}">
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>
            <div class="form-group">
            <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Create a Password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
            <button type="submit" class="btn btn-info w-100prc">Create Account</button>
            <p class="bl">
              By signing up, you agree to our <a href="terms_and_conditions.html" class="forgot">Terms</a> and <a href="privacy_policy.html" class="forgot">Privacy Policy</a>
            </p>
          </form>
        </div>
      </div>
    
  </div>
</div></body>
<script src="{{url('frontend/assets/js/jquery-1.12.4.js')}}"></script>
<script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- <script src="{{url('frontend/assets/js/script.js')}}"></script> -->

<!-- Load inline external files -->

<!-- Load inline external files; -->

<!-- Load inline script -->

<!-- Load inline script; -->

</body>

<!-- Mirrored from www.profiles.blue/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 17:54:53 GMT -->
</html>