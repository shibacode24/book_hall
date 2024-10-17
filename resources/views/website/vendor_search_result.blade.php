@extends('website.layout')
@section('content')

<div class="search_container_block home_main_search_part main_search_block mt1">
    <div class="main_inner_search_block" id="hall">
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <h3>Find Your Nearby
                       </h3>
                    <!--       <h4 style="color:gray;">Find some of the best venues from around the city from our partners.</h4>-->
                    <form action="{{ route('vendor_search_result') }}" method="get">
                        <input type="hidden" name="category" value="{{$category}}">
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
                                    @if ($cities)
                                        @foreach ($cities as $city)
                                            <option>{{ $city->city }}</option>
                                        @endforeach
                                    @endif
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
            <div class="col-lg-9 col-md-9">
                <div class="row">

                    @if (count($vendor_search_result) == 0)
                        <div class="col-lg-12 col-md-12">
                            <p>Data Not Available</p>
                        </div>
                    @else
                        @foreach ($vendor_search_result as $vendor_search_results)
                            <div class="col-lg-12 col-md-12">
                                <div class="utf_listing_item-container list-layout" style="padding: 25px;">
                                    <a href="#" class="utf_listing_item" style="border-radius: 20px;">
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
                                                    {{ $vendor_search_results->city }}, {{ $vendor_search_results->state }}
                                                </span>
                                                <button class="button3 button_new" style="border-radius: 50px;">
                                                    <i class="fa fa-phone" style="font-size: 20px; padding-top: 5px;"></i>
                                                    &nbsp;{{ $vendor_search_results->phone_number }}
                                                </button>

                                                @if ($vendor_search_results->alternate_phone_number)
                                                <button class="button3 button_new" style="border-radius: 50px;">
                                                    <i class="fa fa-phone" style="font-size: 20px; padding-top: 5px;"></i>
                                                    &nbsp;{{ $vendor_search_results->alternate_phone_number }}
                                                </button>
                                                @endif
                                               

                                                <button class="button3 button_new" style="border-radius: 50px;">
                                                    <i class="fa fa-envelope-o" style="font-size: 20px; padding-top: 5px;"></i>
                                                    &nbsp;{{ $vendor_search_results->email }}
                                                </button>

                                            </div>
                                          
                                        </div>
                                    </a>
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
