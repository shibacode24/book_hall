<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Wedding</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('public/panel/logo/favicon.png') }}" type="image/x-icon" />
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('public/panel/css/theme-default.css') }}" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('public/panel/css/notification.css') }}" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('public/panel/css/fullcalender.css') }}" />

    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <style>
        .mjbo {
            outline: 2px solid #e60c0c;
            outline-offset: 2px;
        }

        .mjprofile {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 20px;
            border-color: rgba(0, 0, 0, .2);
            color: #000;
            -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
        }

        .mjks {
            background-color: #8a2020;
            color: #FFF !important;
        }

        .mjks:hover {
            background-color: #a8dbee;
            color: #fff !important;
        }

        .tree {
            color: #000000;
        }

        .tree:hover {
            color: #003300;
        }

        .subtree {
            color: #006699;
        }

        .subtree:hover {
            color: #0099cc;
        }

        .subtreeactive {
            color: #006699;
        }

        .mjksactive {
            background-color: #006699;
            color: #000 !important;
        }

        .mjkslink {
            background-color: #ffffff;
            color: white;

        }

        .mjkslink:hover {
            background-color: #006699;

        }
    </style>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top">
        <!-- PAGE CONTENT -->
        <div class="page-content">


            <div class="page-content-wrap">



                <div class="row ">
                    <form id="registerForm" action="" method="post" enctype="multipart/form-data">

                        <div class="col-md-12">
                            <div class="panel panel-defult" style="padding-top: 10px; padding-bottom: 10px;">
                                <div class="panel-body">

                                    <div class="add_utf_listing_section margin-top-45">
                                        <div class="utf_add_listing_part_headline_part">
                                            <h3><i class="sl sl-icon-list"></i>Add Listing</h3>
                                        </div>

                                        <div class="row with-forms">
                                            <div class="col-md-4">
                                                <label>City :
                                                    <span>{{$view_listing->city_name->city ?? ''}}</span>
                                                </label>

                                            </div>

											 @if ($view_listing->location_city == 'other')
                                                <div class="col-md-4">
                                                    <label>Other City :
                                                        <span>{{$view_listing->other_city}}</span>
                                                    </label>
    
                                                </div>
                                                @endif
											
                                            <div class="col-md-4">
                                                <label>Address :
                                                    <span>{{$view_listing->location_address}}</span>
                                                </label>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                <div class="panel-body">
                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-picture"></i>Business Info</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Business Name :
                                                <span>{{$view_listing->name}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Contact No :
                                                <span>{{$view_listing->contact_no}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col-md-6">
                                            <label>Address :
                                                <span>{{$view_listing->address}}</span>
                                            </label>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Email :
                                                <span>{{$view_listing->email}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col-md-6">
                                            <label>Google Map Link :
                                                <span>{{$view_listing->google_map_link}}</span>
                                            </label>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Website Link :
                                                <span>{{$view_listing->website_link}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col-md-6">
                                            <label>Facebook Link :
                                                <span>{{$view_listing->facebook_link}}</span>
                                            </label>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Instagram Link :
                                                <span>{{$view_listing->instragram_link}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col-md-6">
                                            <label>Linkedin Link :
                                                <span>{{$view_listing->linkedin_link}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Youtube Link :
                                                <span>{{$view_listing->youtube_link}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col-md-6">
                                            <label>Twitter Link :
                                                <span>{{$view_listing->twitter_link}}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Threads Link :
                                                <span>{{$view_listing->threads_link}}</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                    <div class="panel-body">

                                        <div class="utf_add_listing_part_headline_part">
                                            <h3><i class="sl sl-icon-home"></i> Amenities</h3>
                                        </div>
                                        <div class="checkboxes in-row amenities_checkbox">

                                            <div class="col-md-12">
                                                @if (isset($view_listing->amenities))
						
                                                @foreach ($view_listing->amenities as $amenity)
                                                @php
                                                    $amenity1=App\Models\admin\Aminities::where('id',$amenity)->select('aminities')->first();
                                                    // echo $amenity1['aminities'] ?? '';
												//echo $amenity1;
                                                @endphp
                                                <div class="col-md-4">
                                                    <label>{{$amenity1['aminities'] ?? ''}}
                                                    </label>
                                                </div>
                                                @endforeach
                                               @endif
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                    <div class="panel-body">
                                        <div class="add_utf_listing_section margin-top-45">
                                            <div class="utf_add_listing_part_headline_part">
                                                <h3><i class="sl sl-icon-list"></i> Contact Person Information</h3>
                                            </div>
                                            <div class="row with-forms">

                                                <div class="col-md-6">
                                                    <label>Name :
                                                        <span>{{$view_listing->contact_person_name}}</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Contact No :
                                                        <span>{{$view_listing->contact_person_number}}</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="col-md-6 ">
                                    <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                        <div class="panel-body">
                                            <div class="utf_add_listing_part_headline_part">
                                                <h3><i class="sl sl-icon-picture"></i>Wedding Vanue Type</h3>
                                            </div>

                                            <div class="col-md-12" style="margin-top: 2vh;">
                                                <table width="100%" border="1">
                                                    <tr style="background-color:#f0f0f0; height:30px;">
                                                        <th width="20%" style="text-align:center">Name</th>
                                                        <th width="20%" style="text-align:center">Capacity</th>
                                                        <th width="20%" style="text-align:center">Price</th>
                                                        <!-- <th width="20%" style="text-align:center">Action</th> -->
                                                    </tr>
                                                    <tbody class="add_more">
                                                        @foreach ($vanue_type as $vanue_types)
                                                        <tr style="background-color:#fff; height:30px;">
                                                            <td style="text-align:center">{{$vanue_types->category_name->category ?? ''}}</td>
                                                            <td style="text-align:center">{{$vanue_types->capacity}}</td>
                                                            <td style="text-align:center">{{$vanue_types->price}}</td>
                                                        </tr>
                                                        @endforeach
                                                       
                                                        {{-- <tr style="background-color:#fff; height:30px;">
                                                            <td style="text-align:center">Demo</td>
                                                            <td style="text-align:center">1000</td>
                                                            <td style="text-align:center">50,000</td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                        <div class="panel-body">
                                            <div class="utf_add_listing_part_headline_part">
                                                <h3><i class="sl sl-icon-picture"></i>Time Slot</h3>
                                            </div>

                                            <div class="col-md-12" style="margin-top: 2vh; ">
                                                <table width="100%" border="1">
                                                    <tr style="background-color:#f0f0f0; height:30px;">
                                                        <th width="20%" style="text-align:center">Wedding Vanue
                                                            Type</th>
                                                        <th width="20%" style="text-align:center">From Time Slot
                                                        </th>
                                                        <th width="20%" style="text-align:center">To Time Slot</th>
                                                        <!-- <th width="20%" style="text-align:center">Action</th> -->
                                                    </tr>
                                                    <tbody class="add_more_time">
                                                        @foreach ($time_slot as $time_slots)
                                                        <tr style="background-color:#fff; height:30px;">
                                                            <td style="text-align:center">{{$time_slots->wedding_venue_name->category ?? ''}}</td>
                                                            <td style="text-align:center">{{$time_slots->from_time_slot}}</td>
                                                            <td style="text-align:center">{{$time_slots->to_time_slot}}</td>
                                                        </tr>  
                                                        @endforeach
                                                        
                                                        {{-- <tr style="background-color:#fff; height:30px;">
                                                            <td style="text-align:center">Hall</td>
                                                            <td style="text-align:center">10 AM</td>
                                                            <td style="text-align:center">10 PM</td>
                                                        </tr> --}}
                                                    </tbody>


                                                </table>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="col-md-6 ">
                                    <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                        <div class="panel-body">
                                            <div class="utf_add_listing_part_headline_part">
                                                <h3><i class="sl sl-icon-picture"></i>Description</h3>
                                            </div>
                                            <div class="col-md-12">
                                                <!-- <label>Description :</label><br> -->
                                                <span>{{$view_listing->description}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- <div class="col-md-12"> -->
                                    <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                        <div class="panel-body">

                                            <div class="add_utf_listing_section margin-top-45">
                                                <div class="utf_add_listing_part_headline_part">
                                                    <h3><i class="sl sl-icon-picture"></i> Images</h3>
                                                </div>
                                                <div class="row with-forms">
                                                    <div class="col-md-12">
                                                        <!-- <label>Banner Images</label><br> -->
                                                        @if (isset($view_listing->banner_image))
                                                        @foreach ($view_listing->banner_image as $image)
                                                        <img src="{{asset('public/panel/images/banner_images/' . $image)}}" style="width: 70px;height:60px;">
                                                       @endforeach
                                                       @endif
                                                    </div>

                                                    <!-- <div class="col-md-6">
                                                        <label>Front Page Images</label><br>
                                                        <img src="https://via.placeholder.com/100x60">
                                                        <img src="https://via.placeholder.com/100x60">
                                                    </div> -->


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="panel panel-defult" style="padding-top: 20px; padding-bottom: 20px;">
                                        <div class="panel-body">
                                            <div class="add_utf_listing_section margin-top-45">
                                                <div class="utf_add_listing_part_headline_part">
                                                    <h3><i class="sl sl-icon-list"></i>Vendor Information</h3>
                                                </div>
                                    
                                                <div class="col-md-12" style="margin-top: 2vh;">
                                                    <table width="100%" border="1">
                                                        <tr style="background-color:#f0f0f0; height:30px;">
                                                            <th width="20%" style="text-align:center">Vendor Name
                                                            </th>
                                                            <th width="10%" style="text-align:center">Description
                                                            </th>
                                                            <th width="10%" style="text-align:center">Offer</th>
                                                            <th width="10%" style="text-align:center">Discount</th>
                                                            <th width="10%" style="text-align:center">Price</th>
                                                            <th width="20%" style="text-align:center">Images</th>
                                                        </tr>
                                                        <tbody class="add_more_vendor">
                                                            @if (is_array($vendor_information->vendor_name))
                                                        @foreach ($vendor_information->vendor_name as $vendor)
                                                            <tr style="background-color:#fff; height:30px;">
                                                                <td style="text-align:center">{{$vendor_information->vendor_name[$loop->index]}}</td>
                                                                <td style="text-align:center">{{$vendor_information->vendor_description[$loop->index]}}</td>
                                                                <td style="text-align:center">{{$vendor_information->vendor_offer[$loop->index]}}</td>
                                                                <td style="text-align:center">{{$vendor_information->vendor_discount[$loop->index]}}</td>
                                                                <td style="text-align:center">{{$vendor_information->vendor_price[$loop->index]}}</td>
                                                                <td style="text-align:center; padding: 5px;">
                                                                    {{-- <img
                                                                        src="https://via.placeholder.com/100x60"> --}}
                                                                        @if(isset($vendor_information->vendor_image[$loop->index]))
                                                                        <a href="{{ asset('public/panel/images/vendor_image/' . $vendor_information->vendor_image[$loop->index]) }}"><img
                                                                            src="{{asset('public/panel/images/vendor_image/' . $vendor_information->vendor_image[$loop->index])}}" style="width: 70px;height:60px;">
                                                                            
                                                                        </a>
                                                                        @endif
                                                                    </td>
                                                            </tr>  
                                                            @endforeach
                                                          
                                                           @endif
                                                        </tbody>


                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </form>


                    <div class="col-md-12" style="overflow:scroll">
                    </div>
                </div>
            </div>
        </div>
    </div>

            <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
            <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>

            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/jquery/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/jquery/jquery-ui.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/bootstrap/bootstrap.min.js') }}"></script>

            <script type='text/javascript' src="{{ asset('public/panel/js/plugins/icheck/icheck.min.js') }}"></script>
            <script type="text/javascript"
                src="{{ asset('public/panel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/moment.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>

            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/bootstrap/bootstrap-timepicker.min.js') }}">
            </script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/bootstrap/bootstrap-colorpicker.js') }}">
            </script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/bootstrap/bootstrap-file-input.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/bootstrap/bootstrap-select.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/datatables/jquery.dataTables.min.js') }}">
            </script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/dropzone/dropzone.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/fileinput/fileinput.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/plugins/filetree/jqueryFileTree.js') }}"></script>


            <script type="text/javascript" src="{{ asset('public/panel/js/plugins.js') }}"></script>
            <script type="text/javascript" src="{{ asset('public/panel/js/actions.js') }}"></script>

</body>

</html>
