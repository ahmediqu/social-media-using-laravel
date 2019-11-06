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
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">  
</head>

<body>
  <div class="tuto1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="tuto-ttl">
          <h1>Hello</h1>
          <span>my name is</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="disco-path">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="headline">
          <h1 class="">Create your personal profile to share with friends nearby</h1>
        </div>
      </div>
      <div class="col-12">
        <img src="{{url('frontend/assets/imgs/bg.png')}}" class="img-fluid">
        </div>
        <div class="col-12">
          <a href="{{url('register')}}" class="btn custom-btn">Get Started on Profile</a>
        </div>
      </div>
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

<!-- Load inline script -->
<script type="text/javascript" class="aInlineScript">

		  $( function() {
		    $("#draggable").draggable({
		      revert: true
		    });
		     $("#draggable2").draggable({
		      revert: true
		    });
		     $("#draggable3").draggable({
		      revert: true
		    });
		  });
			$.ajax({
				type: "post",
				async: false,
				url: "api/autorun"
			});
		
      var httpAssets = "assets/"; 
     
</script>
<!-- Load inline script; -->

</body>
</html>