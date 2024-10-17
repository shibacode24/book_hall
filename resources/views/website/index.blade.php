@extends('website.layout')
@section('content')

    <div class="clearfix"></div>

    <div class="slider" id="slider1">
        <!-- Slides -->
        @foreach ($slider as $sliders)
            <div style="background-image: url('{{ asset('public/panel/images/slider_name/' . $sliders->slider) }}')">
            </div>
        @endforeach
        {{-- <div style="background-image:url(images/hall2.jpg)"></div>
      <div style="background-image:url(images/hall1.jpg)"></div> --}}
        <!-- <div style="background-image:url(images/house2.jpg)"></div> -->
        <!-- The Arrows -->
        <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
            </svg></i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) ">
                </path>
            </svg></i>

    </div>

    <div class="search_container_block home_main_search_part main_search_block mt1">
        <div class="main_inner_search_block" id="hall">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Find Your Nearby <span class="typed-words"></span></h2>
                        <h4 style="color:gray;">Find some of the best venues from around the city from our partners.</h4>
                        <form action="{{ route('website_index') }}" method="GET">
                            <div class="main_input_search_part">
                               <div class="main_input_search_part_item intro-search-field">
                                    <select name="city" class="selectpicker default" data-live-search="true"
                                        data-selected-text-format="count" data-size="5" title="Select Location">
                                        <option disabled>Location</option>
                                        @foreach ($city as $citys)
                                            <option value="{{ $citys->id }}"
                                                @if (app()->request->input('city') == $citys->id || (empty(app()->request->input('city')) && $citys->city == 'Amravati, Maharashtra, India')) 
                                                    selected 
                                                @endif>{{ $citys->city }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                               <div class="main_input_search_part_item intro-search-field">
                                    <select name="category" class="selectpicker default" data-placeholder="All Categories"
                                        title="All Categories" data-live-search="true" data-selected-text-format="count" data-size="5">
                                        <option value="" @if (empty(app()->request->input('category'))) selected @endif>All</option>
                                        @foreach ($category as $categorys) <!-- No withTrashed() method -->
                                            <option value="{{ $categorys->id }}"
                                                @if (app()->request->input('category') == $categorys->id) selected @endif>
                                                {{ $categorys->category }}
                                            </option>
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
  
    <section class="padding-bottom-70" data-background-color="#f9f9f9" id="hall1">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-45" style="margin-top:80px;">Most Popular Wedding Hall</h3>
                </div>
             @if($approve_listing->count() == 0)
           
                <div class="col-md-12">
                    <h4 class="headline_part centered margin-bottom-45" style="color: red">Results not found</h4>
                </div>
                @else
                @foreach ($approve_listing as $approve_listings)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ route('listing_page', $approve_listings->id) }}"
                            class="utf_listing_item-container compact">
                            <div class="utf_carousel_item">
                                <div class="utf_listing_item"> <img
                                        src="{{ asset('public/panel/images/front_page_image/' . $approve_listings->front_page_image) }}"
                                        alt="">
                                    <div class="utf_listing_item_content">
                                        <div class="utf_listing_prige_block">
                                        </div>
                                        <h3>{{ $approve_listings->name }}</h3>
                                        <span><i class="fa fa-map-marker"></i> {{ $approve_listings->address }}</span>
                                        <span><i class="fa fa-phone"></i> {{ $approve_listings->contact_no }}</span>
                                    </div>
                                </div>

                                <div class="utf_star_rating_section"
                                    data-rating="{{ $approve_listings->ListingReview->average_rating }}">
                                    <div class="utf_counter_star_rating">
                                        ({{ number_format($approve_listings->ListingReview->average_rating, 1) }})
                                        /
                                        ({{ $approve_listings->ListingReview->number_of_reviews }} Reviews)
                                    </div>
                                    {{-- <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span> 
                                    <span class="like-icon"></span> --}}
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
               
                @endif
                
            </div>
        </div>
    </section>


    <div class="parallax" data-background="{{ asset('public/images/wedding_hall.png') }}" id="about">
        <div class="utf_text_content white-font">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <h2>About Us</h2>
                        <h3 style="color:white;"><b>BookMyWeddingHall</b></h3>
                        <p>We help couples & families to discover wedding venues, vendors and ideas with online tools to
                            help them create their ideal wedding.</p>

                        <h3><b>Plan your wedding with Us</b></h3>
                        <p>BookMyWeddingHall is an Indian wedding planning platform where you can find the best wedding
                            venues and vendors, with prices and reviews at the click of a button. Whether you are looking to
                            hire wedding planners or looking for the top photographers, or just some ideas and inspiration
                            for your wedding. BookMyWeddingHall can help you solve your wedding planning woes through its
                            unique features with a checklist, detailed vendor list, gallery - you won't need to spend hours
                            to search venues for a wedding anymore.

                        </p>
                        <a href="{{ route('about') }}" class="button3 button_new margin-top-25"
                            style="font-weight:400;">Know
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="fullwidth_block padding-bottom-70" data-background-color="#f9f9f9" id="work">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="headline_part centered margin-top-80">How It Works? <span class="margin-top-10">Discover &
                            Connect With Great Local Businesses</span> </h2>
                </div>
            </div>
            <div class="row container_icon">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="box_icon_two box_icon_with_line" style="height:400px;"> <i class="im im-icon-Map-Marker2"></i>
                        <h3>Select Wedding Destination</h3>
                        <p>Select your preferred wedding location available on platform. </p><br>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="box_icon_two box_icon_with_line"  style="height:400px;"> <i class="im im-icon-Mail-Add"></i>
                        <h3>Browse Wedding Venues</h3>
                        <p>Bookmyweddinghall is an Indian wedding planning platform where you can find the best wedding
                            venues available in locality.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="box_icon_two box_icon_with_line"  style="height:400px;"> <i class="im im-icon-Administrator"></i>
                        <h3>Make a Reservation</h3>
                        <p>Check availability of wedding hall on calendar & make reservations.</p><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="utf_testimonial_part fullwidth_block" style="padding-top:40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline_part centered">What Say Our Customers</h3>
                </div>
            </div>
        </div>
        <div class="fullwidth_carousel_container_block margin-top-20">
            <div class="utf_testimonial_carousel testimonials">
                @foreach ($approve_listing as $listing)
                    @foreach ($listing->reviews as $review) {{-- Iterate over reviews associated with the listing --}}
                        <div class="utf_carousel_review_part">
                            <div class="utf_testimonial_box">
                                <div class="testimonial">
                                    @php
                                        $truncatedText = Illuminate\Support\Str::limit($review->review, 200, '...');
                                    @endphp
                                    <div class="truncated-text">{{ $truncatedText }}</div>
                                    <div class="full-text hidden">{{ $review->review }}</div>
                                    @if (strlen($review->review) > 200)
                                        <a href="#" class="read-more">Read more</a>
                                    @endif
                                </div>
                            </div>
                             <div class="utf_testimonial_author">
                                @if ($review->usernameforreview)
                                    {{-- Check if user exists --}}
                                    {{-- <img src="{{ asset('public/images/photos/' . $review->usernameforreview->photo) }}"
                                        alt="" style="height: 70px;width:70px;"> --}}

                                    @if ($review->usernameforreview->photo)
                                        <img src="{{ asset('public/images/photos/' . $review->usernameforreview->photo) }}"
                                            style="height: 70px;width:70px;">
                                    @elseif ($review->usernameforreview->gender == 'Female')
                                        <img src="{{ asset('public/images/female.png') }}"
                                            style="height: 70px;width:70px;">
                                    @else
                                        <img src="{{ asset('public/images/male.png') }}"
                                            style="height: 70px;width:70px;">
                                    @endif


                                    <h4>{{ $review->usernameforreview->name }}</h4>
                                @else
                                    <p>Anonymous</p> {{-- Display a message if user is not available --}}
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endforeach




            </div>
        </div>
    </section>

    <!---modal--->


    <!-- Footer -->
@stop
@section('js')

    <script>
        $(document).ready(function() {
            $('.read-more').on('click', function(e) {
                e.preventDefault();
                var $testimonial = $(this).closest('.testimonial');
                $testimonial.find('.truncated-text').toggleClass('hidden');
                $testimonial.find('.full-text').toggleClass('hidden');
                $(this).remove(); // Remove the "Read more" link
                $testimonial.append('<a href="#" class="read-less">Read less</a>'); // Add "Read less" link
            });

            // Event handler for "Read less" link
            $(document).on('click', '.read-less', function(e) {
                e.preventDefault();
                var $testimonial = $(this).closest('.testimonial');
                $testimonial.find('.truncated-text').toggleClass('hidden');
                $testimonial.find('.full-text').toggleClass('hidden');
                $(this).remove(); // Remove the "Read less" link
                $testimonial.append('<a href="#" class="read-more">Read more</a>'); // Add "Read more" link
            });
        });
    </script>
    <script>
        window.addEventListener('beforeunload', function () {
            console.log('hello');
            // Use sendBeacon to call the logout route on window close
            navigator.sendBeacon("{{ route('log_out_vendor') }}");
        });
    </script>

@stop
