<!DOCTYPE html>
<html lang="en" >
<head>
  <title>
    Blue - Be Social  </title>
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
  <link rel="manifest" href="manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
      <link rel="stylesheet" href="{{url('frontend/assets/css/intlTelInput.css')}}">
    
        <style type="text/css" class="aInlineCss">
        
			.social-link li.urlCon {
				min-height: 25px;
				background: #fff!important;
		    margin-top: -5px;
		    padding: 0 5px;
		    display: none;
			}
			.social-link li.urlCon.show {
				display: block;
			}
			.urlCon p {
		    color: #969696;
				position: absolute;
			}
			.urlCon p b {
		    color: #000;
			}
			.urlCon > div {
				position: relative;
				overflow: hidden;
				height: 24px;
			}
			.urlCon p.r0 {
				right: 0;
			}
			.intl-tel-input .country-list .country {
				float: left;
				width: 100%;
			}
			.intl-tel-input .country-list .country .dial-code {
		    float: right;
		  }
		  .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 .selected-flag{
		  	background: #fff;
		  }
		  .intl-tel-input {
		    width: calc(100% - 45px);
			}
			.intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 .selected-flag {
				background: transparent;
			}
			.iti-mobile .intl-tel-input.iti-container {
			  width: calc(100% - 60px);
			}
			.intl-tel-input .selected-flag {
				padding: 0;
			}
		    </style>
  
</head>
<body ><div class="add-topic social-link">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="logo">
          <a href="#">
              <h1>Logo</h1>
              <img src="{{url('frontend/assets/imgs/logo.png')}}" alt="logo">
              </a>
        </div>
        <div class="type-js headline">
          <h1 class="text-js">Let’s get connected. Are you on any of these social networks?</h1>
        </div>
        <div>
          <form action="{{url('add-social-link')}}" method="post">
            @csrf
            <ul>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-instagram.png')}}" alt="social">
                </div>
                <input name="instagram" placeholder="Instagram Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-venmo.png')}}" alt="social">
                </div>
                <input name="venmo" placeholder="Venmo Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-snapchat.png')}}" alt="social">
                </div>
                <input name="snapchat" placeholder="Snapchat Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-twitter.png')}}" alt="social">
                </div>
                <input name="twitter" placeholder="Twitter Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/share-facebook.png')}}" alt="social">
                </div>
                <input name="facebook" placeholder="Facebook Username" class="socLink" type="text">
                <!--                         <a href="#">Connect</a>-->
              </li>
              <li class="lst1">
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-linkedin.png')}}" alt="social">
                </div>
                <input name="linkedin" placeholder="LinkedIn Username" class="socLink" type="text">
                <!--                         <a href="#">Connect</a>-->
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-youtube.png')}}" alt="social">
                </div>
                <input name="youtube" placeholder="YouTube Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-pinterest.png')}}" alt="social">
                </div>
                <input name="pinterest" placeholder="Pinterest Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-whatsapp.png')}}" alt="social">
                </div>
                <input name="whatsapp" placeholder="Whats App" class="num" type="tel">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-applemusic.png')}}" alt="social">
                </div>
                <input name="applemusic" placeholder="Apple Music Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-spotify.png')}}" alt="social">
                </div>
                <input name="spotify" placeholder="Spotify Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-paypal.png')}}" alt="social">
                </div>
                <input name="paypal" placeholder="paypal.me/" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-soundcloud.png')}}" alt="social">
                </div>
                <input name="soundcloud" placeholder="soundcloud.com/" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-website.png')}}" alt="social">
                </div>
                <input name="website" placeholder="Website Link" class="wUrl" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-link.png')}}" alt="social">
                </div>
                <input name="custom_link" placeholder="Custom Link" class="wUrl" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-phone.png')}}" alt="social">
                </div>
                <input name="phone" placeholder="Phone Number" class="num" type="tel">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-s_email.png')}}" alt="social">
                </div>
                <input name="s_email" placeholder="Email" class="socLink" type="email">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/map.png')}}" alt="social">
                </div>
                <input name="address" placeholder="Address" class="autocomplete" type="text">
              </li>
            </ul>
            <button type="submit" class="btn btn-info w-100prc" id="submitBtn">Connect</button>
          </form>
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
<script type="text/javascript" src="{{url('frontend/assets/js/intlTelInput.min.js" class="aScriptFile"></script>
<script type="text/javascript" src="" class="aScriptFile"></script>
<script type="text/javascript" src="{{url('frontend/assets/js/autocomplete.js" class="aScriptFile"></script>
<!-- Load inline external files; -->
<!-- Load inline script -->


</body>
</html>