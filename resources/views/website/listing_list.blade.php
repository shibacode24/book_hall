<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listing</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/mmenu.css">
  <link rel="stylesheet" href="css/style.css" id="colors">
  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
    type="text/css">
</head>
<style>
  @media (max-width: 1024px) {
.location1 {
width:100% !important;
margin-left:1% !important;
}
}
</style>
<body>

  <!-- Preloader Start -->
  <div class="preloader">
    <div class="utf-preloader">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Wrapper -->
  <div id="main_wrapper">
    <header id="header_part">
      <div id="header">
        <div class="container">
          <div class="utf_left_side">
            <div id="logo"> <a href="index.html"><img src="images/weeding-logo.png" alt=""></a> </div>
            <div class="mmenu-trigger">
              <button class="hamburger utfbutton_collapse" type="button">
                <span class="utf_inner_button_box">
                  <span class="utf_inner_section"></span>
                </span>
              </button>
            </div>
            <nav id="navigation" class="style_one">
              <ul id="responsive">
                <li><a class="current" href="{{route('website_index')}}">Home</a>
              
                </li>			  
                <li><a href="listing-list.html">All Listing</a>
                
                </li>
           
                          
              </ul>
            </nav>
            <div class="clearfix"></div>
          </div>
          <div class="utf_right_side">
            <div class="header_widget"> 
          
              <a href="#dialog_signin_part"class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> Sign In</a>
              <a href="dashboard.html" class="button border with-icon"><i class="sl sl-icon-user"></i> Add Listing</a>
            </div>
          </div>
          <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
            <div class="small_dialog_header">
              <h3>Sign In</h3>
            </div>
            <div class="utf_signin_form style_one">
              <ul class="utf_tabs_nav">
                <li class=""><a href="#tab1">Log In</a></li>
                <li><a href="#tab2">Register</a></li>
              </ul>
              <div class="tab_container alt">
                <div class="tab_content" id="tab1" style="display:none;">
                  <form method="post" class="login">
                    <p class="utf_row_form utf_form_wide_block">
                      <label for="username">
                        <input type="text" class="input-text" name="username" id="username" value=""
                          placeholder="Username" />
                      </label>
                    </p>
                    <p class="utf_row_form utf_form_wide_block">
                      <label for="password">
                        <input class="input-text" type="password" name="password" id="password"
                          placeholder="Password" />
                      </label>
                    </p>
                    <div class="utf_row_form utf_form_wide_block form_forgot_part"> 
                      <div class="checkboxes fl_right">
                        <input id="remember-me" type="checkbox" name="check">
                        <label for="remember-me">Forgot Password?</label>
                      </div>
                    </div>
                    <div class="utf_row_form">
                      <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                    </div>
               
                  </form>
                </div>

                <div class="tab_content" id="tab2" style="display:none;">
                  <form method="post" class="register">
                    <p class="utf_row_form utf_form_wide_block">
                      <label for="username2">
                        <input type="text" class="input-text" name="username" id="username2" value=""
                          placeholder="Username" />
                      </label>
                    </p>
                    <p class="utf_row_form utf_form_wide_block">
                      <label for="email2">
                        <input type="text" class="input-text" name="email" id="email2" value="" placeholder="Email" />
                      </label>
                    </p>
                    <p class="utf_row_form utf_form_wide_block">
                      <label for="password1">
                        <input class="input-text" type="password" name="password1" id="password1"
                          placeholder="Password" />
                      </label>
                    </p>
                    <p class="utf_row_form utf_form_wide_block">
                      <label for="password2">
                        <input class="input-text" type="password" name="password2" id="password2"
                          placeholder="Confirm Password" />
                      </label>
                    </p>
                    <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="clearfix"></div>
    <div id="titlebar" class="gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index_1.html">Home</a></li>
                <li>All Listing</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 listing_grid_item">
          <div class="listing_filter_block">
            <div class="col-md-2 col-xs-2">
              <div class="utf_layout_nav"> <a href="#" class="grid active"><i class="fa fa-th"></i></a> 
                <!-- <a
                  href="listings_list_with_sidebar.html" class="list"><i class="fa fa-align-justify"></i></a>  -->
                </div>
            </div>
            <div class="col-md-10 col-xs-10">
              <!-- <div class="sort-by utf_panel_dropdown sort_by_margin float-right"> <a href="#">Destination</a>
                <div class="utf_panel_dropdown-content">
                  <input class="distance-radius" type="range" min="1" max="999" step="1" value="1"
                    data-title="Select Range">
                  <div class="panel-buttons">
                    <button class="panel-apply">Apply</button>
                  </div>
                </div>
              </div> -->
              <div class="sort-by">
                <div class="utf_sort_by_select_item sort_by_margin">
                  <select data-placeholder="Sort by Listing" class="utf_chosen_select_single">
                    <option>Sort by City</option>
                    <option>Amravati</option>
                    <option>Akola</option>
                    <option>Yavtmal</option>
                    <option>Dhamangao</option>
             
                  </select>
                </div>
              </div>
              <div class="sort-by">
                <div class="utf_sort_by_select_item sort_by_margin">
                  <select data-placeholder="Categories:" class="utf_chosen_select_single">
                    <option>Categories</option>
                    <option>Indoor Wedding Halls</option>
                    <option>Outdoor Wedding Venues</option>
                    <option>Traditional Wedding Halls</option>
                    <option>Modern Wedding Halls</option>
                    <option>Basic Wedding Halls</option>
                  
                  </select>
                </div>
              </div>
              <!-- <div class="sort-by">
                <div class="utf_sort_by_select_item utf_search_map_section">
                  <ul>
                    <li><a class="utf_common_button" href="#"><i class="fa fa-dot-circle-o"></i>Near Me</a></li>
                  </ul>
                </div>
              </div> -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="utf_carousel_item"> <a href="listings-details.html" class="utf_listing_item-container compact">
                  <div class="utf_listing_item"> <img src="images/grand-mehfil.jpg" alt="">
    
    
                    <div class="utf_listing_item_content">
                      <div class="utf_listing_prige_block">
                        <!-- <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span> -->
                      </div>
                      <h3>Grang Mehfil</h3>
                      <span><i class="fa fa-map-marker"></i> Camp Road, Amravati</span>
                      <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
                    </div>
                  </div>
                  <div class="utf_star_rating_section" data-rating="4.5">
                    <div class="utf_counter_star_rating">(4.5)</div>
                    <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                    <span class="like-icon"></span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="utf_carousel_item"> <a href="listings-details.html" class="utf_listing_item-container compact">
                  <div class="utf_listing_item"> <img src="images/lotusin.jpg" alt="">
    
    
                    <div class="utf_listing_item_content">
                      <div class="utf_listing_prige_block">
                        <!-- <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span> -->
                      </div>
                      <h3>Lotus In</h3>
                      <span><i class="fa fa-map-marker"></i> Rahatgaon, Amravati</span>
                      <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
                    </div>
                  </div>
                  <div class="utf_star_rating_section" data-rating="4.5">
                    <div class="utf_counter_star_rating">(4.5)</div>
                    <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                    <span class="like-icon"></span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="utf_carousel_item"> <a href="listings-details.html" class="utf_listing_item-container compact">
                  <div class="utf_listing_item"> <img src="images/muktai.png" alt="">
    
    
                    <div class="utf_listing_item_content">
                      <div class="utf_listing_prige_block">
                        <!-- <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span> -->
                      </div>
                      <h3>Muktai Lawns And Wedding Hall</h3>
                      <span><i class="fa fa-map-marker"></i>Amravati</span>
                      <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
                    </div>
                  </div>
                  <div class="utf_star_rating_section" data-rating="4.5">
                    <div class="utf_counter_star_rating">(4.5)</div>
                    <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                    <span class="like-icon"></span>
                  </div>
                </a>
              </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="utf_carousel_item"> <a href="listings-details.html" class="utf_listing_item-container compact">
                  <div class="utf_listing_item"> <img src="images/telai.png" alt="">
    
                    <div class="utf_listing_item_content">
                      <div class="utf_listing_prige_block">
                        <!-- <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span> -->
                      </div>
                      <h3>Telai </h3>
                      <span><i class="fa fa-map-marker"></i> V M V Road, Amravati</span>
                      <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
                    </div>
                  </div>
                  <div class="utf_star_rating_section" data-rating="4.5">
                    <div class="utf_counter_star_rating">(4.5)</div>
                    <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                    <span class="like-icon"></span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="utf_carousel_item"> <a href="listings-details.html" class="utf_listing_item-container compact">
                  <div class="utf_listing_item"> <img src="images/naivaidyam.png" alt="">
    
                    <div class="utf_listing_item_content">
                      <div class="utf_listing_prige_block">
                        <!-- <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span> -->
                      </div>
                      <h3>Naivaidyam</h3>
                      <span><i class="fa fa-map-marker"></i> Badnera, Amravati</span>
                      <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
                    </div>
                  </div>
                  <div class="utf_star_rating_section" data-rating="4.5">
                    <div class="utf_counter_star_rating">(4.5)</div>
                    <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                    <span class="like-icon"></span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="utf_carousel_item"> <a href="listings-details.html" class="utf_listing_item-container compact">
                  <div class="utf_listing_item"> <img src="images/rajwada.jpg" alt="">
    
                    <div class="utf_listing_item_content">
                      <div class="utf_listing_prige_block">
                        <!-- <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span> -->
                      </div>
                      <h3>Rajwada</h3>
                      <span><i class="fa fa-map-marker"></i> Kathora, Amravati</span>
                      <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
                    </div>
                  </div>
                  <div class="utf_star_rating_section" data-rating="4.5">
                    <div class="utf_counter_star_rating">(4.5)</div>
                    <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                    <span class="like-icon"></span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-12 centered_content"></div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="utf_pagination_container_part margin-top-20 margin-bottom-70">
                <nav class="pagination">
                  <ul>
                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                    <li><a href="#" class="current-page">1</a></li>
                    <li><a href="#">2</a></li>
              
                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>


    <!-- Footer -->
    <div id="footer" class="footer_sticky_part"> 
			<div class="container">
			  <div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12"> 
					<!-- <h4>About Us</h4> -->
					<div class="utf_sidebar_textbox">
						<ul class="utf_contact_detail">
						  <li><img src="images/weeding-logo1.png" width="200" height="80"></li>
						</ul>
					  </div>	
					<p><ul class="utf_social_icon rounded ">
						<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
            <li><a class="youtube" href="#"><i class="icon-youtube"></i></a></li>

					  </ul></p>          
				  </div>
				<div class="col-md-3 col-sm-3 col-xs-6">
				  <h4>Useful Links</h4>
				  <ul class="social_footer_link">
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms & Condition</a></li>
					<li><a href="#">Refund & Cancellation</a></li>
				  </ul>
				</div>
			
				<div class="col-md-2 col-sm-3 col-xs-6">
				  <h4>Pages</h4>
				  <ul class="social_footer_link">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Listing</a></li>
					<li><a href="#">Listing Details</a></li>
					<li><a href="#">Add Listing</a></li>
				  </ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
				  <h4>Get In Touch</h4>
				  <ul class="social_footer_link">
					<li>&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></span></li>
					<li>&nbsp;&nbsp;&nbsp;<i class="fa fa-phone-square" aria-hidden="true"></i><a href="mailto:info@example.com">+91 8876543219</a></span></li>
				
				  </ul>
				</div>        
			  </div>
			  
			  <div class="row">
				<div class="col-md-12">
				  <div class="footer_copyright_part">Copyright © 2023 All Rights Reserved.</div>
				</div>
		
			  </div>
			</div>
		  </div>  
    <div id="bottom_backto_top"><a href="#"></a></div>
  </div>

  <!-- Scripts -->
  <script src="scripts/jquery-3.4.1.min.js"></script>
  <script src="scripts/chosen.min.js"></script>
  <script src="scripts/slick.min.js"></script>
  <script src="scripts/rangeslider.min.js"></script>
  <script src="scripts/magnific-popup.min.js"></script>
  <script src="scripts/jquery-ui.min.js"></script>
  <script src="scripts/mmenu.js"></script>
  <script src="scripts/tooltips.min.js"></script>
  <script src="scripts/color_switcher.js"></script>
  <script src="scripts/jquery_custom.js"></script>

  <!-- Style Switcher -->

</body>

</html>