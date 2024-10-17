
@extends('website.layout')
@section('content')

   
<style>
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
        height: auto;
        max-width: 450px;
        border-radius: 20px 20px 20px 20px;
    }

    /* .small_dialog_header1 {
	font-size: 22px;
	width: calc(100% + 40px);
	position: relative;
	left: -20px;
	top: 0;
	border-radius: 20px 20px 0 0;
	display: inline-block;
	background-color:#ff2222;
	padding: 25px;
	margin-bottom: 20px;
} */

    .close11-button{
     color: #ff2222;
    background-color: #fff;
    border-radius: 50px;
    top: 20px;
    right: 20px;
    width: 34px;
    height: 34px;
    }

    #otp {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 16px auto;
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
  margin: 4px 4px;
  border: none;
  border-bottom: 2px solid #b9b7b7;
  background: transparent;
  font-size: 18px;
  text-align: center;
}
.inputOtp:focus {
  border-bottom: 3px solid orange;
  outline: none;
}
</style>

    <body>

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

            <div class="clearfix"></div>

            <div id="titlebar" class="gradient">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Free Business Listing</h2>
                            <nav id="breadcrumbs">
                                <ul>
                                    <li><a href="{{ route('website_index') }}">Home</a></li>
                                    <li>Free Business Listing</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container margin-bottom-75">

                <div class="row" style="padding:10px;" id="busi_form">
                    <div class="col-md-5" align="center">
                        <img src="{{ asset('public\images\business-listing.png') }}" style="width:100%; height:100%;">
                    </div>

                    <div class="col-md-7" align="left">
                        <h1 style="color:#000; font-size:45px;"><b>List Your Business <span style="color:red;">for
                                    FREE</span></b></h1>
                        <h4 style="color:#000; font-size:30px;">with BookMyWeddingHall</h4>

                        <form id="reg_form_busi" action="{{ route('storeRegistration') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="utf_add_listing_part">
                                        <div class=" margin-top-20">
                                            <!--<div class="utf_add_listing_part_headline_part">
                                            <h3><i class="sl sl-icon-tag"></i> Business Listing</h3>
                                        </div>-->
                                            <div class="row with-forms">
                                                <input type="hidden" name="user_type" value="business">
                                                <div class="col-md-6">
                                                    <h5>Business Name</h5>
                                                    <input type="text" class="search-field" name="name" id="name1"
                                                        placeholder="Business Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>Email</h5>
                                                    <input type="text" name="email" id="email1" placeholder="Email"
                                                     required>
                                                </div>
                                            </div>

                                            <div class="row with-forms">
                                                <div class="col-md-6">
                                                    <h5>Contact Number</h5>
                                                    <input type="text" class="search-field" name="contact_no"
                                                        id="contact_no1" maxlength="10" placeholder="Contact Number"
                                                        required>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>Password</h5>
                                                    <input type="text" name="password" id="password13"
                                                        placeholder="Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="button3 button_new border fw margin-top-10" onclick="validateAndSendOTP1()"
                                            style=" border-radius:5px;">Verify
                                            OTP</button>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

            <!--<form id="reg_form" class="utf_add_comment" action="{{ route('storeRegistration') }}" method="post">
                        {{-- @csrf --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="utf_add_listing_part">
                                    <div class="add_utf_listing_section margin-top-45">
                                        <div class="utf_add_listing_part_headline_part">
                                            <h3><i class="sl sl-icon-tag"></i> Business Listing</h3>
                                        </div>
                                        <div class="row with-forms">
                                            <input type="hidden" name="user_type" value="business">
                                            <div class="col-md-6">
                                                <h5>Business Name</h5>
                                                <input type="text" class="search-field" name="name" id="name"
                                                    placeholder="Business Name" value="" required>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Email</h5>
                                                <input type="text" name="email" id="email" placeholder="Email"
                                                    value="" required>
                                            </div>
                                        </div>

                                        <div class="row with-forms">
                                            <div class="col-md-6">
                                                <h5>Contact Number</h5>
                                                <input type="text" class="search-field" name="contact_no" id="contact_no"
                                                    placeholder="Contact Number" value="" required>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Password</h5>
                                                <input type="text" name="password" id="password" placeholder="Password"
                                                    value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="button border fw margin-top-10" onclick="togglePopup()">Verify
                                        OTP</button>

                                </div>
                            </div>
                    </form>-->
            <div class="overlay" id="overlay22"></div>
            <div class="popup" id="popup22" >
                {{-- <button style="width: 20px;" onclick="togglePopup1()"
        style="text-align:right;"><i class="fa fa-times" aria-hidden="true"
            style="color: #000; "></i></button> --}}

            {{-- <div class="small_dialog_header1" >
                <p style="color:#fff;">Welcome</p>
                <button class="close11-button" style="width: 30px; text-align: center;" onclick="closePopupww()" align="left;">
                    <i class="fa fa-times" aria-hidden="true" style="color: #ff0202;"></i>
                </button>
                <div align="center">
                    <img src="{{ asset('public/images/weeding-logo1.png') }}"
                        style="width:60%; height:60%;" align="center">
                    <!--<h3 id="header_change">Sign In</h3>-->
                </div>
            
            </div> --}}
            <button class="close11-button" style="text-align: center;" onclick="closePopupww()" align="right">
                <i class="fa fa-times" aria-hidden="true" style="color: #ff0202;"></i>
            </button>
                <div class="verification-code">
                    <label class="control-label" style="color:red; font-size: 24px;">Verification
                        Code</label>
                    {{-- <div class="verification-code--inputs">
                        <input type="text" id="otp11" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;"/>
                        <input type="text" id="otp22" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                        <input type="text" id="otp33" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                        <input type="text" id="otp44" maxlength="1" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff;" />
                    </div> --}}
                    <section id="otp">
                        <div class="inputs">
                          <section id="otp">
                   <div class="inputs">
                          <input type="text" inputmode="numeric" id="otp11" maxlength="1" class="inputOtp" value="" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                          <input type="text" inputmode="numeric" id="otp22" maxlength="1" class="inputOtp" value="" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left:5px; margin-right:5px;" />
                          <input type="text" inputmode="numeric" id="otp33" maxlength="1" class="inputOtp" value="" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                          <input type="text" inputmode="numeric" id="otp44" maxlength="1" class="inputOtp" value="" style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                        </div>
                      </section>
                        </div>
                      </section>
                    <button type="button" class="button border fw margin-top-10" name="register"
                        onclick="verifyOTPbusi()" value="Register">Verify </button>
                    <input type="hidden" id="verificationCode" />
                </div>
            </div>
        </div>


    @stop
    @section('js')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <!-- Load jQuery Validate plugin -->
    {{-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script> --}}
        <script>
            // let otp;
        // Form validation
        $(document).ready(function() {
        // Form validation
        $('#reg_form_busi').validate({
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
                    required: "<span class='error-msg'>Please enter your business name</span>"
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

    function validateAndSendOTP1() {
        if ($('#reg_form_busi').valid()) {
            ww();
        } else {
            console.log('Form validation failed');
        }
    }
    function ww() {
    // Get the contact number and name from the input fields
    var contactNumber1 = $('#contact_no1').val();
    var name = $('#name1').val();
    var email = $('#email1').val();
    var password = $('#password13').val();
    
    // Check if both fields are empty
    if (contactNumber1 === '' || name === '' || email === '' || password === '') {
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
            title: 'Fill all fields'
        });
        return; // Exit the function if any field is empty
    }

    // Check if the contact number is not 10 digits
    if (contactNumber1.length !== 10) {
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
            title: 'Number must be 10 digits.'
        });
        return; // Exit the function if the number is not 10 digits
    }

    // AJAX request to send OTP
    $.ajax({
        url: '{{ route('send_mobile_verify_otp') }}',
        type: 'get',
        data: {
            contact_no: contactNumber1
        },
        success: function(response) {
            // Handle success
            console.log(response);
            otp = response.otp;
            // Show the popup/modal
            $('#popup22').show();
            $('#busi_form').show();
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error(error);
        }
    });
}

            // }
        </script>


        <script>
            function verifyOTPbusi() {
                // Get the entered OTP
                var otp1 = $('#otp11').val();
                var otp2 = $('#otp22').val();
                var otp3 = $('#otp33').val();
                var otp4 = $('#otp44').val();
                console.log(otp);

                var enteredOTP = otp1 + otp2 + otp3 + otp4;
                if (enteredOTP == otp) {
                    $('#reg_form_busi').submit();
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
                    // alert('Invalid OTP');
                    // $('#popup22').show();
                }

            }
        </script>
           <script>
            function closePopupww() {
                var popup = document.getElementById('popup22'); // Assuming the ID of your popup/modal is 'popup'
                popup.style.display = 'none';
                var overlay = document.getElementById('overlay22'); // Assuming the ID of your overlay is 'overlay'
                overlay.style.display = 'none';
            }
        </script>
        <script>
          function otp() {
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
otp();
            </script>

    @stop
