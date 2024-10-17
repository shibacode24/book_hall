@extends('website.layout')
@section('content')

    <style>
        .custom-confirm-button {
            background-color: red;
            /* Change to your desired color */
            color: white;
            /* Text color */
            border: none;
            /* Optional: remove border */
            width: 100px;
            font-size: 15px;
        }

        .custom-confirm-button:hover {
            background-color: red;
            /* Change to a darker shade on hover */

        }

        .error {
            color: red;
            display: none;
        }
    </style>
    <div class="clearfix"></div>

    <div id="titlebar" class="gradient margin-bottom-0"
        style="background-image: url({{ asset('public/images/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="fullwidth_block padding-bottom-70" data-background-color="#f9f9f9">

        <!-- Content -->
        <div class="utf_contact_map margin-bottom-20">
        </div>
        <div class="clearfix"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>Fill the form now</h3>
                    {{-- <section id="contact" class="margin-bottom-10">
              <form id="contactform" action="{{ route('send_mail') }}" method="post" onsubmit="return validateForm()">
                  @csrf
                  <div class="row">
                      <div class="col-md-12">
                          <input name="name" type="text" placeholder="Your Name" required />
                          <div id="error-name" class="error">Please enter your name.</div>
                      </div>
                      <div class="col-md-12">
                          <input name="email" type="email" placeholder="Email" required />
                          <div id="error-email" class="error">Please enter a valid email address.</div>
                      </div>
                      <div class="col-md-12">
                          <input id="phone-number" name="number" type="text" placeholder="Phone Number" pattern="\d{10}" maxlength="10" minlength="10" required />
                          <div id="error-number" class="error">Phone number must be exactly 10 digits.</div>
                      </div>
                      <div class="col-md-12">
                          <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
                          <div id="error-message" class="error">Please enter your message.</div>
                      </div>
                  </div>
                  <input type="submit" class="submit button" id="submit" value="Send" style="background-color:#fff; color:red; border:1px solid; border-color:red; width:40%;" />
              </form>
          </section> --}}

                    <section id="contact" class="margin-bottom-10">
                        <form id="Sendmail" action="{{ route('send_mail') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input name="name" type="text" placeholder="Your Name" required />
                                    <div id="error-name" class="error">Please enter your name.</div>
                                </div>
                                <div class="col-md-12">
                                    <input name="email" type="email" placeholder="Email" required />
                                    <div id="error-email" class="error">Please enter a valid email address.</div>
                                </div>
                                <div class="col-md-12">
                                    <input id="phone-number" name="number" type="text" placeholder="Phone Number"
                                        pattern="\d{10}" maxlength="10" minlength="10" required />
                                    <div id="error-number" class="error">Phone number must be exactly 10 digits.</div>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
                                    <div id="error-message" class="error">Please enter your message.</div>
                                </div>

                                <!-- CAPTCHA Image and Input -->
                                <div class="col-md-12">
                                    <img src="{{ route('captcha') }}" alt="CAPTCHA Image" id="captcha-img">
                                    <input type="text" name="captcha" placeholder="Enter CAPTCHA" required />
                                    <div id="error-captcha" class="error"></div>
                                </div>
                            </div>
                            <input type="submit" class="submit button" id="submit" value="Send"
                                style="background-color:#fff; color:red; border:1px solid; border-color:red; width:40%;" />
                        </form>
                        <div id="message"></div>
                    </section>

                    <!-- Include Google reCAPTCHA script -->

                </div>

                <div class="col-md-5">
                    <h3>Get in touch with us</h3>

                    <!--<div class="utf_box_widget margin-bottom-20">
       <div class="utf_sidebar_textbox">
       <ul class="utf_contact_detail">
        <li><strong>Phone</strong></li>
        <li style="border-bottom:none !important;"><span><a href="tel:+919766658802" style="color:#000;">+919766658802</a></span></li>
       </ul>
       </div>
      </div>
      
      <div class="utf_box_widget margin-bottom-20">
       <div class="utf_sidebar_textbox">
       <ul class="utf_contact_detail">
        <li><strong>E-Mail</strong></li>
        <li style="border-bottom:none !important;"><span><a href="mailto:bookmyweddinghall@gmail.com" style="color:#000;">bookmyweddinghall@gmail.com</a></span></li>
       </ul>
       </div>
      </div>-->

                    <div class="utf_box_widget margin-bottom-20"
                        style="display:inherit; margin-top:0px; background-color:#f4f4f5;">
                        <h3>Phone</h3>
                        <h4 style="padding-bottom:7px; color: #000000;">We are always there for you.</h4>
                        <div style="display:inline-block">
                            <a class="button border" href="tel:+919766658802 "
                                style="border: 1px solid; border-color: #ec3323; border-radius: 4px;color:#000;"><b><i
                                        class="fa fa-phone-square" aria-hidden="true "></i> +91 97666 58802</b></a>
                            <span> <a class="button border" href="tel:+919730158802"
                                    style="border: 1px solid; border-color: #ec3323; border-radius: 4px; color:#000;"><b><i
                                            class="fa fa-phone-square " aria-hidden="true "></i> +91 97301 58802</b>
                                </a></span>
                        </div>
                    </div>


                    <div class="utf_box_widget margin-bottom-20"
                        style="display:inherit; margin-top:0px; background-color:#f4f4f5;">
                        <h3>Email</h3>
                        <h4 style="padding-bottom:7px; color: #000000;">Our support team will get back to you soon.</h4>
                        <a class="button border" href="mailto:zheptoursandtravels@gmail.com"
                            style="border: 1px solid; border-color: #ec3323; border-radius: 4px;  color:#000;"><b><i
                                    class="fa fa-envelope-o " aria-hidden="true "> </i> bookmyweddinghall@gmail.com</b></a>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <div class="parallax" data-background="https://bookmyweddinghall.com/public/images/about_us_bg.png">
        <div class="utf_text_content white-font">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <img src="https://bookmyweddinghall.com/public/images/weeding-logo1.png"
                            style="width:20%; height:20%;">
                        <h4 style="font-size:35px;"> Latest Wedding trends </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="fullwidth_block padding-bottom-40  box_icon_with_line" data-background-color="#f9f9f9"
        style="margin-top:0px; border-radius:0;">
        <div class="container ">
            <div class="row container_icon" align="center">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>Showcase your wedding business</h2>
                    <p style="font-size:17px;" align="center">Showcase wedding services on bookmyweddinghall. Reach more
                        engaged couples and start receiving and managing enquiries with our easy tools. </p>
                    <a href="https://bookmyweddinghall.com/vendor_registration" class="button border with-icon"
                        style="background-color:#fff; border-color:red; color:red;">Vendor Registration</a>
                    <a href="https://bookmyweddinghall.com/business_listing_login" class="button border with-icon"
                        style="background-color:#fff; border-color:red; color:red;">Free Business
                        Listing</a>
                </div>
            </div>
        </div>
    </section>

