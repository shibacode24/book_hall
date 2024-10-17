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
            <h6 class="panel-title" style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:16px;"
                align="center">
                <i class="fa fa-file-text"><label style="margin: 7px;">Vendor List</label> </i>
            </h6>

        </div>
        <div class="col-md-12" style="overflow:scroll">

            <!-- START DEFAULT DATATABLE -->

            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                <table class="table datatable" style="overflow:auto !important;">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Vendor Name</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Category</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th >Status</th>
                            <th >Verified Status</th>
                            <th >Image</th>
                          
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendor_list as $vendor_lists)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vendor_lists->name }}</td>
                                <td>{{ $vendor_lists->state }}</td>
                                <td>{{ $vendor_lists->city }}</td>
                                <td>{{ $vendor_lists->category }}</td>
                                <td>{{ $vendor_lists->phone_number }}</td>
                                <td>{{ $vendor_lists->email }}</td>
                                @if ($vendor_lists->status == 'Approved')
                             
                                <td>
                                    <button class="btn" style="background-color:#10af23; color:#fff; max-height:25px;">{{ $vendor_lists->status }}</button>
                                    </td>
                               
                                    @elseif ($vendor_lists->status == 'Pending')
                                  
                                     <td >
                                        <div class="btn" style="background-color:#fe970a; color:#fff; max-height:25px;">{{ $vendor_lists->status }}</div>
                                        </td>
                                    
                                    @elseif ($vendor_lists->status == 'Rejected')
                                   
                                        <td>
                                        <div class="btn" style="background-color:#d40e0e; color:#fff; max-height:25px;">{{ $vendor_lists->status }}</div>
                                        </td>
                                   
                                @endif

                                @if ($vendor_lists->verified == '1')
                             
                                <td>
                                    <button class="btn" style="background-color:#106992; color:#fff; max-height:25px;">{{ 'Verified' }}</button>
                                    </td>
                               
                                    @elseif ($vendor_lists->verified == '0')
                                  
                                     <td >
                                        <div class="btn" style="background-color:#fe970a; color:#fff; max-height:25px;">{{ 'Pending' }}</div>
                                        </td>
                                @endif
                               
                               
                                <td><img src="{{ asset('public/images/vendor_registration_image/' . $vendor_lists->image) }}" alt="img" style="width: 15%;height:15%;"></td>
                                
                                <td>
                                  <a href="{{route('edit_vendor_registration',$vendor_lists->id)}}">  <button
                                    style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                    type="button" class="btn btn-info" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"
                                        style="margin-left:5px;"></i></button>
                                  </a>
                            
                                    <button onclick="openCustomModal('{{ route('approve_vendor', $vendor_lists->id) }}')"
                                        id="customModal"
                                        style="background-color:#10af23; border:none; max-height:25px; color:#fff;"
                                        type="button" class="btn btn-info">Approve</button>
                                    <button
                                        onclick="openCustomModal_reject('{{ route('reject_vendor', $vendor_lists->id) }}')"
                                        id="customModal_reject"
                                        style="background-color:#d40e0e; border:none; max-height:25px; color:#fff;"
                                        type="button" class="btn btn-info">Reject</button>
                                        <button
                                        onclick="openCustomModal_verified('{{ route('verified_vendor', $vendor_lists->id) }}')"
                                        id="customModal_verified"
                                        style="background-color:#106992; border:none; max-height:25px; color:#fff;"
                                        type="button" class="btn btn-info">Verified</button>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>

@stop
