@extends('website.layout')
@section('content')
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
      <div class="col-md-8">
        <section id="contact" class="margin-bottom-10">
          <h4><i class="sl sl-icon-phone"></i> Fill the form now</h4>          
          <form id="contactform">
            <div class="row">
              <div class="col-md-6">  
				  <input name="name" type="text" placeholder="Frist Name" required />                
              </div>
              <div class="col-md-6">                
                  <input name="name" type="text" placeholder="Last Name" required />                
              </div>
              <div class="col-md-6">                
                  <input name="email" type="email" placeholder="Email" required />                
              </div>
              <div class="col-md-6">
                  <input name="number" type="text" placeholder="Phone Number" required />              
              </div>
			  <div class="col-md-12">
				  <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
			  </div>
            </div>            
            <input type="submit" class="submit button" id="submit" value="Submit" />
          </form>
        </section>
      </div>
      
      <div class="col-md-4">
		  <h3>Get in touch with us</h3>
		  
		    	<div class="utf_box_widget margin-bottom-20">
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
                            <img src="https://bookmyweddinghall.com/public/images/weeding-logo1.png" style="width:20%; height:20%;">
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
