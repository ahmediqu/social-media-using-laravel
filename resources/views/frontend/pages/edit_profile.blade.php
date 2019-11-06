<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>
    Profile - Be Social  </title>
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
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/ios-switch-btn.css')}}">
    
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
    .switch--shadow:checked + label:after {
    transform: translateX(27px);
    }
    .switch--shadow:checked + label:before {
    background-color: #007aff;
    }
    .switch--shadow + label:after {
    width: 29px;
    height: 29px;
    margin-top: 2px;
    }
    .switch--shadow + label {
    padding: 3px;
    width: 60px;
    height: 35px;
    }
    .switch--shadow + label {
    float: right;
    }
    .fa-question-circle {
    color: #007aff;
    padding: 0 10px;
    }
    .modal-dialog {
    margin-top: calc(50vh - 452px / 2);
    font-weight: 600;
    text-align: center;
    }
    #btnCopyaffiliateLinkSec {
    position: absolute;
    top: 3px;
    right: 17px;
    background: #007aff;
    padding: 8px 12px;
    color: #fff;
    border-radius: 6px;
    }
    .linkCopiedMsg {
    position: fixed;
    top: -10vh;
    width: 130px;
    background: #fffffff2;
    border-radius: 5px;
    padding: 5px;
    text-align: center;
    margin-left: calc(50vw - 65px);
    box-shadow: 0 0 20px 0 #0000009e;
    border: 2px solid #007aff;
    color: #007aff;
    font-weight: bold;
    transition: 0.3s;
    }
    .linkCopiedMsg.show {
    top: 15px;
    }
    </style>
  </head>
  <body ><div class="add-pro-photo edit-pro edit-pro2">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="{{url('edit')}}" method="post" enctype="multipart/form-data">
            @csrf
          
            <div class="edit-pro-ttl">
              <span>EDIT PROFILE</span>
              <a href="{{url('profile')}}"><i class="fas fa-times-circle"></i></a>
            </div>
            <div class="upload-btn-wrapper">
              <?php
                echo "<img src='".asset(Auth::user()->image)."' name='image' id='tmpImg' alt=''>";
              ?>
              <button class="btnn" type="button">
              <i class="camera-icon"></i>
              </button>
              <small>Change Profile Photo</small>
              <input name="image" type="file" id="img">
            </div>
            <div class="form-con">
              <span>Name</span>
              <input name="name" type="text" value="{{Auth::user()->name}}">
            </div>
            <div class="form-con">
              <span>Email</span>
              <input name="email" type="text" value="{{Auth::user()->email}}" disabled>
            </div>
            <div class="form-con">
              <span>My Bio</span>
              <textarea name="bio">{{Auth::user()->bio}}</textarea>
            </div>
            <span class="sn-ttl">Social Networks</span>
            <ul class="social-link">
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-instagram.png')}}" alt="social">
                </div>
                <input name="instagram" value="{{Auth::user()->instagram}}" placeholder="Instagram Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-venmo.png')}}" alt="social">
                </div>
                <input name="venmo" value="{{Auth::user()->venmo}}" placeholder="Venmo Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-snapchat.png')}}" alt="social">
                </div>
                <input name="snapchat" value="{{Auth::user()->snapchat}}" placeholder="Snapchat Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-twitter.png')}}" alt="social">
                </div>
                <input name="twitter" value="{{Auth::user()->twitter}}" placeholder="Twitter Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/share-facebook.png')}}" alt="social">
                </div>
                <input name="facebook" value="{{Auth::user()->facebook}}" placeholder="Facebook Username" class="socLink" type="text">
                <!--                         <a href="#">Connect</a>-->
              </li>
              <li class="lst1">
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-linkedin.png')}}" alt="social">
                </div>
                <input name="linkedin" value="{{Auth::user()->linkedin}}" placeholder="LinkedIn Username" class="socLink" type="text">
                <!--                         <a href="#">Connect</a>-->
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-youtube.png')}}" alt="social">
                </div>
                <input name="youtube" value="{{Auth::user()->youtube}}" placeholder="YouTube Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-pinterest.png')}}" alt="social">
                </div>
                <input name="pinterest" value="{{Auth::user()->pinterest}}" placeholder="Pinterest Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-whatsapp.png')}}" alt="social">
                </div>
                <input name="whatsapp" value="{{Auth::user()->whatsapp}}" placeholder="Whats App" class="num" type="tel">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-applemusic.png')}}" alt="social">
                </div>
                <input name="applemusic" value="{{Auth::user()->applemusic}}" placeholder="Apple Music Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-spotify.png')}}" alt="social">
                </div>
                <input name="spotify" value="{{Auth::user()->spotify}}" placeholder="Spotify Username" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-paypal.png')}}" alt="social">
                </div>
                <input name="paypal" value="{{Auth::user()->paypal}}" placeholder="paypal.me/" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-soundcloud.png')}}" alt="social">
                </div>
                <input name="soundcloud" value="{{Auth::user()->soundcloud}}" placeholder="soundcloud.com/" class="socLink" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-website.png')}}" alt="social">
                </div>
                <input name="website" value="{{Auth::user()->website}}" placeholder="Website Link" class="wUrl" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-link.png')}}" alt="social">
                </div>
                <input name="custom_link" value="{{Auth::user()->custom_link}}" placeholder="Custom Link" class="wUrl" type="text">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-phone.png')}}" alt="social">
                </div>
                <input name="phone" value="{{Auth::user()->phone}}" placeholder="Phone Number" class="num" type="tel">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/social-network-s_email.png')}}" alt="social">
                </div>
                <input name="s_email" value="{{Auth::user()->s_email}}" placeholder="Email" class="socLink" type="email">
              </li>
              <li>
                <div class="s-img">
                  <img src="{{url('frontend/assets/imgs/map.png')}}" alt="social">
                </div>
                <input name="address" value="{{Auth::user()->address}}" placeholder="Address" class="autocomplete" type="text">
              </li>
            </ul>
            <!-- <div class="form-con row">
              <div class="col-8">
                <!- class="btnShowMdl d-inline" data-type="howAffiliateWorks" ->
                <span class="pt-1">
                  Become an Affiliate
                  <span class="btnShowMdl d-inline" data-type="howAffiliateWorks">
                    <i class="fa fa-question-circle"></i>
                  </span>
                </span>
              </div>
              <div class="col-4 align-right">
                <input id="switch-shadow-affiliate" class="switch switch--shadow" act-type="autofill" type="checkbox" name="affiliate">
                <label for="switch-shadow-affiliate">
                  
                </label>
              </div>
            </div> -->
            <!-- <div class="row" id="affiliateLinkSec">
              <div class="col-12">
                <div class="inputStyle">
                  <div class="s-img">
                    <img src="{{url('frontend/assets/imgs/getpaid.png')}}" alt="getpaid">
                  </div>
                  <input type="text" name="affiliateLink" id="affiliateLink" placeholder="Paste your affiliate link">
                </div> -->
                <!-- <span id="btnCopyAffiliateLink" data-clipboard-target="#inAffiliateLink">
                  <i class="fa fa-copy"></i>
                </span> -->
              </div>
            </div>
            <button type="submit" class="btn w-100prc btn-info" id="submitBtn">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
</body>
  <script src="{{url('frontend/assets/js/jquery-1.12.4.js')}}"></script>
  <script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/script.js')}}"></script>
  <!-- Load inline external files -->
  <script type="text/javascript" src="{{url('frontend/assets/js/jquery-ui.js')}}" class="aScriptFile"></script>
  <script type="text/javascript" src="{{url('frontend/assets/js/jquery.ui.touch-punch.js')}}" class="aScriptFile"></script>
  <script type="text/javascript" src="{{url('frontend/assets/js/auto-type.js')}}" class="aScriptFile"></script>
  <script type="text/javascript" src="{{url('frontend/assets/js/intlTelInput.min.js')}}" class="aScriptFile"></script>
  <script type="text/javascript" src="#" class="aScriptFile"></script>
  <script type="text/javascript" src="{{url('frontend/assets/js/autocomplete.js')}}" class="aScriptFile"></script>
  <script type="text/javascript" src="{{url('frontend/assets/js/clipboard.min.js')}}" class="aScriptFile"></script>
  <!-- Load inline external files; -->
  <!-- Load inline script -->
</body>
</html>