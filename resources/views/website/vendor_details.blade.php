@extends('website.layout')
@section('content')

    <style>
    
    @media (max-width: 991px) {
    .search_container_block {
        height: 300px;
    }
}

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

                      <!-- Content -->
                      <div class="utf_contact_map margin-bottom-20" align="center">
                        <!--    <h3>Find the top notch Wedding Vendors near you in every category.</h3> -->
                            <a href="https://bookmyweddinghall.com/vendors#Cars"><button type="button" class="button_new1 button3 border fw margin-top-10">Cars</button></a>
                            <a href="https://bookmyweddinghall.com/vendors#Horse"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">Ghori/Horse</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#Photographer"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">Photographer</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#Decorators"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">Decoration</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#Catering"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">Catering</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#DJ"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">DJ</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#Musician"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">Singer/Musician</button></span></a><br>
                            <a href="https://bookmyweddinghall.com/vendors#Banjo"><span><button type="button" class="button_new1 button3 border fw margin-top-10">Dhol -Tasha/
                                        Banjo</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#Mehndi"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">Mehndi</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#Makeup"><span><button type="button"
                                        class="button_new1 button3 border fw margin-top-10">Makeup</button></span></a>
                            <a href="https://bookmyweddinghall.com/vendors#Choreographer"><span><button type="button"       
                            class="button_new1 button3 border fw margin-top-10">Choreographer</button></span></a>
                        </div>
                        <div class="clearfix"></div>

    <div class="search_container_block home_main_search_part main_search_block mt1">
        <div class="main_inner_search_block" id="hall">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" align="center">
                        <h3>Find Your Nearby
                        </h3>
                        {{-- for hide the serach bar --}}
                        {{-- @if (count($vendor_search_result) > 0)  --}}
                        <!--       <h4 style="color:gray;">Find some of the best venues from around the city from our partners.</h4>-->
                        <form action="{{ route('vendor_search_result') }}" method="get">
                            <input type="hidden" name="category" value="{{ $category }}">
                            <div class="main_input_search_part">
                                <div class="main_input_search_part_item intro-search-field">
                                    <select name="state" class="selectpicker default" data-live-search="true"
                                        data-selected-text-format="count" data-size="5" title="Select State">
                                        <option disabled>State</option>
                                        @foreach ($vendor_data as $state => $cities)
                                            <option value="{{ $state }}">{{ $state }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="main_input_search_part_item intro-search-field">
                                    <select name="city" class="selectpicker default" data-placeholder="Select City"
                                        title="Select City" data-live-search="true" data-selected-text-format="count"
                                        data-size="5">
                                        <option disabled>City</option>
                                        @foreach ($vendor_data as $state => $cities)
                                            @foreach ($cities->unique('city') as $city)
                                                <option value="{{ $city->city }}">{{ $city->city }}</option>
                                            @endforeach
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
    </div>
    <br><br>
    <div class="clearfix"></div>
    <div class="container">


        <div class="row">
            @if (count($vendor_search_result) == 0)
                <div class="col-lg-12 col-md-12" align="center">
                    <img src="{{ asset('public/images/sorry.gif') }}" style="width:30%; height:30%;">
                    <h1>Data Not Available</h1>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                    @else
                        @foreach ($vendor_search_result as $vendor_search_results)
                            <div class="col-lg-12 col-md-12">
                                <div class="utf_listing_item-container list-layout" style="padding: 25px;">
                                    <div class="utf_listing_item" style="border-radius: 20px;">
                                        <div class="utf_listing_item-image" style="border-radius: 20px;">
                                            <img src="{{ asset('public/images/vendor_registration_image/' . $vendor_search_results->image) }}"
                                                alt="Vendor Image">
                                        </div>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_item-inner">

                                                <h3 style="font-size: 24px; font-weight: 700;">
                                                    {{ $vendor_search_results->name }}
                                                </h3>
                                                @php
                                                    $star_count = $vendor_search_results->star_count ?? 0;
                                                    $review_count = $vendor_search_results->review_count ?? 0;
                                                    $average_rating =
                                                        $review_count > 0 ? $star_count / $review_count : 0;
                                                @endphp

                                                <div class="utf_star_rating_section" data-rating="{{ $average_rating }}">
                                                    <div class="utf_counter_star_rating">
                                                        @if ($review_count > 0)
                                                            ({{ number_format($average_rating, 1) }})
                                                            /
                                                            ({{ $review_count }} Reviews)
                                                        @endif
                                                    </div>
                                                </div>

                                                @if ($vendor_search_results->verified == '1')
                                                    <span>
                                                        <img src="{{ asset('public/images/verified.png') }}"
                                                            style="width: 15%; height: 15%;" alt="Verified">
                                                    </span>
                                                @endif

                                                <span style="font-size: 16px;">
                                                    <i class="fa fa-map-marker" style="font-size: 20px;"></i>
                                                    {{ $vendor_search_results->address }},
                                                    {{ $vendor_search_results->city }},
                                                    {{ $vendor_search_results->state }}
                                                </span>
                                                <a href="tel:{{ $vendor_search_results->phone_number }}"> <button
                                                        class="button3 button_new" style="border-radius: 50px;">
                                                        <i class="fa fa-phone"
                                                            style="font-size: 20px; padding-top: 5px;"></i>
                                                        &nbsp;{{ $vendor_search_results->phone_number }}
                                                    </button></a>

                                                @if ($vendor_search_results->alternate_phone_number)
                                                    <a href="tel:{{ $vendor_search_results->alternate_phone_number }}"><button
                                                            class="button3 button_new" style="border-radius: 50px;">
                                                            <i class="fa fa-phone"
                                                                style="font-size: 20px; padding-top: 5px;"></i>
                                                            &nbsp;{{ $vendor_search_results->alternate_phone_number }}
                                                        </button></a><br>
                                                @endif

                                                <a href="mailto:{{ $vendor_search_results->email }}"><button
                                                        class="button3 button_new"
                                                        style="border-radius: 50px; width:auto; padding:5px 10px;">
                                                        <i class="fa fa-envelope-o"
                                                            style="font-size: 20px; padding-top: 5px;"></i>
                                                        &nbsp;{{ $vendor_search_results->email }}
                                                    </button></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
            @endif

        </div>
        <div class="clearfix"></div>
    </div>
    </div>
    </div>

@stop
