<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Wedding</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{asset('public/panel/logo/favicon.png')}}" type="image/x-icon" />
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('public/panel/css/theme-default.css')}}" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('public/panel/css/notification.css')}}" />
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
    </style>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top">
        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
             
            <ul class="x-navigation x-navigation-horizontal">
                <li class="xn-logo" style="margin-right:30px;">
                    <a> <img src="{{asset('public/panel/logo/weeding-logo.png')}}" alt="" style="width: 70%;margin-top: -4vh;" /></a>

                    <a href="#" class="x-navigation-control"></a>
                </li>
                  <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="{{asset('public/panel/images/users/avatar.jpg')}}" alt="Wedding"/>
                    </a>                                                        
                </li>     
                <li>
                    <a href="dashboard.html" title="Dashboard"><span class="fa fa-desktop"> </span>Dashboard</a>
                </li> 
                <li>
                    <a href="added_booking.html" title="Masters"><span class="fa fa-list"> </span>Added Booking</a>
                </li> 
                <!-- <li>
                    <a href="project_entry.html" title="Project Entry"><span class="fa fa-edit"></span>Approve Booking</a>
                   
                </li>

                <li>
                    <a href="role.html" title="User Roles"><span class="fa fa-users"> </span>Enquiry</a>
                </li> -->
               
                 <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                </li> 
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right" style="margin-right:25px; min-width:100px; color:#FFFFFF; padding-top:20px;">
                    Welcome, User
                </li>
                
            </ul>
                <!-- END X-NAVIGATION -->
           
            <!-- <div class="page-content-wrap">
             <div class="row">
                        <div class="col-md-12">
                      
                               <div class="panel-body" style="padding:1px 5px 2px 5px;">
                                  
                                        <div class="col-md-12" style="margin-top:5px;">
                            <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class="fa fa-desktop"></span> <strong>Dashboard</strong></label>
                                            
                                           
                                            <a href="project_entry.html"> <button id="on" type="button" class="btn mjks"
                                                style="color:#FFFFFF; height:30px; width:auto;background-color: #006699;"><i
                                                    class="fa fa-plus"></i>Project Entry</button>
                                        </a>
                                        <a href="enquiry.html"> <button id="on" type="button" class="btn mjks"
                                            style="color:#FFFFFF; height:30px; width:auto;background-color: #990066;"><i
                                                class="fa fa-plus"></i>Enquiry</button>
                                    </a>
                           
                                          </div>
                                   
                                </div>
                            </div>
                            </div>
            
         
                    </div> -->

                </div>


                <!-- START DEFAULT DATATABLE -->

                
            </div>

            @yield('content')

        </div>
        <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
    
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
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
        <script type="text/javascript" src="{{asset('public/panel/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/panel/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- END PLUGINS -->
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{asset('public/panel/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/panel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
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
        <!-- END PAGE PLUGINS -->
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('public/panel/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/panel/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->
    
'
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
        </script>
    </body>
    
    </html>