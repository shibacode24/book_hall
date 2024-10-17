<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Wedding</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{asset('public/panel/logo/favicon.png')}}" type="image/x-icon" />
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('public/panel/css/theme-default.css')}}" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('public/panel/css/notification.css')}}" />
	<link rel="stylesheet" type="text/css" id="theme" href="{{asset('public/panel/css/fullcalender.css')}}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- EOF CSS INCLUDE -->
</head>

<body>	
	
    <style>
		
		<!-- profile show-hide -->

@media (max-width: 768px) {
    .mobile {
        display: none; /* Hide on mobile */
    }
}

    
			<!-- profile show-hide -->
		
		
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
background-color:#8a2020;
color:#FFF !important;
}
.mjks:hover {
background-color:#a8dbee;
color:#fff !important;
}
.tree {
color: #000000;
}
.tree:hover{
color: #003300;
}
.subtree {
color: #006699;
}
.subtree:hover{
color: #0099cc;
}
.subtreeactive{
color: #006699;
}
.mjksactive {
background-color:#006699 ;
color:#000 !important;
}  
.mjkslink {
background-color:#ffffff;
color: white;

}
.mjkslink:hover {
background-color:#006699;

}

.daterangepicker td.disabled,
    .daterangepicker option.disabled {
        background-color: #cec9c9 !important;
    }

    </style>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top">
        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
             
            <ul class="x-navigation x-navigation-horizontal">
                <li class="xn-logo" style="margin-right:30px;">
                    <a> 
						<img src="{{asset('public/panel/logo/weeding-logo.png')}}" alt="" style="width: 110px; margin-top: -15px;
						padding-top: 5px;" align="left"/>
					</a>
					      </li>
					


                    <a href="#" class="x-navigation-control"></a>
          
                  <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="{{asset('public/panel/images/users/avatar.jpg')}}" alt="Wedding"/>
                    </a>                                                        
                </li> 
                <li>
                    <a href="{{route('vendor_dashboard')}}" title="Dashboard"><span class="fa fa-desktop"> </span>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('your_listing')}}" title="Your Listing"><span class="fa fa-list"> </span>Your Listing</a>
                </li>
                <li>
                    <a href="{{route('approve_booking')}}" title="Confirm Booking"><span class="fa fa-edit"></span>Confirm
                        Booking</a>

                </li>

                <li>
                    <a href="{{route('view_enquiry')}}" title="View Enquiry"><span class="fa fa-users"> </span>View Enquiry</a>
                </li>

				   <li>
                    <a href="{{route('rejected_booking')}}" title="Confirm Booking"><span class="fa fa-edit"></span>Rejected
                        Booking</a>

                </li>
               <!-- <li>
                    <a href="{{route('add_listing')}}" title="Masters"><span class="fa fa-list"> </span>Add Listing</a>
                </li>-->
				


                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><img src="{{ asset('public/panel/img/power_white.png') }}" style="width:15px;"></a>
                </li>
				
								  <li class="xn-icon-button pull-right"
                    style="min-width:100px; color:#FFFFFF; padding-top:20px;">
                    Welcome, {{Auth::user()->name ?? ''}} <a  href="{{route('profile')}}" style="padding-top:0px; width: 35px"><i class="fa fa-user" ></i></a>
                </li>
                <!-- MESSAGES -->
				   <!-- <li class="xn-icon-button pull-right">
                    <a  href="{{route('profile')}}" ><span class="fa fa-user"></span></a>
                </li>-->
              

            </ul>
            

               {{-- ------------------------------------------- Approve Model ------------------------------------------------ --}}

               <div class="modal" id="customModal" style="width:65% !important; margin-left:15%;">
                <div class="modal-dialog" style="width:65% !important; margin-left:15%;">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmation</h4>
                           <!--  <button type="button" class="close" data-dismiss="modal"
                                onclick="closeCustomModal()">&times;</button> -->
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body" style="font-weight: bold;font-size:15px">
                            <p> Are you sure you want to approve?</p>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" onclick="deleteItem()" style="background-color:green; border-color:green;">Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                onclick="closeCustomModal()" style="background-color:red; color:white;">No</button>
                        </div>
                    </div>
                </div>
            </div>
{{-- ---------------------------------------------------  Reject MOdel --------------------------------------------------------- --}}
            <div class="modal" id="customModal_reject" style="width:65% !important; margin-left:15%;">
                <div class="modal-dialog" style="width:65% !important; margin-left:15%;">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmation</h4>
                            {{-- <button type="button" class="close" data-dismiss="modal"
                                onclick="closeCustomModal()">&times;</button> --}}
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body" style="font-weight: bold;font-size:15px">
                            <p> Are you sure you want to reject?</p>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" onclick="deleteItem_reject()" style="background-color:green; border-color:green;">Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                onclick="closeCustomModal_reject()" style="background-color:red; border-color:red; color:white">No</button>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

            
    </div>



