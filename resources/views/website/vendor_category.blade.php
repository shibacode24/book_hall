@extends('website.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <!-- <div class="listing_filter_block">
                <div class="col-md-2 col-xs-2">
                    <div class="utf_layout_nav"> <a href="listings_grid_with_sidebar.html" class="grid"><i class="fa fa-th"></i></a> <a href="#" class="list active"><i class="fa fa-align-justify"></i></a> </div>
                </div>
                <div class="col-md-10 col-xs-10">
                    <div class="sort-by utf_panel_dropdown sort_by_margin float-right"> <a href="#">Destination</a>
                        <div class="utf_panel_dropdown-content">
                            <input class="distance-radius" type="range" min="1" max="999" step="1" value="1" data-title="Select Range">
                            <div class="panel-buttons">
                                <button class="panel-apply">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="sort-by">
                        <div class="utf_sort_by_select_item sort_by_margin">
                            <select data-placeholder="Sort by Listing" class="utf_chosen_select_single">
          <option>Sort by Listing</option>
          <option>Latest Listings</option>
          <option>Popular Listings</option>
          <option>Price (Low to High)</option>
          <option>Price (High to Low)</option>
          <option>Highest Reviewe</option>
          <option>Lowest Reviewe</option>                  
          <option>Newest Listing</option>
          <option>Oldest Listing</option>
          <option>Random Listings</option>
        </select>
                        </div>
                    </div>
                    <div class="sort-by">
                        <div class="utf_sort_by_select_item sort_by_margin">
                            <select data-placeholder="Categories:" class="utf_chosen_select_single">
          <option>Categories</option>	
          <option>Restaurant</option>
          <option>Health</option>
          <option>Hotels</option>
          <option>Real Estate</option>                  
          <option>Fitness</option>                  
          <option>Shopping</option>
          <option>Travel</option>
          <option>Shops</option>
          <option>Nightlife</option>
          <option>Events</option>
        </select>
                        </div>
                    </div>
                    <div class="sort-by">
                        <div class="utf_sort_by_select_item utf_search_map_section">
                            <ul>
                                <li><a class="utf_common_button" href="#"><i class="fa fa-dot-circle-o"></i>Near Me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
@foreach ($vendor_search_result as $vendor_search_results)
<div class="col-lg-12 col-md-12">
    <div class="utf_listing_item-container list-layout" style="padding: 25px;">
        <a href="#" class="utf_listing_item" style="border-radius: 20px;">
            <div class="utf_listing_item-image" style="border-radius: 20px;">
                <img src="images/utf_listing_item-01.jpg">
                <!-- <span class="like-icon"></span>
                <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> -->
                <!-- <div class="utf_listing_prige_block utf_half_list">
                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $45</span>
                    <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                </div> -->
            </div>
            <!-- <span class="utf_open_now">Open Now</span> -->
            <div class="utf_listing_item_content">
                <div class="utf_listing_item-inner">
                    <h3 style="font-size: 24px; font-weight: 700;">Kshitij Palace & Lawn Amravati</h3>
                    <span><img src="{{asset('public/images/verified.png')}}" style="width: 15%; height: 15%;"></span>
                    <span style="font-size: 16px;"><i class="fa fa-map-marker" style="font-size: 20px;"></i> The Ritz-Carlton, Hong Kong</span>
                    <button class="button3 button_new" style="border-radius:50px;"><i class="fa fa-phone" style="font-size: 20px; padding-top: 5px;"></i> &nbsp;+919898989898</button>
                    <!-- <a class="button3 button_new border with-icon" style="padding : 2px 12px; margin: 0px 5px; border-radius:5px;">Free Business
                        Listing</a> -->

                    <!-- <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>
                    </div> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p> -->
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach
                

                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout" style="padding: 25px;">
                        <a href="#" class="utf_listing_item" style="border-radius: 20px;">
                            <div class="utf_listing_item-image" style="border-radius: 20px;">
                                <img src="images/utf_listing_item-01.jpg">
                                <!-- <span class="like-icon"></span>
                                <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> -->
                                <!-- <div class="utf_listing_prige_block utf_half_list">
                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $45</span>
                                    <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                </div> -->
                            </div>
                            <!-- <span class="utf_open_now">Open Now</span> -->
                            <div class="utf_listing_item_content">
                                <div class="utf_listing_item-inner">
                                    <h3 style="font-size: 24px; font-weight: 700;">Kshitij Palace & Lawn Amravati</h3>
                                    <span><img src="{{asset('public/images/verified.png')}}" style="width: 15%; height: 15%;"></span>
                                    <span style="font-size: 16px;"><i class="fa fa-map-marker" style="font-size: 20px;"></i> The Ritz-Carlton, Hong Kong</span>
                                    <button class="button3 button_new" style="border-radius:50px;"><i class="fa fa-phone" style="font-size: 20px; padding-top: 5px;"></i> &nbsp;+919898989898</button>
                                    <!-- <a class="button3 button_new border with-icon" style="padding : 2px 12px; margin: 0px 5px; border-radius:5px;">Free Business
                                        Listing</a> -->

                                    <!-- <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                    </div> -->
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout" style="padding: 25px;">
                        <a href="#" class="utf_listing_item" style="border-radius: 20px;">
                            <div class="utf_listing_item-image" style="border-radius: 20px;">
                                <img src="images/utf_listing_item-01.jpg">
                                <!-- <span class="like-icon"></span>
                                <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> -->
                                <!-- <div class="utf_listing_prige_block utf_half_list">
                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $45</span>
                                    <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                </div> -->
                            </div>
                            <!-- <span class="utf_open_now">Open Now</span> -->
                            <div class="utf_listing_item_content">
                                <div class="utf_listing_item-inner">
                                    <h3 style="font-size: 24px; font-weight: 700;">Kshitij Palace & Lawn Amravati</h3>
                                    <span><img src="images/verified.png" style="width: 15%; height: 15%;"></span>
                                    <span style="font-size: 16px;"><i class="fa fa-map-marker" style="font-size: 20px;"></i> The Ritz-Carlton, Hong Kong</span>
                                    <button class="button3 button_new" style="border-radius:50px;"><i class="fa fa-phone" style="font-size: 20px; padding-top: 5px;"></i> &nbsp;+919898989898</button>
                                    <!-- <a class="button3 button_new border with-icon" style="padding : 2px 12px; margin: 0px 5px; border-radius:5px;">Free Business
                                        Listing</a> -->

                                    <!-- <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                    </div> -->
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
         
        </div>

        <!-- Sidebar -->
        {{-- <div class="col-lg-3 col-md-3">
            <div class="sidebar">
                <div class="utf_box_widget  margin-bottom-75">
                    <h3><i class="sl sl-icon-folder-alt"></i> Categories</h3>
                    <ul class="utf_listing_detail_sidebar">
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Travel</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Nightlife</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Fitness</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Real Estate</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Restaurant</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Dance Floor</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</div>


@stop