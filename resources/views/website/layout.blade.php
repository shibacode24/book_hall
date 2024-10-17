<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Index</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.png') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" id="colors">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
	
		 <script src="{{ asset('public/scripts/cities.js') }}"></script>
</head>



<style>
    body {
        font-family: Arial, sans-serif;
    }

    .error-msg {
        color: red;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        z-index: 999;
        height: 60%;
        width: 80%
    }

    .overlay {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 998;
    }

    .popup1 {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        z-index: 999;
        height: 80%;
        width: 100%
    }

    .overlay1 {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 998;
    }

    @media (max-width: 991px) {
        .mt {
            margin-top: 34% !important;
        }

        .mt1 {
            margin-top: 3% !important;
        }
    }

    .slider,
    .slider>div {
        /* Images default to Center Center. Maybe try 'center top'? */
        background-position: center center;
        display: block;
        width: 100%;
        height: 500px;
        /* height: 100vh; */
        /* If you want fullscreen */
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #000;
        overflow: hidden;
        -moz-transition: transform .4s;
        -o-transition: transform .4s;
        -webkit-transition: transform .4s;
        transition: transform .4s;
    }

    .slider>div {
        position: absolute;
    }

    .slider>i {
        color: #5bbd72;
        position: absolute;
        font-size: 60px;
        margin: 20px;
        top: 40%;
        text-shadow: 0 10px 2px #223422;
        transition: .3s;
        width: 30px;
        padding: 10px 13px;
        background: #fff;
        background: rgba(255, 255, 255, .3);
        cursor: pointer;
        line-height: 0;
        box-sizing: content-box;
        border-radius: 0px;
        z-index: 4;
    }

    .slider>i svg {
        margin-top: 3px;
    }

    .slider>.left {
        left: -100px;
    }

    .slider>.right {
        right: -100px;
    }

    .slider:hover>.left {
        left: 0;
    }

    .slider:hover>.right {
        right: 0;
    }

    .slider>i:hover {
        background: #fff;
        background: rgba(255, 255, 255, .8);
        transform: translateX(-2px);
    }

    .slider>i.right:hover {
        transform: translateX(2px);
    }

    .slider>i.right:active,
    .slider>i.left:active {
        transform: translateY(1px);
    }

    .slider:hover>div {
        transform: scale(1.01);
    }

    .hoverZoomOff:hover>div {
        transform: scale(1);
    }

    /* The Dots */
    .slider>ul {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 4;
        padding: 0;
        margin: 0;
        transform: translateX(-50%);
    }

    .slider>ul>li {
        padding: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        list-style: none;
        float: left;
        margin: 10px 10px 0;
        cursor: pointer;
        border: 1px solid #fff;
        -moz-transition: .3s;
        -o-transition: .3s;
        -webkit-transition: .3s;
        transition: .3s;
    }

    .slider>ul>.showli {
        background-color: #fc0202;
        -moz-animation: boing .5s forwards;
        -o-animation: boing .5s forwards;
        -webkit-animation: boing .5s forwards;
        animation: boing .5s forwards;
    }

    .slider>ul>li:hover {
        background-color: #fc0202;
    }

    .slider>.show {
        z-index: 1;
    }

    .hideDots>ul {
        display: none;
    }

    .showArrows>.left {
        left: 0;
    }

    .showArrows>.right {
        right: 0;
    }

    .titleBar {
        z-index: 2;
        display: inline-block;
        background: rgba(0, 0, 0, .5);
        position: absolute;
        width: 100%;
        bottom: 0;
        transform: translateY(100%);
        padding: 20px 30px;
        transition: .3s;
        color: #fff;
    }

    .titleBar * {
        transform: translate(-20px, 30px);
        transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
        opacity: 0;
    }

    .titleBarTop .titleBar * {
        transform: translate(-20px, -30px);
    }

    .slider:hover .titleBar,
    .slider:hover .titleBar * {
        transform: translate(0);
        opacity: 1;
    }

    .titleBarTop .titleBar {
        top: 0;
        bottom: initial;
        transform: translateY(-100%);
    }

    .slider>div span {
        display: block;
        background: rgba(0, 0, 0, .5);
        position: absolute;
        bottom: 0;
        color: #fff;
        text-align: center;
        padding: 0;
        width: 100%;
    }

    .swal2-popup.swal2-toast .swal2-title {
        font-size: 1.3em !important;
    }

    @keyframes boing {
        0% {
            transform: scale(1.2);
        }

        40% {
            transform: scale(.6);
        }

        60% {
            transform: scale(1.2);
        }

        80% {
            transform: scale(.8);
        }

        100% {
            transform: scale(1);
        }
    }

    /* -------------------------------------- */

    #slider2 {
        max-width: 30%;
        margin-right: 20px;
    }

    .row2Wrap {
        display: flex;
    }

    .content {
        padding: 50px;
        margin-bottom: 100px;
    }

    html {
        height: 100%;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    h1,
    h2,
    h3 {
        font-family: 'Crimson Text', sans-serif;
        font-weight: 100;
    }


    .content {
        padding: 10px 15vw;
    }

    .otp-input {
        width: 1em;
        text-align: center;
        margin: 0 15px;
        padding: 5px;
        font-size: 16px;

        /*	     width: 40px;
    border: none;
    border-bottom: 3px solid rgba(0, 0, 0, 0.5);
    margin: 0 10px;
    text-align: center;
    font-size: 36px;
    cursor: not-allowed;
    pointer-events: none;*/
    }

    /* Optional: Style for better visibility */
    .otp-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 7vh;
    }


    .badge {
        display: block;
        position: absolute;
        top: -14px;
        right: -30px;
        line-height: 16px;
        height: 16px;
        padding: 0 8px;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        background-color: red;
        font-family: Arial, sans-serif;
        border: 1px solid;
        border-radius: 10px;
        -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.08);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.08);
    }


    .topnav {
        overflow: hidden;
    }

    .topnav a {
        padding: 14px 16px;
        border-bottom: 1.5px solid transparent;
    }

    .topnav a:hover {
        border-bottom: 1.5px solid red;
    }

    .topnav a.active {
        border-bottom: 1.5px solid red;
    }




    /* Active date hover color */
    .calendar-table .available:hover,
    .calendar-table .available.active {
        background-color: #5cb85c;
        /* Green color */
        color: #fff;
        /* Text color */
        cursor: pointer;
    }

    /* Disabled date hover color */
    .calendar-table .disabled:hover {
        background-color: #beb1b1;
        /* Gray color */
        color: #555;
        /* Text color */
        cursor: not-allowed;
    }

    .daterangepicker td.disabled,
    .daterangepicker option.disabled {
        background-color: #cec9c9 !important;
    }

    .close11-button {
        color: #ff2222;
        background-color: #fff;
        border-radius: 50px;
        top: 20px;
        right: 20px;
        width: 34px;
        height: 34px;
    }

    .inputs {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 30px;
    }

    .inputOtp {
        width: 30px;
        height: 30px;
        margin: 0 4px;
        border: none;
        border-bottom: 2px solid #483d8b;
        background: transparent;
        font-size: 18px;
        text-align: center;
    }

    .inputOtp:focus {
        border-bottom: 3px solid orange;
        outline: none;
    }
	
	.radio-group {
    display: flex;
    flex-direction: row;
}

