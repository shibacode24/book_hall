@extends('website.layout')
@section('content')
    <style>
        .error {
            color: red;
            display: none;
        }

        .button_new {
            background-color: #fff;
            /* Green */
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
            border-radius: 10px;
        }

        .button_new1 {
            background-color: #fff;
            /* Green */
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
            border-radius: 25px;
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

        .container1 {
            position: relative;
            width: 100%;

        }

        /* Style the image */
        .responsive-image {
            width: 75%;
            height: auto;
            display: block;
        }

        /* Overlay text styling */
        .overlay-text {
            position: absolute;
            top: 50%;
            left: 75%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 2em;
            text-align: left;
            padding: 20px;
            background: rgb(255 255 255);
            /* Semi-transparent background */
            border-radius: 5px;
            width: 45%;
            height: auto;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .overlay-text1 {
            position: absolute;
            top: 50%;
            right: 33%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 2em;
            text-align: left;
            padding: 20px;
            background: rgb(255 255 255);
            /* Semi-transparent background */
            border-radius: 5px;
            width: 45%;
            height: auto;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .image-container {
                text-align: center;
            }

            .image-container {
                text-align: center;
            }

            .responsive-image {
                width: 100%;
            }


            .overlay-text {
                position: static;
                transform: none;
                background: none;
                color: black;
                font-size: 1.5em;
                padding: 0;
                /* margin-top: 10px;  Space between image and text */
                width: 100%;
                height: auto;
                padding: 20px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }

            .overlay-text1 {
                position: static;
                transform: none;
                background: none;
                color: black;
                font-size: 1.5em;
                padding: 0;
                /*  margin-top: 10px;  Space between image and text */
                width: 100%;
                height: auto;
                padding: 20px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
        }
    </style>

    <div class="clearfix"></div>

    <div id="titlebar" class="gradient margin-bottom-0"
        style="background-image: url({{ asset('public/images/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Vendors</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="search_container_block home_main_search_part main_search_block mt1">
        <div class="main_inner_search_block" id="hall">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" align="center">
                        <h3>Find Your Nearby
                           </h3>
                        <!--       <h4 style="color:gray;">Find some of the best venues from around the city from our partners.</h4>-->
                        <form action="{{ route('vendor_search_result') }}" method="get">
                            <div class="main_input_search_part">
                                <div class="main_input_search_part_item intro-search-field">
                                    <select name="city" class="selectpicker default" data-live-search="true"
                                        data-selected-text-format="count" data-size="5" title="Select Location">
                                        <option disabled>Location</option>
                                        @foreach ($vendor_data as $citys)
                                            <option>{{ $citys->city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="main_input_search_part_item intro-search-field">
                                    <select name="category" class="selectpicker default" data-placeholder="All Categories"
                                        title="All Categories" data-live-search="true" data-selected-text-format="count"
                                        data-size="5">
                                        @foreach ($vendor_data as $categorys)
                                            <option>{{ $categorys->category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="button3 button_new"
                                    style="border-radius:50px;">Search</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <br>

    <!-- Content -->
    <div class="utf_contact_map margin-bottom-20" align="center">
        <h3>Find the top notch Wedding Vendors near you in every category.</h3>
        <a href="#car"><button type="button" class="button_new1 button3 border fw margin-top-10">Cars</button></a>
        <a href="#horse"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Ghori/Horse</button></span></a>
        <a href="#photographer"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Photographer</button></span></a>
        <a href="#decoration"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Decoration</button></span></a>
        <a href="#catering"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Catering</button></span></a>
        <a href="#dj"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">DJ</button></span></a>
        <a href="#singer"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Singer/Musician</button></span></a><br>
        <a href="#dhol"><span><button type="button" class="button_new1 button3 border fw margin-top-10">Dhol -Tasha/
                    Banjo</button></span></a>
        <a href="#mehandi"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Mehndi</button></span></a>
        <a href="#makeup"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Makeup</button></span></a>
        <a href="#choreo"><span><button type="button"
                    class="button_new1 button3 border fw margin-top-10">Choreographer</button></span></a>
    </div>
    <div class="clearfix"></div>


    <div class="container">
   <form id="vendorSearchForm" action="{{ route('vendor_search_result') }}" method="get">
     <input type="hidden" name="category" id="categoryInput">
        <div class="container1" id="car">
            <div class="image-container" align="left">
                <img src="{{ asset('public/images/car.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text">
                    <h3><b>Wedding Cars</b></h3><br>
                    <p>Explore the top Wedding Cars near you who will immortalise your wedding’s most
                        precious moments.</p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Cars')">Find Cars</button>
                </div>
            </div>
        </div>
        <br>
        <div class="container1" id="horse">
            <div class="image-container" align="right">
                <img src="{{ asset('public/images/horse.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text1">
                    <h3><b>Wedding Horse</b></h3><br>
                    <p>Hire a beautifully adorned Ghori (White Horse) for the groom to ride in wedding baraat.</p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Horse')">Find Horse</button>
                </div>

            </div>
        </div>
        <br>

        <div class="container1" id="photographer">
            <div class="image-container" align="left">
                <img src="{{ asset('public/images/photographer.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text">
                    <h3><b>Wedding Photographers</b></h3><br>
                    <p>Discover the top Photographer who will memories most precious moments in your
                        wedding.</p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Photographer')">Find Photographers</button>
                </div>
            </div>
        </div>

        <br>
        <div class="container1" id="decoration">
            <div class="image-container" align="right">
                <img src="{{ asset('public/images/decoration.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text1">
                    <h3><b>Wedding Decoration</b></h3><br>
                    <p>Find professional decorations that symbolized a sacred structure that serves as the
                        focal point of your wedding rituals.</p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Decoratoration')">Find Decorators</button>
                </div>

            </div>
        </div>

        <br>

        <div class="container1" id="catering">
            <div class="image-container" align="left">
                <img src="{{ asset('public/images/catering.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text">
                    <h3><b>Wedding Catering </b></h3><br>
                    <p>Select from a wide range of caterers offering hospitality and generosity.
                        Indian wedding menus vary by region and often include dishes that symbolize different
                        aspects of life. </p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Catering')">Find Caterers</button>
                </div>
            </div>
        </div>

        <br>
        <div class="container1" id="dj">
            <div class="image-container" align="right">
                <img src="{{ asset('public/images/dj.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text1">
                    <h3><b>Wedding DJ</b></h3><br>
                    <p>Browse some of the greatest wedding DJ near you for your wedding.</p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('DJ')">Find DJ</button>
                </div>

            </div>
        </div>

        <br>

        <div class="container1" id="singer">
            <div class="image-container" align="left">
                <img src="{{ asset('public/images/singer.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text">
                    <h3><b>Wedding Singer / Musicians </b></h3><br>
                    <p>Make lasting memories with melodious voices and music at Engagement, Sangeet,
                        Mehndi, Haldi, Wedding & Reception. </p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Musician')">Find Musician</button>
                </div>
            </div>
        </div>

        <br>
        <div class="container1" id="dhol">
            <div class="image-container" align="right">
                <img src="{{ asset('public/images/dhol-tasha.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text1">
                    <h3><b>Wedding Dhol - Tasha / Banjo</b></h3><br>
                    <p>The beats of Dhol Tasha served as a unifying force that electrify the sense and brings
                        communities together.</p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Banjo')">Find Banjo</button>
                </div>

            </div>
        </div>

        <br>

        <div class="container1" id="mehandi">
            <div class="image-container" align="left">
                <img src="{{ asset('public/images/mehendi.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text">
                    <h3><b>Wedding Mehndi Artist </b></h3><br>
                    <p>Cherished pre-wedding ritual in weddings with traditional designs in the
                        lovely red color of Mehndi / Heena. </p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Mehndi')">Find Mehndi Artist</button>
                </div>
            </div>
        </div>

        <br>
        <div class="container1" id="makeup">
            <div class="image-container" align="right">
                <img src="{{ asset('public/images/makeup.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text1">
                    <h3><b>Wedding Makeup Artist </b></h3><br>
                    <p>Choose professionals to help put on beautiful look with clothes and jewellery on your
                        wedding day. </p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Makeup')">Find Makeup Artist</button>
                </div>

            </div>
        </div>

        <br>

        <div class="container1" id="choreo">
            <div class="image-container" align="left">
                <img src="{{ asset('public/images/choreo.png') }}" alt="Image 2" class="responsive-image">
                <div class="overlay-text">
                    <h3><b>Wedding Choreographer </b></h3><br>
                    <p>Discover local choreographers and meet the one who will teach you various dance
                        styles. </p>
                    <button type="button" class="button_new button3 border fw margin-top-10" onclick="submitCategory('Choreographer')">Find Choreographer</button>
                </div>
            </div>
        </div>

    </div>
</form>
    <br>
    <div class="parallax" data-background="{{ asset('public/images/about_us_bg.png') }}">
        <div class="utf_text_content white-font">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <img src="{{ asset('public/images/weeding-logo1.png') }}" style="width:20%; height:20%;">
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
                    <a href="{{ route('vendor_registration') }}" class="button border with-icon">Vendor Registration</a>
                    <a href="{{ route('business_listing_login') }}" class="button border with-icon">Free Business
                        Listing</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        function submitCategory(category) {
            // Set the hidden input value to the selected category
            document.getElementById('categoryInput').value = category;
            // Submit the form
            document.getElementById('vendorSearchForm').submit();
        }
    </script>
@stop

@section('js')
    
    <script>
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

<script>
	Splitting();

const options = {
  root: null, // use the document's viewport as the container
  rootMargin: "0px", // % or px - offsets added to each side of the intersection
  threshold: 0.2
};

const itemDelay = 0.1;

let fadeupCallback = (entries, self) => {
  let itemLoad = 0;
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const tl = gsap.timeline({ defaults: { ease: "power3.out" } });
      tl.set(entry.target, { visibility: "visible" });
      tl.from(entry.target, {
        duration: 1.5,
        y: 200,
        skewY: 40,
        autoAlpha: 0,
        delay: itemLoad * itemDelay,
        ease: "power3.out"
      });
      itemLoad++;
      self.unobserve(entry.target);
    }
  });
};

let fadeupObserver = new IntersectionObserver(fadeupCallback, options);

document.querySelectorAll("h1 span, img").forEach((fadeup) => {
  fadeupObserver.observe(fadeup);
});

</script>
@stop   --}}
