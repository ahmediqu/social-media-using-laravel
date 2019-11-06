<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>
		Reveal - Profile </title>
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
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
		
		<style type="text/css" class="aInlineCss">
		
						.installPwa {
							width: 90%;
						position: fixed;
						z-index: 1;
						bottom: -50%;
						background: #efefef;
						margin-left: 5%;
						border-radius: 10px;
						border: 1px solid #bdbdbd;
						box-shadow: 0 0 24px 0px #c3c3c3;
						transition: 0.7s;
						}
						.installPwa .cls {
							right: 5px;
							position: absolute;
							border-radius: 50%;
							border: 1px solid #00000091;
							padding: 0 0 0 3px;
							width: 18px;
							height: 17.5px;
							line-height: 17px;
							top: 5px;
						}
						.installPwa p {
							margin: 0;
					line-height: 20px;
						}
						.installPwa p b {
							font-size: 15px;
							display: block;
							margin-top: 3px;
						}
						.installPwa p img {
							width: 19px;
							margin-top: -6px;
						}
						.installPwa .c1,
						.installPwa .c2 {
							float:left;
					padding:10px;
						}
						.installPwa .c1 {
					width: 25%;
						}
						.installPwa .c2 {
					width: 75%;
						}
						.installPwa.show {
							bottom: 35px;
						}
						.installPwa[id=divAndroid] p {
							margin-top: 7px;
						}
		</style>
		<style type="text/css" class="aInlineCss">
		
					.tuto-ttl > h1 > a {
						color: #fff;
					}
					.tuto-ttl > h1 > a:hover ,
					.tuto-ttl > h1 > a:focus ,
					.tuto-ttl > h1 > a:active {
						text-decoration: none;
					}
					.social2 li {
					float: left;
					margin: 0;
					}
					.social2 a {
						padding: 7px;
						float: left;
						border-bottom: 1px solid #dedede;
						width: 100%;
					}
					.social2 img {
						float: left;
					}
					.social2 li a div {
						float: left;
						width: calc(100% - 40px);
					}
					.social2 li a div p{
						margin: 0;
						text-align: left;
						padding: 0 15px;
					}
					.social2 li a div p:nth-of-type(1) {
						font-size: 16px;
						line-height: 21px;
					}
					.social2 ul.selfPro li a div p:nth-of-type(1) {
						font-size: 18px;
						line-height: 40px;
					}
					.social2 li a div p:nth-of-type(2) {
						font-size: 12px;
					}
					.my-profile-photo {
				margin-top: 15px;
					}
					.pViewSec {
						margin: 15px 0 0;
						font-size: 14px;
						font-weight: 600;
					}
					.pwrd {
						font-weight: bold;
						font-size: 17px;
						padding-bottom: 15px;
					}
					.pwrd a {
				color: initial;
					}
					.pwrd a span {
						color: #007AFF;
					}
					.textEllipsis {
						display: block;
						overflow: hidden;
						white-space: nowrap;
						text-overflow: ellipsis;
					}
		</style>
	</head>
	<body ><div class="tuto1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="tuto-ttl">
						<a href="{{url('edit')}}" class="edit1">Edit Profile</a>
						<h1>
						<a href="">
							Hello
						</a>
						</h1>
						<span>
							<a href="">
							</a>
							my name is
						</span>
						<a href="{{url('logout')}}" class="">Log Out</a>
						<a href=""><i class=""></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="my-profile">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center pViewSec">
				Profile views 0      </div>
				<div class="col-12">
					<div class="my-profile-photo">
						<?php
						echo "<img src='".asset(Auth::user()->image)."' alt='' id='profileImg'>";
						?>
					</div>
					<h1 id="name">{{Auth::user()->name}}</h1>
					<!-- <div class="l1" id=""><span>Riverside University</span></div> -->
					<p id="bio">{{Auth::user()->bio}}</p>
					<div class="col-12 social2">
						<ul class="row">
							
							@if(!empty(Auth::user()->instagram))
						
							<li class="col-12">
								<a  href="{{Auth::user()->instagram}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-instagram.png')}}"><div><p><b>Instagram</b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->twitter))
							<li class="col-12">
								<a type="twitter" href="" target="_blank">
									<img src="{{url('frontend/assets/imgs/social-network-twitter.png')}}"><div><p><b>Twitter</b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->facebook))
							<li class="col-12">
								<a  href="{{Auth::user()->facebook}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-facebook.png')}}"><div><p><b>Facebook</b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->linkedin))
							<li class="col-12">
								<a href="{{Auth::user()->linkedin}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-linkedin.png')}}"><div><p><b>Linked In</b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->whatsapp))
							<li class="col-12">
								<a  href="{{Auth::user()->whatsapp}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-whatsapp.png')}}"><div><p><b> Whatsapp </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->youtube))
							<li class="col-12">
								<a  href="{{Auth::user()->youtube}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-youtube.png')}}"><div><p><b> Youtube </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->paypal))
							<li class="col-12">
								<a href="{{Auth::user()->paypal}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-paypal.png')}}"><div><p><b> Paypal </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->venmo))
							<li class="col-12">
								<a href="{{Auth::user()->venmo}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-venmo.png')}}"><div><p><b> Venmo </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->pinterest))
							<li class="col-12">
								<a href="{{Auth::user()->pinterest}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-pinterest.png')}}"><div><p><b> Pinterest </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->snapchat))
							<li class="col-12">
								<a  href="{{Auth::user()->snapchat}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-snapchat.png')}}"><div><p><b> Snapchat </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->soundcloud))
							<li class="col-12">
								<a  href="{{Auth::user()->soundcloud}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-soundcloud.png')}}"><div><p><b> Soundcloud </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->applemusic))
							<li class="col-12">
								<a href="{{Auth::user()->applemusic}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-applemusic.png')}}"><div><p><b> Apple Music </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->spotify))
							<li class="col-12">
								<a  href="{{Auth::user()->spotify}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-spotify.png')}}"><div><p><b>  Spotify </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->website))
							<li class="col-12">
								<a  href="{{Auth::user()->website}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-website.png')}}"><div><p><b>Website </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->custom_link))
							<li class="col-12">
								<a  href="{{Auth::user()->custom_link}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-link.png')}}"><div><p><b>Network Link </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->s_email))
							<li class="col-12">
								<a href="{{Auth::user()->s_email}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-s_email.png')}}"><div><p><b> Email </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->phone))
							<li class="col-12">
								<a href="{{Auth::user()->phone}}" target="_blank"><img src="{{url('frontend/assets/imgs/social-network-phone.png')}}"><div><p><b>Phone </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif
							@if(!empty(Auth::user()->address))
							<li class="col-12">
								<a  href="#" target="_blank"><img src="{{url('frontend/assets/imgs/map.png')}}"><div><p><b>Address </b></p><p><span class="clicksSoc">0</span> Clicks</p></div>
								</a>
							</li>
							@endif

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="installPwa" id="divIos">
		<span class="cls">
			<i class="fal fa-times"></i>
		</span>
		<div class="c1">
			<img src="{{url('frontend/assets/imgs/blue-logo.png')}}" class="img-fluid">
		</div>
		<div class="c2">
			<p>Install this app in your.</p>
			<p>iphone: tap <img src="{{url('frontend/assets/imgs/ios-share.svg')}}"> and then</p>
			<p><b>Add to Home Screen.</b></p>
		</div>
	</div>
	<div class="installPwa" id="divAndroid">
		<span class="cls">
			<i class="fal fa-times"></i>
		</span>
		<div class="c1">
			<img src="{{url('frontend/assets/imgs/blue-logo.png')}}" class="img-fluid">
		</div>
		<div class="c2">
			<p>{{Auth::user()->name}}</p>
			<p>{{Auth::user()->bio}}</p>
		</div>
	</div>
	<div class="pwrd text-center">
		<!-- <a class="buyNow"> -->
		<a href="http://bit.ly/2Sx5GCH">
			&copy; Powered by <span>Example</span>
		</a>
	</div></body>
	<script src="{{url('frontend/assets/js/jquery-1.12.4.js')}}"></script>
	<script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('frontend/assets/js/script.js')}}"></script>
	<!-- Load inline external files -->
	<script type="text/javascript" src="{{url('frontend/assets/js/jquery-ui.js')}}" class="aScriptFile"></script>
	<script type="text/javascript" src="{{url('frontend/assets/js/jquery.ui.touch-punch.js')}}" class="aScriptFile"></script>
	<script type="text/javascript" src="{{url('frontend/assets/js/auto-type.js')}}" class="aScriptFile"></script>
	<script type="text/javascript" src="{{url('frontend/assets/js/install.js')}}" class="aScriptFile"></script>
	<!-- Load inline external files; -->
<!-- Load inline script; -->
</body>
</html>