@stop

@section('js')

    {{-- <script>
  function validateForm() {
      var name = document.forms["contactform"]["name"].value;
      var email = document.forms["contactform"]["email"].value;
      var phone = document.forms["contactform"]["number"].value;
      var comments = document.forms["contactform"]["comments"].value;

      var isValid = true;

      // Name validation
      if (name === "") {
          document.getElementById("error-name").style.display = "block";
          isValid = false;
      } else {
          document.getElementById("error-name").style.display = "none";
      }

      // Email validation
      if (email === "") {
          document.getElementById("error-email").style.display = "block";
          isValid = false;
      } else {
          document.getElementById("error-email").style.display = "none";
      }

      // Phone number validation
      if (phone === "" || !phone.match(/^\d{10}$/)) {
          document.getElementById("error-number").style.display = "block";
          isValid = false;
      } else {
          document.getElementById("error-number").style.display = "none";
      }

      // Comments validation
      if (comments === "") {
          document.getElementById("error-message").style.display = "block";
          isValid = false;
      } else {
          document.getElementById("error-message").style.display = "none";
      }

      return isValid;
  }
</script> --}}
    {{-- <script>
    // Form Validation Function
    function validateForm() {
        var name = document.forms["contactform"]["name"].value;
        var email = document.forms["contactform"]["email"].value;
        var phone = document.forms["contactform"]["number"].value;
        var comments = document.forms["contactform"]["comments"].value;

        var isValid = true;

        // Name validation
        if (name === "") {
            document.getElementById("error-name").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("error-name").style.display = "none";
        }

        // Email validation
        if (email === "") {
            document.getElementById("error-email").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("error-email").style.display = "none";
        }

        // Phone number validation
        if (phone === "" || !phone.match(/^\d{10}$/)) {
            document.getElementById("error-number").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("error-number").style.display = "none";
        }

        // Comments validation
        if (comments === "") {
            document.getElementById("error-message").style.display = "block";
            isValid = false;
        } else {
            document.getElementById("error-message").style.display = "none";
        }

        if (isValid) {
            submitForm();  // If form is valid, submit via AJAX
        }

        return false;  // Prevent default form submission
    }

    // AJAX form submission
    function submitForm() {
        $.ajax({
            url: "{{ route('send_mail') }}",
            method: "POST",
            data: $('#contactform').serialize(),
            success: function(response) {
                if (response.success) {
                    // SweetAlert for success
                    Swal.fire({
                        title: 'Success!',
                        text: response.success,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });

                    // Reset the form
                    $('#contactform')[0].reset();

                    // Reload CAPTCHA image
                    $('#captcha-img').attr('src', '{{ route('captcha') }}?' + Math.random());
                } else {
                    // SweetAlert for error
                    Swal.fire({
                        title: 'Error!',
                        text: response.error,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            },
            // error: function(xhr) {
            //     var errors = xhr.responseJSON.errors;

            //     if (errors.name) {
            //         $('#error-name').text(errors.name[0]).show();
            //     }

            //     if (errors.email) {
            //         $('#error-email').text(errors.email[0]).show();
            //     }

            //     if (errors.number) {
            //         $('#error-number').text(errors.number[0]).show();
            //     }

            //     if (errors.comments) {
            //         $('#error-message').text(errors.comments[0]).show();
            //     }

            //     if (errors.captcha) {
            //         $('#error-captcha').text(errors.captcha[0]).show();
            //     }

            //     // Reload CAPTCHA image on error
            //     $('#captcha-img').attr('src', '{{ route('captcha') }}?' + Math.random());
            // }
        });
    }
</script> --}}

    <script>
        $(document).ready(function() {
            $('#Sendmail').on('submit', function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: "{{ route('send_mail') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'custom-confirm-button' // Add your custom class here
                                }
                            });
                            // Optionally, you can reset the form here
                            $('#Sendmail')[0].reset();
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                html: '<span style="font-size: 20px;">' + response
                                    .message +
                                    '</span>',
                                icon: 'error',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'custom-confirm-button' // Add your custom class here
                                }
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) { // validation error
                            var errors = xhr.responseJSON.messages;
                            var errorMessage = '';

                            $.each(errors, function(key, value) {
                                errorMessage += value + '\n';
                            });

                            Swal.fire({
                                title: 'Validation Error!',
                                text: errorMessage,
                                icon: 'warning',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'custom-confirm-button' // Add your custom class here
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Oops!',
                                text: 'An error occurred. Please try again.',
                                icon: 'error',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'custom-confirm-button' // Add your custom class here
                                }
                            });
                        }
                    }
                });
            });
        });
    </script>
@stop


{{-- @section('js')

<script>

  $(document).ready(function() {
   
     $('#contactform').validate({
     
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
            comments: {
                required: true,
                // minlength: 4
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
            comments: {
                required: "<span class='error-msg'>Please enter a comments</span>",
                // minlength: "<span class='error-msg'>Password must be at least 4 characters long</span>"
            }
        }
    });
});



 </script>
@stop   --}}
