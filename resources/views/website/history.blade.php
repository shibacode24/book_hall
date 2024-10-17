@extends('website.layout')
@section('content')
<style>
  .error {
      color: red;
      display: none;
  }
</style>
    <div class="clearfix"></div>

    <div id="titlebar" class="gradient margin-bottom-0"
        style="background-image: url({{ asset('public/images/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>History</h2>
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
    <div class="row" style="padding:20px"> 
		@foreach ($history as $historys)
      <div class="col-md-6 col-lg-6 col-sm-12">
      <div class="utf_box_widget margin-bottom-20" style="border-radius:20px; background-color:#fff; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
		  <h3>{{ $historys->hall_name->name ?? ''}}</h3>
		                        <!--<span style="font-size:18px; color:#000;"><b>Name of Wedding Venue</b></span><br>-->
                               	<span style="font-size:15px;"><b>Venue Type :</b> {{ $historys->categoryname->category ?? ''}}</span><br>
                                <span style="font-size:15px;"><b>Booking Date : </b> {{date('d-m-Y',strtotime($historys->date))}}</span><br>
                                <span style="font-size:15px;"><b>Booking Time :</b> {{$historys->time_slot}}</span><br>
                                <span style="font-size:15px;"><b>Guest Capacity :</b> {{$historys->guest}}</span><br>

@if (\Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($historys->date)) && $historys->status == '1')
    <span style="font-size:15px;"><b>Status: <span style="color:green;">COMPLETED</span></b></span>
@elseif($historys->status == '0')
    <span style="font-size:15px;"><b>Status: <span style="color:#FF6600;">PENDING</span></b></span>
@elseif($historys->status == '1')
    <span style="font-size:15px;"><b>Status: <span style="color:green;">ACCEPTED</span></b></span>
@elseif($historys->status == '2')
    <span style="font-size:15px;"><b>Status: <span style="color:red;">CANCELLED</span></b></span>
@endif

		  
		 <!-- <span style="font-size:15px;"><b>Status : <span style="color:Red;">COMPLETED</span></b></span>-->
                                
                                <!--  <h4 style="padding-bottom:7px; color: #000000;">We are always there for you.</h4>
                              <div style="display:inline-block">
                                <a class="button border" href="tel:+919766658802 " style="border: 1px solid; border-color: #ec3323; border-radius: 4px;color:#000;"><b><i class="fa fa-phone-square" aria-hidden="true "></i> +91 97666 58802</b></a>
                               <span> <a class="button border" href="tel:+919730158802" style="border: 1px solid; border-color: #ec3323; border-radius: 4px; color:#000;"><b><i
                                    class="fa fa-phone-square " aria-hidden="true "></i> +91 97301 58802</b>
                                </a></span>
          </div>-->

      </div>
		    </div>
		@endforeach
		    
  </div>
	 </div>

  </section>

		
	
@stop
