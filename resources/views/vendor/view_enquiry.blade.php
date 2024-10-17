@extends('vendor.layout')
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
        <h6 class="panel-title" style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:12px;" align="center">
            <i class="fa fa-file-text"><label style="margin: 7px;">View Enquiry</label> </i> </h6>
    
    </div>
    <div class="col-md-12" style="overflow:scroll">

        <!-- START DEFAULT DATATABLE -->
  
            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                <table class="table datatable" style="overflow:auto !important;">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Enquiry Date/Time</th>

                            <th>Booking Date</th>
                            <th>Name</th>
                            
                            <th>Contact No</th>
                          
                            <th>Time Slot</th>
                            <th>Venue Name</th>
                           
                            <th>Guest</th>
                          
                            <th>Remark</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($view_enquiry as $view_enquirys)
                        <tr>
                        <td>{{$loop->iteration}}</td>    
                        <td>{{date('d-m-Y h:i',strtotime($view_enquirys->created_at))}}</td>
                        <td>{{date('d-m-Y',strtotime($view_enquirys->date))}}</td>
                        <td>{{$view_enquirys->name}}</td>
                        <td>{{$view_enquirys->contact_no}}</td>
                        {{-- @php
                        $time_slot = json_decode($view_enquirys->time_slot);
                        // $amenities_for_booking = json_decode($view_enquirys->amenities_for_booking);

                    @endphp

                    @if (is_array($time_slot))

                        @foreach ($time_slot as $index => $time)
                        <td>{{$time}}</td>
                        @endforeach
                    @endif --}}
                        
                        {{-- @if (is_array($amenities_for_booking))

                        @foreach ($amenities_for_booking as $index => $amenities_for_bookings)
                        <td>{{$amenities_for_bookings}}</td>
                        @endforeach
                        @endif --}}

                        <td>{{$view_enquirys->time_slot}}</td>

                        <td>{{$view_enquirys->venue_name ?? ''}}</td>

                        <td>{{$view_enquirys->guest}}</td>

                        <td>
                            @if ($view_enquirys->remark == NULL)
                            
                                <button type="button" class="btn btn-sm btn-warning userModal"
                                user_name="{{ $view_enquirys->name ?? '' }}"  user_id="{{ $view_enquirys->id }}"
                                remark="{{ $view_enquirys->remark }}">Add Remark</button>
                            
                                @else
                                
                                    <button type="button" class="btn btn-sm btn-danger userModal"
                                    user_name="{{ $view_enquirys->name ?? '' }}"  user_id="{{ $view_enquirys->id }}"
                                    remark="{{ $view_enquirys->remark }}">View Remark</button>
                                
                            @endif
                           
                        </td>
                        <td>
                                <button
                                onclick="openCustomModal('{{ route('approve_enquiry', $view_enquirys->id) }}')"
                                id="customModal"
                                style="background-color:#05360b; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                type="button" class="btn btn-info" >Approve</button>
                                <button
                                onclick="openCustomModal_reject('{{ route('reject_enquiry', $view_enquirys->id) }}')"
                                id="customModal_reject"
                                style="background-color:#d40e0e; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                type="button" class="btn btn-info" >Reject</button>
                           
                            
                        </td>
                        {{-- <td> --}}
                            {{-- <a href="{{ route('approve_enquiry', $view_enquirys->id) }}"> --}}
                                {{-- <select class="form-control select" data-live-search="true" name="status">
                                    <option disabled selected>Select</option>
                                    <option value="1">Accept</option>
                                    <option value="2">Reject</option>
                                </select>   --}}
                                {{-- <button type="button" class="btn btn-primary">Approve</button>
                            </a>
                            <a href="{{ route('reject_enquiry', $view_enquirys->id) }}">
                                <button type="button" class="btn btn-danger">Reject</button>
                            </a>
                        </td> --}}
                        {{-- <td>
                            <!-- <button data-toggle="modal" data-target="#popup3" style="background-color:#1abc3d; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" style="margin-left:5px;"></i></button> -->
                            
                            <!-- <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button> -->
                        </td> --}}
                         
                        </tr>
                        @endforeach

                       
                    </tbody>
                </table>
            </div>
     
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
						<div class="row">
						<div class="col-md-10">
                    <h5 class="modal-title" id="user_name"></h5>
						</div>
						<div class="col-md-2" align="right">
                 <!--<button onclick="closePopup()">X</button> -->
							<button type="button" class="close" data-dismiss="modal"
                                onclick="closeCustomModal()">&times;</button>
					</div>
						</div>
                   <!-- <h5 class="modal-title" id="user_name"></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>-->
                </div>

                <div class="modal-body" style="height:30%;padding: 10px;">
                    <form action="{{route('add_remark')}}" method="post">
                        @csrf
                        <input type="hidden" id="user_id" name="user_id">
                        <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                            <div class="col-md-12">
                    
                                <div class="col-md-12">
                                    <label class="control-label"> Add Remark<font color="#FF0000">*</font></label>
                                    {{-- <input type="text" class="form-control" id="prop_name" name="prop_name"
                                    placeholder="" /> --}}
                                    <textarea class="form-control" rows="5" id="remark" name="remark"></textarea>
                                </div>

                                

                                <div class="col-md-6" style="margin-top:15px;padding-left: 10px;">
                                    <button type="submit" class="btn btn-primary">Update</button>


                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@stop
@section('js')
    <script>
        $(document).on('click', '.userModal', function() {

            // console.log(parseInt($(this).attr('a')) + parseInt($(this).attr('b')));

            $('#exampleModal').modal('show');

            $('#user_id').val($(this).attr('user_id'));
            $('#remark').val($(this).attr('remark'));
            $('#user_name').text('Remark: ' + $(this).attr(
                'user_name'
                )); //agar hume name show kr na hai text() use kr na or koi value form ke sath send kr ni ho to val() use kr na
            //text('Disbale User :' + $(this).attr('user_name')) -- name ke sath agar koi static text bhi print kr na ho to  text('static text'+ jo value set kr na hai vo) 

        });
    </script>
@stop