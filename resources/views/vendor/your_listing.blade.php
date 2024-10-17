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
          
         <div class="row">
            <div class="col-md-12" style="text-align: center;margin-top: 5px;">
                <h6 class="panel-title" style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:12px;" align="center">
                    <i class="fa fa-file-text"><label style="margin: 7px;">Your Listing</label> </i> </h6>
            
            </div>
			   <div class="col-md-12" style="text-align: center;margin-top: 5px;">
			 				  <a href="{{route('add_listing')}}"> <button id="on" type="button" class="btn mjks"
                style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;"><i
                    class="fa fa-plus"></i>Add Listing</button>
        </a>    
			 </div>
			 
            <div class="col-md-12" style="overflow:scroll">
                <!-- START DEFAULT DATATABLE -->
          
                    <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                        <table class="table datatable" style="overflow:auto !important;">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    
                                    <th>Address</th>
                                  
                                    <th>Email</th>
                                    <th>Google Map Link</th>
                                   
                                    {{-- <th>price</th> --}}
                                  
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($your_listing as $your_listings)
                                <tr>

                                <td>{{$loop->iteration}}</td>       
                                <td>{{$your_listings->name}}</td>
                                <td>{{$your_listings->contact_no}}</td>
                                <td>{{$your_listings->address}}</td>
                                <td>{{$your_listings->email}}</td>
                                <td>{{$your_listings->google_map_link}}</td>
                                {{-- <td>{{$your_listings->price}}</td> --}}
                                @if($your_listings->status == 'approve')
									  <td> <button
                                        style="background-color:#10af23; border:none; max-height:25px;color:#FFFFFF"
                                        type="button" class="btn btn-info">Approved</button>
                                    </td>
									@elseif($your_listings->status == 'reject')
									 <td> <button
                                        style="background-color:#f11010; border:none; max-height:25px;color:#FFFFFF"
                                        type="button" class="btn btn-info">Rejected</button>
                                    </td>
									@elseif($your_listings->status == 'pending')
									 <td> <button
                                        style="background-color:#FF6600; border:none; max-height:25px;color:#FFFFFF"
                                        type="button" class="btn btn-info">Pending</button>
                                    </td>
									@endif
                                <td>
                                    <a href="{{ route('edit_listing', $your_listings->id) }}"> <button
                                        style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                        type="button" class="btn btn-info" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i class="fa fa-edit"
                                            style="margin-left:5px;"></i></button>
                                </a> 
                                    <!-- <button data-toggle="modal" data-target="#popup3" style="background-color:#1abc3d; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" style="margin-left:5px;"></i></button> -->
                                    {{-- <button type="button" class="btn btn-sm btn-success" >Approve</button> --}}
                                    <!-- <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button> -->
                               </td>
                            </tr>

                                @endforeach
                                 

                               
                            </tbody>
                        </table>
                    </div>
             
            </div>
        </div>
</div>
@stop