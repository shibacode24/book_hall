@extends('vendor.layout')
@section('content')
@include('alert')
<div class="page-content-wrap">
          
    <div class="row">  
         <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
            <div class="col-md-12" style="margin-top:5px;">
                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}
                   
              
                    
</div>
            </div> 
       
         </div>
          
         <div class="row" style="padding:40px;">

            <div class="col-md-7" align="left" style="padding-top:20px;">
				<h1 style="color:#000; font-size:45px;"><b>List Your Business <span style="color:red;">for FREE</span></b></h1>
				<h4 style="color:#000; font-size:30px;">with Book My Wedding Hall</h4>
				
				  <div>
					  <a href="{{route('add_listing')}}"> <button id="on" type="button" class="btn"
                style="color:#FFFFFF; height:45px; width:60%; background-color: #e60c0c;; border:2px solid; border-color: #e60c0c;" ><i
																																		class="fa fa-plus"></i><b>Add Listing</b></button>
        </a> 
					    </div>
					  
        </div>
			  <div class="col-md-5" align="center">
<img src="{{asset('public\panel\images\banner_images\271711036447_grand.jpg')}}"  style="width:100%; height:100%;">
        </div>
</div>
@stop