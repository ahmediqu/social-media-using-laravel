<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>
    Reveal - Add Bio </title>
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
    <link rel="stylesheet" type="text/css" href="{{url('frontend/assets/css/all.min.css')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
  </head>
  <body ><div class="my-name my-bio">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="logo">
            <a href="#">
                <img src="{{url('frontend/assets/imgs/logo.png')}}" alt="logo">
            
            </a>
          </div>
          <div class=" headline">
            <h1 class="">Tell me about yourself…</h1>
          </div>
          
            <form method="post" action="{{url('bio')}}">
              @csrf
              <div class="">
                <!--<div class="form-con yr"><span>Class of</span><select><option>Year</option></select></div>-->
                <!--                    <div class="form-con"><input type="text" placeholder="Major"></div>-->
                <div class="form-group">
                  <textarea placeholder="My Bio" name="bio" required></textarea>
                </div>
                <!--                    <p class="p1">I will introduce you to people you cross paths with in real-life, using Bluetooth.</p>-->
              </div>
              <button type="submit" class="btn btn-info w-100prc" id="submitBtn">Next</button>
            </form>
          </div>
        </div>
      
    </div>
  </div>
  
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