.custom-radio {
    position: relative;
    display: inline-flex;
    align-items: center;
    margin-bottom: 10px;
    cursor: pointer;
}

.custom-radio input[type="radio"] {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.custom-radio .radio-btn {
    position: relative;
    width: 20px;
    height: 20px;
    border: 2px solid #ccc;
    border-radius: 50%;
    background-color: #fff;
    margin-right: 10px;
    transition: background-color 0.3s, border-color 0.3s;
}

.custom-radio input[type="radio"]:checked + .radio-btn {
    background-color: red; /* Change to desired color */
    border-color: red; /* Change to desired color */
}

.custom-radio input[type="radio"]:checked + .radio-btn::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #fff; /* Inner dot color */
    transform: translate(-50%, -50%);
}
	
	/* Hide log out on desktop */
.logout-btn {
    display: none;
}
	
	@media (max-width: 768px) {
 .logout-btn1 {
        display: none; /* Hide on mobile view */
    }
	}
	
	
	/* Hover Button with Red Effect */
	  .button_new {
  background-color: #fff; /* Green */
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
border-radius:10px;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 1.3px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
</style>


<body class="header-one">

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="utf-preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper -->
    <div id="main_wrapper">

        <header id="header_part" class="fullwidth">
            <div id="header">
                <div class="container">
                    <div class="utf_left_side">
                        <div id="logo">
                            <a href="{{ route('website_index') }}"><img
                                    src="{{ asset('public/images/weeding-logo.png') }}"></a>
                        </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger utfbutton_collapse" type="button">
                                <span class="utf_inner_button_box">
                                    <span class="utf_inner_section"></span>
                                </span>
                            </button>
                        </div>
                        <nav id="navigation" class=" topnav">
                            <ul id="responsive">
                                <li><a href="{{ route('website_index') }}">Home</a></li>
								  @if (Auth::check())
                                    <li><a href="{{route('history')}}">History</a></li>
                                @endif
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('how-it-work') }}">How It Works</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('vendors') }}">Vendors</a></li>
								  @if (Auth::check())
                              <li class="logout-btn"><a href="{{ route('logout') }}" style="border-bottom:none">Log Out &nbsp;<i class="fa fa-power-off" aria-hidden="true" style="color:red; font-size:15px;"></i>
								  </a></li>
								                                @endif
                            </ul>
                        </nav>
						
						
                       
                        <div class="clearfix"></div>
                    </div>
                    <div class="utf_right_side">
                        <div class="header_widget">
                            @if (!Auth::check())
                                <a href="{{ route('business_listing_login') }}" class="button3 button_new border with-icon"
                                   style="padding : 2px 12px; margin: 0px 5px; border-radius:5px;">Free Business
                                    Listing</a>
                            @endif

                          @if (Auth::check())
                            @if (Auth::user()->photo)
                                <a href="{{ route('user_profile') }}" style="color:red;">
                                    <img src="{{ asset('public/images/photos/' . Auth::user()->photo) }}" style="width:30px; height:30px;"> &nbsp;{{ Auth::user()->name }}
                                </a>
                            @elseif (Auth::user()->gender == 'Female')
                                <a href="{{ route('user_profile') }}" style="color:red;">
                                    <img src="{{ asset('public/images/female.png') }}" style="width:30px; height:30px;"> &nbsp;{{ Auth::user()->name }}
                                </a>
                            @else
                                <a href="{{ route('user_profile') }}" style="color:red;">
                                    <img src="{{ asset('public/images/male.png') }}" style="width:30px; height:30px;"> &nbsp;{{ Auth::user()->name }}
                                </a>
                            @endif
                        @endif
                        



                            @if (Auth::check())
                                <a href="{{ route('logout') }}" class="logout-btn1"><i class="fa fa-power-off" aria-hidden="true"
                                        style="color:red; padding-left:20px;"></i>
                                </a>
                            @else
                                <span id="sign_in">
                                    <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i
                                            class="fa fa-sign-in"></i>
                                        Sign In</a>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                        <div class="small_dialog_header" style="padding-top:5px; padding-bottom:5px;">
                            <p style="color:#fff;">Welcome</p>
                            <div align="center">
                                <img src="{{ asset('public/images/weeding-logo1.png') }}"
                                    style="width:60%; height:60%;" align="center">
                                <!--<h3 id="header_change">Sign In</h3>-->
                            </div>
                        </div>
                        <div class="utf_signin_form style_one">
                            <span class="pop_up_div">
                                <!--<ul class="utf_tabs_nav">
                                <li id="login_id"><a href="#tab1">Log In</a></li>
                                <li id="reg_id"><a href="#tab2">Register</a></li>
                            </ul>-->
                            </span>
                            <div class="tab_container alt">
                                <span class="pop_up_div" id="login_page">
                                    <div class="tab_content" id="tab1" style="display:none;">
                                        <form method="post" id="loginForm" class="login" action="{{ route('login') }}">
                                            @csrf
											  <div id="errorMsg" style="display: none; color: red;"></div>
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="username">
                                                    <input type="text" class="input-text" name="email"
                                                        id="username" value="" placeholder="Email" />
                                                </label>
                                            </p>
                                            <p class="utf_row_form utf_form_wide_block"
                                                style="margin-bottom:0px; padding-bottom:0px;">
                                                <label for="password">
                                                    <input class="input-text" type="password" name="password"
                                                        id="password" placeholder="Password" />
                                                </label>
                                            </p>
                                            <div class="utf_row_form utf_form_wide_block form_forgot_part"
                                                style="margin-bottom:5px;"> <span class="lost_password fl_left">
                                                    <a href="javascript:void(0);" onclick="openSmallPopup()"
                                                        style="font-size:12px; color:red;">Forgot
                                                        Password?</a> </span>
                                                <div class="checkboxes fl_right">
                                                    <input id="remember-me" type="checkbox" name="check">
                                                </div>
                                            </div>
                                            <div class="utf_row_form">
                                                <input type="submit" class="button border margin-top-0"
                                                    style="background-color:#fff; border-color:red; color:red; border:1px solid;" />
                                            </div>

                                            <div class="utf_row_form" style="margin-top:15px;" align="center">
                                                <!-- <input type="submit" class="button border margin-top-5" style="background-color:#fff; color:red; border:1px solid; border-color:red;" />-->
                                                <a href="javascript:void(0);" onclick="openSmallPopup()"
                                                    style="font-size:15px;">Don't have an Account?</a>
                                                <a href="javascript:void(0);" onclick="openSmallPopupreg()"><span
                                                        style="color:red;"> &nbsp;<b>Free sign up</b></span></a>
                                            </div>

                                        </form>
                                    </div>
                                </span>
                                <span id="tab2" class="pop_up_div" style="display:none;">
                                    <div class="small-popup">

                                        <form id="reg_form" class="utf_add_comment"
                                            action="{{ route('storeRegistration') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                	 <div class="radio-group">
                                                <div class="col-md-4">
                                              <!--      <input type="radio" name="user_type" checked
                                                        value="user">-->
                                                       <label class="custom-radio">
            <input class="check-a1" type="radio" name="user_type" checked value="user">
            <span class="radio-btn"></span>
           User
        </label>
                                                </div>
                                                <div class="col-md-4">
                                                   <!-- <input class="check-a1" type="radio" name="user_type"
                                                        value="business">-->
                                                     <label class="custom-radio">
            <input class="check-a1" type="radio" name="user_type"
                                                        value="business">
            <span class="radio-btn"></span>
            Business
        </label>
                                                </div>
												</div>
                                            </div>

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="name">
                                                    <input type="text" class="input-text" name="name"
                                                        id="name" value="" placeholder="Name" required>
                                                </label>
                                            </p>

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="email">
                                                    <input type="text" class="input-text" name="email"
                                                        id="email" value="" placeholder="Email" required>
                                                </label>
                                            </p>

                                            <p id="gender-section" class="utf_row_form utf_form_wide_block">
                                                <label for="gender">
                                                    <select title="Select Gender" name="gender"
                                                        style="padding-left: 15px;padding-bottom:9px;">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </label>
                                            </p>

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="contact-no">
                                                    <input class="input-text" type="text" name="contact_no"
                                                        id="contact_no" placeholder="Contact No" maxlength="10"
                                                        required />
                                                </label>
                                            </p>
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="password1">
                                                    <input class="input-text" type="password" name="password"
                                                        id="password1" placeholder="Password" required />
                                                </label>
                                            </p>
                                            <button type="button" class="button border fw margin-top-10"
                                                onclick="validateAndSendOTP()"
                                                style="background-color:#fff; border-color:red; color:red; border:1px solid;">Verify
                                                OTP</button>
                                            {{-- <button type="button" onclick="togglePopup()"
                                        class="button border fw margin-top-10" name="register"
                                        value="Register"> OTP</button> --}}
                                        </form>



                                    </div>
                                </span>
                                <div class="overlay" id="mainOverlay"></div>

                                <span id="mobile_no" class="pop_up_div" style="display:none;">
                                    <div class="small-popup" id="smallPopup1">
                                        <span class="close-mark" onclick="closeSmallPopup1()"><img
                                                src="{{ asset('public/images/cross.png') }}" style="height:25px;"
                                                alt=""></span>
                                        <form method="post" class="register" id="otpForm"
                                            action="{{ route('send_otp') }}">
                                            @csrf
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="contact">
                                                    <input type="text" class="input-text" name="contact"
                                                        id="contact" value=""
                                                        placeholder="Enter Phone Number" maxlength="10" />
                                                </label>
                                            </p>


                                            <input type="button" class="button border fw" onclick="sendOtp()"
                                                name="register" value="Next"
                                                style="background-color:#fff; border-color:red; color:red; border:1px solid;" />


                                        </form>

                                    </div>
                                </span>

                                {{-- forgot password --}}

                                <span id="reset_otp" class="pop_up_div" style="display:none;">
                                    <div class="small-popup" id="smallPopup2">
                                        <span class="close-mark" onclick="closeSmallPopup2()"><img
                                                src="{{ asset('public/images/cross.png') }}" style="height:25px;"
                                                alt=""></span>
                                        <div class="otp-container" style="margin-top:15%;">
                                            {{-- <input id="otpInput1" class="otp-input" type="text" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                                            <input id="otpInput2" class="otp-input" type="text" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                                            <input id="otpInput3" class="otp-input" type="text" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                                            <input id="otpInput4" class="otp-input" type="text" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" /> --}}
                                            <section id="otp_type">
                                                <div class="inputs">
                                                    <input type="text" inputmode="numeric" id="otpInput1"
                                                        maxlength="1" class="inputOtp"
                                                        style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                                                    <input type="text" inputmode="numeric" id="otpInput2"
                                                        maxlength="1" class="inputOtp"
                                                        style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                                                    <input type="text" inputmode="numeric" id="otpInput3"
                                                        maxlength="1" class="inputOtp"
                                                        style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                                                    <input type="text" inputmode="numeric" id="otpInput4"
                                                        maxlength="1" class="inputOtp"
                                                        style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                                                </div>
                                            </section>

                                        </div>
                                        <p style="text-align: center;"></p>
                                        {{-- <input type="button" class="button border fw margin-top-10" onclick="openSmallPopup3()"
								name="register" value="Next" /> --}}
                                        <input type="button" class="button border fw margin-top-10"
                                            onclick="verifyOtpforforgotpass()" name="register" value="Next"
                                            style="background-color:#fff; border-color:red; color:red; border:1px solid;" />

                                    </div>
                                </span>
                                <!-- Small Popup container 3 -->

                                <span id="update_password" class="pop_up_div" style="display:none;">
                                    <div class="small-popup" id="smallPopup3">
                                        <span class="close-mark" onclick="closeSmallPopup3()"><img
                                                src="{{ asset('public/images/cross.png') }}" style="height:25px;"
                                                alt=""></span>
                                        <form method="post" action="{{ route('update_password') }}"
                                            class="register" onsubmit="submitNewPasswordForm(); return false;">
                                            @csrf

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="newPassword" style="margin-top:10%;">
                                                    <input type="text" class="input-text" name="newPassword"
                                                        id="newPassword" value="" placeholder="New Password"
                                                        required />
                                                </label>
                                            </p>
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="confirmPassword">
                                                    <input type="password" class="input-text" name="confirmPassword"
                                                        id="confirmPassword" value=""
                                                        placeholder="Confirm Password" required />
                                                </label>
                                            </p>

                                            <div style="text-align: center;">
                                                <input type="submit" class="button border fw margin-top-10 button-1"
                                                    name="register" style="" value="Submit" />
                                            </div>
                                        </form>
                                        <!-- Add any content or buttons for the third small popup -->
                                    </div>
                                </span>
                                <div class="overlay" id="overlay"></div>
                                <div class="popup" id="popup">
                                    {{-- <button style="width: 20px;" onclick="togglePopup1()"
                                  style="text-align:right;"><i class="fa fa-times" aria-hidden="true"
                                      style="color: #000; "></i></button> --}}
                                    {{-- <button class="close11-button" style="width: 20px; text-align: right;" onclick="closePopup()">
                                        <i class="fa fa-times" aria-hidden="true" style="color: #000;"></i>
                                    </button> --}}
                                    <button class="close11-button" style="text-align: center;" onclick="closePopup()"
                                        align="right">
                                        <i class="fa fa-times" aria-hidden="true" style="color: #ff0202;"></i>
                                    </button>
                                    <div class="verification-code">
                                        <label class="control-label" style="color:red; font-size: 24px;">Verification
                                            Code</label>
                                        <div class="verification-code--inputs">
                                            <div class="inputs">
                                                <input type="text" inputmode="numeric" id="otp1"
                                                    maxlength="1" class="inputOtp" value=""
                                                    style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                                                <input type="text" inputmode="numeric" id="otp2"
                                                    maxlength="1" class="inputOtp" value=""
                                                    style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;"/>
                                                <input type="text" inputmode="numeric" id="otp3"
                                                    maxlength="1" class="inputOtp" value=""
                                                    style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                                                <input type="text" inputmode="numeric" id="otp4"
                                                    maxlength="1" class="inputOtp" value=""
                                                    style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                                            </div>
                                            {{-- <input type="text" id="otp1" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                                            <input type="text" id="otp2" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                                            <input type="text" id="otp3" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                                            <input type="text" id="otp4" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" /> --}}

                                        </div>
                                        <button type="submit" class="button border fw margin-top-30" name="register"
                                            onclick="verifyOTP()" value="Register">Verify </button>
                                        <input type="hidden" id="verificationCode" />
                                    </div>
                                </div>

                                <div class="overlay1" id="overlay"></div>

                                <div class="popup1" id="popup1">
                                    <button style="width: 20px;" onclick="togglePopup1()"
                                        style="text-align:right;"><i class="fa fa-times" aria-hidden="true"
                                            style="color: #000; "></i></button>
                                    <form method="post" class="register">
                                        <label class="control-label" style="color:red; font-size: 24px;"
                                            align="center">Forget Password</label>

                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="username2">
                                                <input type="text" class="input-text" name="username"
                                                    id="username2" value="" placeholder="New Password" />
                                            </label>
                                        </p>
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="email2">
                                                <input type="text" class="input-text" name="email"
                                                    id="email2" value="" placeholder="Confirm Password" />
                                            </label>
                                        </p>

                                        <input type="submit" class="button border fw margin-top-10" name="register"
                                            value="Submit" />
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </header>


        {{-- </header> --}}

        @yield('content')


	<div id="footer" class="footer_sticky_part">
    <div class="container">
      <div class="row">
		<div class="col-md-3 col-sm-12 col-xs-12"> 
           <div class="utf_sidebar_textbox">
                            <img src="{{ asset('public/images/weeding-logo1.png') }}" width="200" height="80">
           </div>
			
  <ul class="utf_social_icon rounded " style="margin-bottom:25px;">
                           <a href="https://www.linkedin.com/in/bookmy-weddinghall-7bab57307?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                    target="_blank" style="margin-right: 10px"><img
                                        src="{{ asset('public/images/linkedin.png') }}"
                                        style="height:25px;width:25px;margin-top:10px;margin-right:0px;"></a>
                           <a href="https://www.instagram.com/bookmyweddinghall?utm_source=qr&igsh=eGdkejVuYmlxaHF4"
                                    target="_blank" style="margin-right: 10px"><img
                                        src="{{ asset('public/images/instagram.png') }}"
                                        style="height:25px;width:25px;margin-top:10px;margin-right:0px;"></a>
                            <a href="https://youtube.com/@bookmyweddinghall?si=TvzTGa0oBUmOC1Za"
                                    target="_blank" style="margin-right: 10px"><img
                                        src="{{ asset('public/images/youtube.png') }}"
                                        style="height:25px;width:25px;margin-top:10px;margin-right:0px;"></a>
                            <a href="https://www.threads.net/@bookmyweddinghall" target="_blank" style="margin-right: 10px"><img
                                        src="{{ asset('public/images/thread.png') }}"
                                        style="height:25px;width:25px;margin-top:10px"></a>
                            <a href="https://x.com/BookMyWedHall?t=z4Aa4hOLlcTyYKEa7xUBKw&s=08"
                                    target="_blank" style="margin-right: 10px"><img src="{{ asset('public/images/twitter.png') }}"
                                        style="height:25px;width:25px; margin-top:10px;"></a>
								</ul>

        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
           <h4>Business Services</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Book Wedding Hall</a></li>
                            <li><a href="{{ route('business_listing_login') }}">Free Wedding Hall Listing</a></li>
                            <li><a href="{{ route('vendor_registration') }}">Vendor Registration</a></li>

                        </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12">
          <h4>Know More</h4>
                        <ul class="social_footer_link">
                            <li><a href="{{ route('how-it-work') }}">How It Works</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                        </ul>
        </div>
        <div class="col-md-4 col-sm-3 col-xs-12">
        <h4>Get In Touch</h4>
                        <ul>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"
                                    style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;<a
                                    href="mailto:bookmyweddinghall@gmail.com"> bookmyweddinghall@gmail.com</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"
                                    style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;<a href="tel:+919766658802">
                                    +919766658802</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true" style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;
                                <a href="tel:+919730158802">+919730158802</a>
                            </li>
                        </ul>
        </div>
          
      </div>
		
       <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="footer_copyright_part"
                            style="text-align:left; padding-top:5px;  padding-bottom:5px; margin-top:0px;"> <img
                                src="{{ asset('public/images/zhep-logo.png') }}" style="width:8%; height:8%;">
                            <span style="font-size:13px;"> &nbsp;© 2024 BookMyWeddingHall.</span>
                            <!-- <div class="row">
                             <div class="col-md-3" align="right">
                                 <img src="{{ asset('public/images/zhep.png') }}" >
                             </div>
                             <div class="col-md-9" align="left">
                                   <p style="font-size:13px; padding-right:20px;"> © 2024 BookMyWeddingHall.</p>
                             </div>
                        </div>-->

                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="footer_copyright_part"
                            style="text-align:left !important; padding-top:5px;  padding-bottom:5px; margin-top:0px;">
                            <p style="font-size:13px;"><a href="{{ route('terms') }}">Terms & Condition</a> | <a
                                    href="{{ route('cancellation') }}">Refund & Cancellation</a></p>
                        </div>
                    </div>
                </div>
		
    </div>
  </div>
	
        <div id="bottom_backto_top"><a href="#"></a></div>
    </div>

    <!-- Scripts -->
	<script language="javascript">print_state("sts");</script>
	
    <script src="{{ asset('public/scripts/jquery-3.4.1.min.js') }}"></script>
    <script src="
        https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js
        "></script>
    <script src="{{ asset('public/scripts/chosen.min.js') }}"></script>
    <script src="{{ asset('public/scripts/slick.min.js') }}"></script>
    <script src="{{ asset('public/scripts/rangeslider.min.js') }}"></script>
    <script src="{{ asset('public/scripts/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/scripts/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/scripts/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('public/scripts/mmenu.js') }}"></script>
    <script src="{{ asset('public/scripts/tooltips.min.js') }}"></script>
    <script src="{{ asset('public/scripts/color_switcher.js') }}"></script>
    <script src="{{ asset('public/scripts/jquery_custom.js') }}"></script>
    <script src="{{ asset('public/scripts/typed.js') }}"></script>
    <script src="{{ asset('public/scripts/daterangepicker.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @include('sweetalert')

<script>
        $('#loginForm').on('submit', function(e) {
            e.preventDefault(); // Prevent form submission
    
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status === 'success') {
                        window.location.href = response.redirect_url;
                    } else if (response.status === 'error') {
                        $('#errorMsg').text(response.message).show();
                    }
                },
                error: function() {
                    $('#errorMsg').text('An error occurred. Please try again.').show();
                }
            });
        });
    </script>
    <script>
        function otp_type() {
            let inputs = Array.from(document.getElementsByClassName("inputOtp"));
            inputs.forEach((f) =>
                f.addEventListener("keyup", (e) => {
                    let val = e.target.value;
                    const target = e.target;
                    const key = e.key.toLowerCase();

                    if (key == "backspace" || key == "delete") {
                        target.value = "";
                        const prev = target.previousElementSibling;
                        if (prev) {
                            prev.focus();
                        }
                        return;
                    }
                    if (/[0-9]/.test(val)) {
                        let next = e.target.nextElementSibling;
                        if (next) next.focus();
                    } else {
                        alert("Invalid Input");
                        e.target.value = "";
                    }
                })
            );
        }
        otp_type();
    </script>

    <script>
        $(document).ready(function() {
            // Function to change placeholder based on selection
            $('.check-a1').on('change', function() {
                var selectedValue = $(this).val();

                if (selectedValue === 'business') {
                    $('#name').attr('placeholder', 'Business Name').val('');
                    $('#email').val('');
                    $('#contact_no').val('');
                    $('#password1').val('');
					
					$('#gender-section').hide();
					
                } else if (selectedValue === 'user') {
                    $('#name').attr('placeholder', 'Name').val('');
                    $('#email').val('');
                    $('#contact_no').val('');
                    $('#password1').val('');
					
					$('#gender-section').show();
                }
            });
            $("#reg_id").on('click', function() {
                $("#tab1").hide();
                $("#tab2").show();
            });

            $("#login_id").on('click', function() {
                $("#tab2").hide();
                $("#tab1").show();
            });
        });
    </script>
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["Wedding Hall"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
        });
    </script>

    <script>
        function closePopup() {
            var popup = document.getElementById('popup'); // Assuming the ID of your popup/modal is 'popup'
            popup.style.display = 'none';
            var overlay = document.getElementById('overlay'); // Assuming the ID of your overlay is 'overlay'
            overlay.style.display = 'none';
        }
    </script>

    <script>
        $(document).ready(function() {
            // Form validation
            $('#reg_form').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    contact_no: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    password: {
                        required: true,
                        minlength: 4
                    }
                },
                messages: {
                    name: {
                        required: "<span class='error-msg'>Please enter your name</span>"
                    },
                    email: {
                        required: "<span class='error-msg'>Please enter your email</span>",
                        email: "<span class='error-msg'>Please enter a valid email address</span>"
                    },
                    contact_no: {
                        required: "<span class='error-msg'>Please enter your contact number</span>",
                        digits: "<span class='error-msg'>Please enter a valid contact number</span>",
                        minlength: "<span class='error-msg'>Contact number must be 10 digits long</span>",
                        maxlength: "<span class='error-msg'>Contact number must be 10 digits long</span>"
                    },
                    password: {
                        required: "<span class='error-msg'>Please enter a password</span>",
                        minlength: "<span class='error-msg'>Password must be at least 4 characters long</span>"
                    }
                }
            });
        });

        function validateAndSendOTP() {
            console.log(1);
            if ($('#reg_form').valid()) {
                var email = $('#email').val();
                var contact_no = $('#contact_no').val();

                $.ajax({
                    url: '{{ route('check.unique') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        email: email,
                        contact_no: contact_no
                    },
                    success: function(response) {
                        if (response.exists) {
                            if (response.email_exists) {
                                alert('Email already exists');

                            }
                            if (response.contact_no_exists) {
                                alert('Contact number already exists');
                            }
                        } else {
                            togglePopup();
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                        alert('An error occurred while checking the data.');
                    }
                });
            } else {
                console.log('Form validation failed');
            }
        }

        let otp;

        function togglePopup() {

            // Get the contact number from the input field
            var contactNumber = $('#contact_no').val();
            console.log(contactNumber);
            // AJAX request to send OTP
            $.ajax({
                url: '{{ route('send_mobile_verify_otp') }}',
                type: 'get',
                data: {
                    contact_no: contactNumber
                },
                success: function(response) {
                    // Handle success
                    console.log(response);
                    otp = response.otp;
                    // Show the popup/modal
                    $('#popup').show();
                    $('#overlay').show();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
        }
    </script>


    <script>
        function verifyOTP() {
            // Get the entered OTP
            var otp1 = $('#otp1').val();
            var otp2 = $('#otp2').val();
            var otp3 = $('#otp3').val();
            var otp4 = $('#otp4').val();
            console.log(otp);

            var enteredOTP = otp1 + otp2 + otp3 + otp4;
            if (enteredOTP == otp) {
                $('#reg_form').submit();
            } else {
                console.log('Invalid OTP');
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top",
                    showConfirmButton: false,
                    timer: 6000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: 'Invalid OTP.'
                });
                alert('Invalid OTP');

            }

        }
    </script>


    <script>
        (function($) {
            "use strict";
            $.fn.sliderResponsive = function(settings) {

                var set = $.extend({
                        slidePause: 5000,
                        fadeSpeed: 800,
                        autoPlay: "on",
                        showArrows: "off",
                        hideDots: "off",
                        hoverZoom: "on",
                        titleBarTop: "off"
                    },
                    settings
                );

                var $slider = $(this);
                var size = $slider.find("> div").length; //number of slides
                var position = 0; // current position of carousal
                var sliderIntervalID; // used to clear autoplay

                // Add a Dot for each slide
                $slider.append("<ul></ul>");
                $slider.find("> div").each(function() {
                    $slider.find("> ul").append('<li></li>');
                });

                // Put .show on the first Slide
                $slider.find("div:first-of-type").addClass("show");

                // Put .showLi on the first dot
                $slider.find("li:first-of-type").addClass("showli")

                //fadeout all items except .show
                $slider.find("> div").not(".show").fadeOut();

                // If Autoplay is set to 'on' than start it
                if (set.autoPlay === "on") {
                    startSlider();
                }

                // If showarrows is set to 'on' then don't hide them
                if (set.showArrows === "on") {
                    $slider.addClass('showArrows');
                }

                // If hideDots is set to 'on' then hide them
                if (set.hideDots === "on") {
                    $slider.addClass('hideDots');
                }

                // If hoverZoom is set to 'off' then stop it
                if (set.hoverZoom === "off") {
                    $slider.addClass('hoverZoomOff');
                }

                // If titleBarTop is set to 'on' then move it up
                if (set.titleBarTop === "on") {
                    $slider.addClass('titleBarTop');
                }

                // function to start auto play
                function startSlider() {
                    sliderIntervalID = setInterval(function() {
                        nextSlide();
                    }, set.slidePause);
                }

                // on mouseover stop the autoplay and clear interval
                $slider.mouseover(function() {
                    clearInterval(sliderIntervalID);
                });

                // on mouseout starts the autoplay by calling startSlider
                $slider.mouseout(function() {
                    startSlider();
                });

                //on right arrow click
                $slider.find("> .right").click(nextSlide)

                //on left arrow click
                $slider.find("> .left").click(prevSlide);

                // Go to next slide
                function nextSlide() {
                    position = $slider.find(".show").index() + 1;
                    if (position > size - 1) position = 0;
                    changeCarousel(position);
                }

                // Go to previous slide
                function prevSlide() {
                    position = $slider.find(".show").index() - 1;
                    if (position < 0) position = size - 1;
                    changeCarousel(position);
                }

                //when user clicks slider button
                $slider.find(" > ul > li").click(function() {
                    position = $(this).index();
                    changeCarousel($(this).index());
                });

                //this changes the image and button selection
                function changeCarousel() {
                    $slider.find(".show").removeClass("show").fadeOut();
                    $slider
                        .find("> div")
                        .eq(position)
                        .fadeIn(set.fadeSpeed)
                        .addClass("show");
                    // The Dots
                    $slider.find("> ul").find(".showli").removeClass("showli");
                    $slider.find("> ul > li").eq(position).addClass("showli");
                }

                return $slider;
            };
        })(jQuery);



        //////////////////////////////////////////////
        // Activate each slider - change options
        //////////////////////////////////////////////
        $(document).ready(function() {

            $("#slider1").sliderResponsive({
                // Using default everything
                // slidePause: 5000,
                // fadeSpeed: 800,
                // autoPlay: "on",
                // showArrows: "off", 
                // hideDots: "off", 
                // hoverZoom: "on", 
                // titleBarTop: "off"
            });

            $("#slider2").sliderResponsive({
                fadeSpeed: 300,
                autoPlay: "off",
                showArrows: "on",
                hideDots: "on"
            });

            $("#slider3").sliderResponsive({
                hoverZoom: "off",
                hideDots: "on"
            });

        });
    </script>


    {{-- <script>
        function togglePopup() {
            var popup = document.getElementById('popup');
            var overlay = document.getElementById('overlay');
            if (popup.style.display === 'block') {
                popup.style.display = 'none';
                overlay.style.display = 'none';
            } else {
                popup.style.display = 'block';
                overlay.style.display = 'block';
            }
        }
    </script> --}}

    <script>
        function togglePopup1() {
            var popup1 = document.getElementById('popup1');
            var overlay1 = document.getElementById('overlay1');
            if (popup1.style.display === 'block') {
                popup1.style.display = 'none';
                overlay1.style.display = 'none';
            } else {
                popup1.style.display = 'block';
                overlay1.style.display = 'block';
            }
        }
    </script>

    <script>
        //Code Verification
        var verificationCode = [];
        $(".verification-code input[type=text]").keyup(function(e) {

            // Get Input for Hidden Field
            $(".verification-code input[type=text]").each(function(i) {
                verificationCode[i] = $(".verification-code input[type=text]")[i].value;
                $('#verificationCode').val(Number(verificationCode.join('')));
                //console.log( $('#verificationCode').val() );
            });

            //console.log(event.key, event.which);

            if ($(this).val() > 0) {
                if (event.key == 1 || event.key == 2 || event.key == 3 || event.key == 4 || event.key == 5 || event
                    .key == 6 || event.key == 7 || event.key == 8 || event.key == 9 || event.key == 0) {
                    $(this).next().focus();
                }
            } else {
                if (event.key == 'Backspace') {
                    $(this).prev().focus();
                }
            }

        }); // keyup

        $('.verification-code input').on("paste", function(event, pastedValue) {
            console.log(event)
            $('#txt').val($content)
            console.log($content)
            //console.log(values)
        });

        // $editor.on('paste, keydown', function() {
        //     http: //jsfiddle.net/5bNx4/#run
        //         var $self = $(this);
        //     setTimeout(function() {
        //         var $content = $self.html();
        //         $clipboard.val($content);
        //     }, 100);
        // });
    </script>

    <script>
        // Function to open the main popup
        function openMainPopup() {
            document.getElementById('mainPopup').style.display = 'block';
            document.getElementById('mainOverlay').style.display = 'block';
        }

        // Function to close the main popup
        function closeMainPopup() {
            document.getElementById('mainPopup').style.display = 'none';
            document.getElementById('mainOverlay').style.display = 'none';
        }

        // Function to open the first small popup
        function openSmallPopup() {
            $(".pop_up_div").hide();
            $("#mobile_no").show();
			  $("#smallPopup1").show();
            $("#contact").val('');
            $("#header_change").text('Forget Password');

        }

        function opensiopensigningnin() {
            // console.log(1);
            $("#tab2").hide();
            $("#mobile_no").hide();
            $("#reset_otp").hide();
            $("#login_page").show();
            // $("#header_change").text('Forget Password');

        }

		 $(document).on('click', '.mfp-close', function() {
            console.log('close');
            // document.getElementById('smallPopup1').style.display = 'none';
            $('#login_page').show();
            $('#mobile_no').hide();
            $('#reset_otp').hide();
            $('#update_password').hide();
			$('#tab2').hide();

        })
		
        function openSmallPopupreg() {
            $(".pop_up_div").hide();
            $("#tab2").show();
			
			$("#reg_form")[0].reset();
            // $("#header_change").text('Forget Password');

        }


        // Function to close the first small popup
        function closeSmallPopup1() {
            document.getElementById('smallPopup1').style.display = 'none';
        }

        var typingTimer; // Timer identifier
        var doneTypingInterval = 1000; // Time in milliseconds (1 second)

        // On keyup, start the countdown
        $('#contact').on('keyup', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        // On keydown, clear the countdown
        $('#contact').on('keydown', function() {
            clearTimeout(typingTimer);
        });

        // Function to execute when typing is finished
        function doneTyping() {
            var mobile = $('#contact').val(); // Capture the mobile number
            console.log(mobile);
            $.ajax({
                url: "{{ route('check_mobile_exist') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    mobile: mobile
                },
                success: function(response) {
                    if (response.exists) {
                        // alert(response.data.error);
                        $('#mobileStatus').html('<span style="color:red;">Mobile number already exists</span>');
                    } else {
                        $('#mobileStatus').html('<span style="color:red;">Please Enter Number</span>');
                        // $("#tab2").show();
                        // $("#mobile_no").hide();
                        // $('#contact').val('');

                    }
                }
            });
        }

        //to send otp

        function sendOtp() {

            var contact = document.getElementById("contact").value;

            // Retrieve CSRF token from meta tags
            var token = document.querySelector('meta[name="csrf-token"]').content;

            // Make an AJAX request to check if the mobile number exists
            axios.post("{{ route('check_mobile_existence') }}", {
                    contact: contact,
                    _token: token
                })
                .then(function(response) {
                    if (response.data.exists) {
                        // Mobile number exists, proceed with OTP sending
                        sendOtpRequest(contact, token);
                        $(".pop_up_div").hide();
                        $("#reset_otp").show();
						$("#otpInput1").val('');
                        $("#otpInput2").val('');
                        $("#otpInput3").val('');
                        $("#otpInput4").val('');
                    } else {
                        // Mobile number does not exist, show an error
                        alert(response.data.error);

                        $("#mobile_no").show();
                        $("#reset_otp").hide();
                        $('#contact').val('');

                    }
                })
                .catch(function(error) {
                    // Handle AJAX error
                    console.error(error);
                });
        }

        // Function to send the actual OTP request
        function sendOtpRequest(contact, token) {
            // Make an AJAX request to send the OTP
            axios.post("{{ route('send_otp') }}", {
                    contact: contact,
                    _token: token
                })
                .then(function(response) {
                    // Handle the response if needed
                    console.log(response);

                    // Open smallPopup2 after OTP is sent
                    openSmallPopup2();
                })
                .catch(function(error) {
                    // Handle AJAX error
                    console.error(error);
                });
        }
        // Function to open the second small popup
        function openSmallPopup2() {
            document.getElementById('smallPopup1').style.display = 'none';
            document.getElementById('smallPopup2').style.display = 'block';
        }

        // Function to close the second small popup
        function closeSmallPopup2() {
            document.getElementById('smallPopup2').style.display = 'none';
        }




        // to varify otp
        // function verifyOtpforforgotpass() {
        //     $(".pop_up_div").hide();
        //     $("#update_password").show();
        //     // Get the entered OTP
        //     var enteredOtp = document.getElementById("otpInput1").value +
        //         document.getElementById("otpInput2").value +
        //         document.getElementById("otpInput3").value +
        //         document.getElementById("otpInput4").value;

        //     var token = document.querySelector('meta[name="csrf-token"]').content;


        //     // Make an AJAX request to verify the OTP
        //     var xhr = new XMLHttpRequest();
        //     xhr.open("POST", "verify_otp_for_forgot_pass", true);
        //     xhr.setRequestHeader("Content-Type", "application/json");
        //     xhr.setRequestHeader("X-CSRF-TOKEN", token); // Include CSRF token

      
        //     xhr.onreadystatechange = function() {
        //         if (xhr.readyState == 4 && xhr.status == 200) {
        //             var response = JSON.parse(xhr.responseText);

        //             // Check if the entered OTP is valid
        //             if (response.valid) {
        //                 alert("OTP verification successful!");
        //                 // Move to the next popup
        //                 openSmallPopup3();
        //             } else {
        //             console.log(1);
        //               $('#smallPopup2').show();
        //                 // Display an error message or handle it accordingly
        //                 alert("Invalid OTP. Please try again !!!!!!!.");
        //                 $('#smallPopup2').show();
        //             }
        //         }
        //     };
        //     // ---------------------------------------------------------
        //     // the below line doesnt work in online so i used another approach for this
        //     // ----------------------------------------------------------
        //     // Send the entered OTP to the server for verification
        //     xhr.send(JSON.stringify({
        //         enteredOtp: enteredOtp
        //     }));
        // }

function verifyOtpforforgotpass() {
    // Get the entered OTP
    var enteredOtp = document.getElementById("otpInput1").value +
        document.getElementById("otpInput2").value +
        document.getElementById("otpInput3").value +
        document.getElementById("otpInput4").value;

    var token = document.querySelector('meta[name="csrf-token"]').content;

    // Make an AJAX request to verify the OTP
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "verify_otp_for_forgot_pass", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.setRequestHeader("X-CSRF-TOKEN", token); // Include CSRF token

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);

            // Check if the entered OTP is valid
            if (response.valid) {
                alert("OTP verification successful!");
                 $('#update_password').show();
                // Move to the next popup
                openSmallPopup3();
            } else {
                console.log("Invalid OTP entered.");
                // Display an error message or handle it accordingly
                alert("Invalid OTP. Please try again.");
                $('#smallPopup2').show(); // Ensure the current popup stays open
            }
        }
    };

    // Send the entered OTP to the server for verification
    xhr.send(JSON.stringify({
        enteredOtp: enteredOtp
    }));
}

