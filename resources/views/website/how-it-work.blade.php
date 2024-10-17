@extends('website.layout')
@section('content')
        <div class="clearfix"></div>

          <div id="titlebar" class="gradient margin-bottom-0" style="background-image: url({{asset('public/images/page-title.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>How It Works</h2>
                    </div>
                </div>
            </div>
        </div>

         <section class="fullwidth_block padding-bottom-40 box_icon_two box_icon_with_line" data-background-color="#f9f9f9" style="margin-top:0px; border-radius:0;">
            <div class="container ">
                <div class="row" style="margin-left:0px; margin-right:0px;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Plan your wedding with Us</h2>
                        <p align="justify">BookMyWeddingHall is an Indian wedding planning platform where you can find the best wedding venues and vendors, with prices and reviews at the click of a button. Whether you are looking to hire wedding planners or looking for
                            the top photographers, or just some ideas and inspiration for your wedding. BookMyWeddingHall can help you solve your wedding planning woes through its unique features with a checklist, detailed vendor list, gallery - you won't
                            need to spend hours to search venues for a wedding anymore.</p>
                    </div>
                </div>
            </div>
        </section>


		      <section class="fullwidth_block padding-bottom-70" data-background-color="#f9f9f9" id="work"> 
	  <div class="container">
		<div class="row">
		  <div class="col-md-8 col-md-offset-2">
			<h2 class="headline_part centered margin-top-80">How It Works? <span class="margin-top-10">Discover & Connect With Great Local Businesses</span> </h2>
		  </div>
		</div>
		<div class="row container_icon"> 
		  <div class="col-md-4 col-sm-4 col-xs-12">
			<div class="box_icon_two box_icon_with_line"> <i class="im im-icon-Map-Marker2"></i>
			  <h3>Select Wedding Destination</h3>
			  <p>Select your preferred  wedding location available on platform. </p><br>
			</div>
		  </div>
		  
		  <div class="col-md-4 col-sm-4 col-xs-12">
			<div class="box_icon_two box_icon_with_line"> <i class="im im-icon-Mail-Add"></i>
			  <h3>Browse Wedding Venues</h3>
			  <p>Bookmyweddinghall is an Indian wedding planning platform where you can find the best wedding venues available in locality.</p>
			</div>
		  </div>
		  
		  <div class="col-md-4 col-sm-4 col-xs-12">
			<div class="box_icon_two"> <i class="im im-icon-Administrator"></i>
			  <h3>Make a Reservation</h3>
			  <p>Check availability of wedding hall on calendar & make reservations.</p><br>
			</div>
		  </div>
		</div>
	  </div>
  </section>
		
		
        <div class="parallax" data-background="{{asset('public/images/about_us_bg.png')}}">
            <div class="utf_text_content white-font">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <img src="{{asset('public/images/weeding-logo1.png')}}" style="width:20%; height:20%;">
                            <h4 style="font-size:35px;"> Latest Wedding trends </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		    <section class="fullwidth_block padding-bottom-40  box_icon_with_line" data-background-color="#f9f9f9" style="margin-top:0px; border-radius:0;">
            <div class="container ">
                <div class="row container_icon" align="center">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Showcase your wedding business</h2>
                        <p style="font-size:17px;" align="center">Showcase wedding services on bookmyweddinghall. Reach more engaged couples and start receiving and managing enquiries with our easy tools. </p>
							<a href="{{ route('vendor_registration') }}" class="button border with-icon"
                                    style="width:240px;">Vendor Registration</a>
						<a href="{{ route('business_listing_login') }}" class="button border with-icon"
                                    style="width:180px;">Free Business
                                    Listing</a>
                    </div>
                </div>
            </div>
        </section>
		
		
      
@stop