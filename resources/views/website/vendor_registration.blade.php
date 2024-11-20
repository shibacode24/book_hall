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

        .close11-button {
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

    <div class="clearfix"></div>

    <div id="titlebar" class="gradient margin-bottom-0"
        style="background-image: url({{ asset('public/images/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Vendor Registration</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="fullwidth_block padding-bottom-70 padding-top-20" data-background-color="#f9f9f9">
        <div class="container">
            <!--	<div class="row">
          <div class="col-md-8 col-md-offset-2">
           <h2 class="headline_part centered margin-top-80">How It Works? <span class="margin-top-10">Discover & connect with great local businesses</span> </h2>
          </div>
          </div>-->
            <div class="row container_icon">

                <div class="col-md-12">
                    <section id="vendor">
                        <h4><i class="sl sl-icon-phone"></i> Fill the form now</h4>
                        <form id="vendor_reg" action="{{route('store_vendor_registration')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input name="name" id="name1" type="text" placeholder="Name of Vendor"
                                        required />
                                </div>
                                {{-- <div class="col-md-6">
                                    <select id="state" name="state" class="form-control" required>
                                        <option>Maharashtra</option>
                                    </select> --}}
                                    <div class="col-md-6">  
                                        <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
                                </div>
                                {{-- <div class="col-md-6">
                                    <select id="city" name="city" class="form-control" required>
                                        <option>Amravati</option>
                                    </select> --}}
                                    <div class="col-md-6"> 
                                        <select id ="state" class="form-control" required></select>
                                </div>
                                <div class="col-md-6">
                                    <select name="category" id="category" class="form-control" required>
                                        <option value="Cars">Cars</option>
                                        <option value="Horse">Ghori/Horse</option>
                                        <option value="Photographer">Photographer</option>
                                        <option value="Decorators">Decoration</option>
                                        <option value="Catering">Catering</option>
                                        <option value="DJ">DJ</option>
                                        <option value="Musician">Singer/Musician</option>
                                        <option value="Banjo">Dhol-Tasha/Banjo</option>
                                        <option value="Mehndi">Mehndi</option>
                                        <option value="Makeup">Makeup</option>
                                        <option value="Choreographer">Choreographer</option>
                                    </select>
                                </div>
                    
                                <div class="col-md-6">
                                    <input name="email" id="email1" type="email" placeholder="Email Id" required />
                                </div>
                                <div class="col-md-12">
                                    <input name="address" id="address1" type="text" placeholder="Address"
                                        required />
                                </div>
                                <div class="col-md-6">
                                    <input name="contact_no" id="contact_no1" type="text" placeholder="Phone Number"
                                        required />
                                </div>
                                <div class="col-md-6">
                                    <input name="password" id="password1" type="password" placeholder="Password" required />
                                </div>
                            </div>
                            <button type="button" class="button3 button_new border fw margin-top-10"
                                onclick="validateAndSendOTP1()" style=" border-radius:5px;">Verify
                                OTP</button>
                        </form>

                    </section>
                </div>

            </div>
        </div>
    </section>


    <div class="overlay" id="overlay22"></div>
    <div class="popup" id="popup22">

        <button class="close11-button" style="text-align: center;" onclick="closePopupww()" align="right">
            <i class="fa fa-times" aria-hidden="true" style="color: #ff0202;"></i>
        </button>
        <div class="verification-code">
            <label class="control-label" style="color:red; font-size: 24px;">Verification
                Code</label>

            <section id="otp">
                <div class="inputs">
                    <section id="otp">
                        <div class="inputs">
                            <input type="text" inputmode="numeric" id="otp11" maxlength="1" class="inputOtp"
                                value=""
                                style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                            <input type="text" inputmode="numeric" id="otp22" maxlength="1" class="inputOtp"
                                value=""
                                style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left:5px; margin-right:5px;" />
                            <input type="text" inputmode="numeric" id="otp33" maxlength="1" class="inputOtp"
                                value=""
                                style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                            <input type="text" inputmode="numeric" id="otp44" maxlength="1" class="inputOtp"
                                value=""
                                style="border-left:1px solid #fff; border-right: 1px solid #fff; border-top: 1px solid #fff; border-bottom:2px solid #b9b7b7; margin-left: 5px; margin-right:5px;" />
                        </div>
                    </section>
                </div>
            </section>
            <button type="button" class="button border fw margin-top-10" name="register" onclick="verifyOTPbusi()"
                value="Register">Verify </button>
            <input type="hidden" id="verificationCode" />
        </div>
    </div>
    </div>


@stop
@section('js')
    {{-- <script>
  $(document).ready(function() {
    $('#vendor_reg').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var formData = {
            _token: $('input[name=_token]').val(), // CSRF token
            name: $('#name').val(),
            stt: $('#sts').val(),
            city: $('#state').val(),
            category: $('#category').val(),
            email: $('#email').val(),
            phone_number: $('#phone_number').val(),
            password: $('#password').val(),
        };

        $.ajax({
            type: "POST",
            url: "{{ route('store_vendor_registration') }}", // Adjust this route as needed
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                        timer: 3000,
                        showConfirmButton: false
                    });

                    // Optionally, clear form fields
                    $('#contactform')[0].reset();
                }
            },
            error: function(xhr) {
                // Parse the validation errors returned from Laravel
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessages = '';

                    $.each(errors, function(key, value) {
                        errorMessages += value + '<br>';
                    });

                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Errors!',
                        html: errorMessages
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something went wrong. Please try again later.'
                    });
                }
            }
        });
    });
}); --}}

    <script>
        // let otp;
        // Form validation
        $(document).ready(function() {
            // Form validation
            $('#vendor_reg').validate({
                rules: {
                    name: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    category: {
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
                    state: {
                        required: "<span class='error-msg'>Please enter your business state</span>"
                    },
                    city: {
                        required: "<span class='error-msg'>Please enter your business city</span>"
                    },
                    category: {
                        required: "<span class='error-msg'>Please enter your business category</span>"
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
            if ($('#vendor_reg').valid()) {
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
            var password = $('#password1').val();

            // Check if both fields are empty
            if (contactNumber1 === '' ) {
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
                    $('#vendor').show();
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
                $('#vendor_reg').submit();

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