// Function to open Popup 3
// function openSmallPopup3() {
//     $('#smallPopup2').hide();
//     $('#update_password').show();
// }

        // Function to open the third small popup
        function openSmallPopup3() {
            document.getElementById('smallPopup2').style.display = 'none';
            document.getElementById('smallPopup3').style.display = 'block';
        }

        // Function to close the third small popup
        // function closeSmallPopup3() {
        //     document.getElementById('smallPopup3').style.display = 'none';
        // }


        function submitNewPasswordForm() {
            var newPassword = document.getElementById("newPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            var token = document.querySelector('meta[name="csrf-token"]').content;
            var userId = document.querySelector('meta[name="user-id"]').content; // Retrieve the user ID from the meta tag

            // Check if the passwords match
            if (newPassword === confirmPassword) {
                // Make an AJAX request to update the password
                axios.post("{{ route('update_password') }}", {
                        newPassword: newPassword,
                        userId: userId,
                        _token: token
                    })
                    .then(function(response) {
                        if (response.data.success) {
                            alert("Password updated successfully!");
                            // Close the third small popup or perform any other actions
                            closeSmallPopup3();
                        } else {
                            alert("Failed to update password. Please try again.");
                        }
                    })
                    .catch(function(error) {
                        // Handle AJAX error
                        console.error(error);
                    });
            } else {
                // Display the error message in the same popup
                document.getElementById("passwordMismatchError").innerText = "Passwords do not match. Please try again.";

                // alert("Passwords do not match. Please try again.");
            }
        }
    </script>
	
    @yield('js')
    {{-- include Axios --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>

</html>