</div>

<!-- PAGE CONTENT WRAPPER -->


</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

 <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title" style="color:red;"><img src="{{ asset('public/panel/img/power_white.png') }}"> &nbsp;Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p style="font-size:25px;">Are you sure you want to log out?</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{{route('log_out_vendor')}}" class="btn btn-danger btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->
<!-- START SCRIPTS -->
<script type="text/javascript" src="{{asset('public/panel/js/plugins/jquery/jquery.min.js')}}"></script>
{{-- if you want to use rule validate then load this cdn --}}
<script src="
        https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js
        "></script> 
 {{-- ------------ --}}
{{-- <script type="text/javascript" src="{{asset('public\js\plugins\jquery-validation\jquery.validate.js')}}"></script> --}}
<script type="text/javascript" src="{{asset('public/panel/js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/bootstrap/bootstrap.min.js')}}"></script>

<!-- END PLUGINS -->
<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src="{{asset('public/panel/js/plugins/icheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/panel/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/bootstrap/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/dropzone/dropzone.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/fileinput/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/plugins/filetree/jqueryFileTree.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- END PAGE PLUGINS -->
<!-- START TEMPLATE -->
<script type="text/javascript" src="{{asset('public/panel/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('public/panel/js/actions.js')}}"></script>
<!-- END TEMPLATE -->

<script>
    function openCustomModal_reject(deleteUrl) {
        // Set the delete URL in the modal
        document.getElementById('customModal_reject').deleteUrl = deleteUrl;
        // Show the modal
        $('#customModal_reject').modal('show');
    }

    function deleteItem_reject() {
        // Get the delete URL from the modal
        var deleteUrl = document.getElementById('customModal_reject').deleteUrl;
        // Redirect to the delete URL
        window.location.href = deleteUrl;
        // Hide the modal
        $('#customModal_reject').modal('hide');
    }

    function closeCustomModal_reject() {
        // Hide the modal
        $('#customModal_reject').modal('hide');
    }
</script>

 <script>
    function openCustomModal(deleteUrl) {
        // Set the delete URL in the modal
        document.getElementById('customModal').deleteUrl = deleteUrl;
        // Show the modal
        $('#customModal').modal('show');
    }

    function deleteItem() {
        // Get the delete URL from the modal
        var deleteUrl = document.getElementById('customModal').deleteUrl;
        // Redirect to the delete URL
        window.location.href = deleteUrl;
        // Hide the modal
        $('#customModal').modal('hide');
    }

    function closeCustomModal() {
        // Hide the modal
        $('#customModal').modal('hide');
    }
</script>
<script>
    $(function () {
        $("#file-simple").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#filetree").fileTree({
            root: '/',

            expandSpeed: 100,
            collapseSpeed: 100,
            multiFolder: false
        }, function (file) {
            alert(file);
        }, function (dir) {
            setTimeout(function () {
                page_content_onresize();
            }, 200);
        });
    });  
    
    setTimeout(() => {
			$('.alert_close_btn').trigger('click');
		}, 3000);
        
</script>


    <script> 
        function closePopup() { 
            // Close the current window 
            window.close(); 
        } 
    </script> 


@yield('js')
</body>

</html>