<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>
    Reveal - Add Profile Photo  </title>
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
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <style>
        .img{
  max-width:180px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}
    </style>
  </head>
  <body ><div class="my-name add-pro-photo">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="logo">
            <a href="#"><img src="{{url('frontend/assets/imgs/logo.png')}}" alt="logo"></a>
          </div>
          <div class=" headline">
            <h1 class="">Add a selfie so people you cross paths with know its you.</h1>
          </div>
         {{Auth::user()->name}}
            <form action="{{url('add-selfie')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="upload-btn-wrapper">
                <img src="{{url('frontend/assets/imgs/photo.png')}}" id="blah" alt="">
                <button class="btn">
                <!-- <i class="far fa-camera-retro"></i> -->
                <img src="{{url('frontend/assets/imgs/camera.png')}}" id="" alt="" style="border-radius: 0;height:50px;width:50px;">
                </button>
                <input name="image" type="file" id="img" class="img" onchange="readURL(this);" required>
              </div>
              <div class="type-js2 headline">
                <!--                 <p class="p1 text-js2">Add a profile photo so people you cross paths with know it’s you.</p>-->
              </div>
              <button type="submit" class="btn btn-info w-100prc" id="submitBtn">Next</button>
            </form>
          </div>
        </div>
      
    </div>
  </div></body>
  <script src="{{url('frontend/assets/js/all.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/jquery-1.12.4.js')}}"></script>
  <script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/script.js')}}"></script>
  <!-- Load inline external files -->
  <script type="text/javascript" src="{{url('frontend/assets/js/jquery-ui.js')}}" class="aScriptFile"></script>
  <script type="text/javascript" src="{{url('frontend/assets/js/jquery.ui.touch-punch.js" class="aScriptFile')}}"></script>
  <script type="text/javascript" src="{{url('frontend/assets/js/auto-type.js" class="aScriptFile')}}"></script>
  <!-- Load inline external files; -->
  <!-- Load inline script -->
<script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
  <!-- Load inline script; -->
</body>
</html>