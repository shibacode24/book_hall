@extends('admin.layout')
@section('content')

<div class="row">  
         <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
            <div class="col-md-12" style="margin-top:5px;">
                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}
                   
              
                             
</div>
            </div> 
       
         </div>

<div class="row">
    <div class="col-md-12" style="text-align: center;margin-top: 5px;">
        <h6 class="panel-title" style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:16px;" align="center">
            <i class="fa fa-file-text"><label style="margin: 7px;">All Booking</label> </i> </h6>
    
    </div>

    <div class="col-md-12" style="margin-top:5px;">

        <div class="panel panel-default">
            <div class="col-md-2"></div>
            <div class="panel-body" style="margin-top:-10px; margin-bottom:-5px;">
                <div class="form-group">
                    <form role="form" method="get">

                        <div class="col-md-12">
                            <div class="form-group" style="margin-top:-10px;">
                                <div class="col-md-2" style="margin-top:15px;"></div>

                                <div class="col-sm-2" style="margin-top: 15px;">
                                    <div class="form-group ">
                                        <label>Select City<font color="#FF0000">*</font>
                                        </label>
                                        <select name="city_id" class="form-control select"
                                            data-live-search="true" required=""
                                            id="city_id">
                                            <option value="">Select City
                                            </option>
                                            @foreach ($city as $citys)
                                                <option value="{{ $citys->id }}"
                                                    @if (app('request')->input('city_id') == $citys->id) {{ 'selected' }} @endif>
                                                    {{ $citys->city }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            
                                <div class="col-md-2" style="margin-top:15px;">
                                    <label>From Date<font color="black">*</font></label>
                                    <input type="date" placeholder=" "
                                        class="form-control datePicker" name="from_date"
                                        value="{{ app('request')->input('from_date') }}">
                                </div>
                                <div class="col-md-2" style="margin-top:15px;">
                                    <label>To Date<font color="black">*</font></label>
                                    <input type="date" placeholder=" "
                                        class="form-control datePicker" name="to_date"
                                        value="{{ app('request')->input('to_date') }}">
                                </div>


                                <div class="col-md-2" style="margin-top:4.7vh;"
                                    align="left">

                                    <div class="input-group" style=" margin-bottom:15px;">

                                        <button 
                                            type="submit" class="btn btn-primary">Submit </button>
                                    </div>
                                </div>


                                <div class="col-md-2" style="margin-top:4.7vh;"
                                    align="left">

                                    <div class="input-group" style=" margin-bottom:15px;">

                                    </div>
                                </div>

                            </div>


                        </div>
                    </form>





                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12" style="overflow:scroll">

        <!-- START DEFAULT DATATABLE -->
  
        <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
            <table class="table datatable" style="overflow:auto !important;">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        
                        <th>Name</th>
                        <th>City</th>
                        
                        <th>Contact No</th>
                      
                       <th>Hall Name</th>
                        <th>Amenities For Booking</th>
                       <th>Booking Date</th>
                         <th>Time Slot</th>
                        <th>Enquiry Date</th>
                        <th>Guest</th>
                      
                        <th>Status</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_approve_booking as $approve_bookings)
                    <tr>
                    <td>{{$loop->iteration}}</td>       
                  
                    <td>{{$approve_bookings->name}}</td>
                    <td>{{$approve_bookings->city->city_name->city ?? ''}}</td>
                    <td>{{$approve_bookings->contact_no}}</td>
            <td>{{$approve_bookings->hall_name}}</td>
                    <td>{{$approve_bookings->venue_name}}</td>
                          <td>{{date('d-m-Y',strtotime($approve_bookings->date))}}</td>
                                {{-- @php
                    $time_slot = json_decode($approve_bookings->time_slot);
                    $amenities_for_booking = json_decode($approve_bookings->amenities_for_booking);

                @endphp

                @if (is_array($time_slot))

                    @foreach ($time_slot as $index => $time)
                    <td>{{$time}}</td>
                    @endforeach
                    @endif
                    
                    @if (is_array($amenities_for_booking))

                    @foreach ($amenities_for_booking as $index => $amenities_for_bookings)
                    <td>{{$amenities_for_bookings}}</td>
                    @endforeach --}}
                    {{-- @endif --}}
                    <td>{{$approve_bookings->time_slot}}</td>
                    <td>{{$approve_bookings->created_at->format('d-m-Y H:i')}}</td>
                    <td>{{$approve_bookings->guest}}</td>
					<td>	  <button class="btn" style="background-color:#10af23; color:#fff; max-height:25px;">{{"Approved"}}</button></td>
               
                    {{-- <td>
                        <!-- <button data-toggle="modal" data-target="#popup3" style="background-color:#1abc3d; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" style="margin-left:5px;"></i></button> -->
                        <button type="button" class="btn btn-sm btn-success" >Approve</button>
                        <!-- <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button> -->
                    </td> --}}
                     
                   </tr>
                    @endforeach

                   
                </tbody> 
            </table>
        </div>
     
    </div>
</div>
@stop