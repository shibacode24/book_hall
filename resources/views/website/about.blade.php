@extends('website.layout')
@section('content')

            <div class="clearfix"></div>

            <div id="titlebar" class="gradient margin-bottom-0"
                style="background-image: url({{ asset('public/images/page-title.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>About Us</h2>
                            <nav id="breadcrumbs">
                                <p style="color:#fff; text-transform: lowercase;">We HELP COUPLES & FAMILIES TO DISCOVER
                                    WEDDING VENUES, VENDORS AND IDEAS WITH<br> ONLINE TOOLS TO HELP THEM CREATE THEIR IDEAL
                                    WEDDING.</p>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <section class="fullwidth_block padding-bottom-40 box_icon_two box_icon_with_line"
                data-background-color="#f9f9f9" style="margin-top:0px; border-radius:0;">
                <div class="container ">
                    <div class="row container_icon">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Plan your wedding with Us</h2>
                            <p align="justify">BookMyWeddingHall is an Indian wedding planning platform where you can find
                                the best wedding venues and vendors, with prices and reviews at the click of a button.
                                Whether you are looking to hire wedding planners or looking for
                                the top photographers, or just some ideas and inspiration for your wedding.
                                BookMyWeddingHall can help you solve your wedding planning woes through its unique features
                                with a checklist, detailed vendor list, gallery - you won't
                                need to spend hours to search venues for a wedding anymore.</p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="parallax" data-background="{{ asset('public/images/about_us_bg.png') }}">
                <div class="utf_text_content white-font">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <img src="{{ asset('public/images/weeding-logo1.png') }}" style="width:20%; height:20%;">
                                <h4 style="font-size:35px;">Wedding planning starts here</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="fullwidth_block padding-top-60" data-background-color="#f9f9f9"
                style="margin-top:0px; border-radius:0;">
                <div class="container ">
                    <div class="row container_icon">
                        <div class="col-md-6 col-sm-6 col-xs-12 padding-top-0" style="vert">
                            <h2>Wedding venue directory</h2>
                            <p align="justify">BookMyWeddingHall is an Indian wedding planning platform where you can find
                                the best wedding venues and vendors, with prices and reviews at the click of a button.</p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{ asset('public/images/screenshot.png') }}">
                        </div>
                    </div>
                </div>
                <hr>
            </section>


            <section class="fullwidth_block padding-bottom-70" data-background-color="#f9f9f9"
                style="margin-top:0px; border-radius:0;">
                <div class="container ">
                    <div class="row container_icon">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{ asset('public/images/review.png') }}">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding-top-100">
                            <h2>Reviews</h2>
                            <p align="justify">Reviews will helps you to find the best wedding destinations for your
                                wedding.</p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Footer -->
        
    @stop
