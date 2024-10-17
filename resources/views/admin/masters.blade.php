@extends('admin.layout')
@section('content')

    <div class="page-content-wrap">
        <!-- <div class="page-content-wrap">
                     -->
		
		<div class="row">  
         <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
            <div class="col-md-12" style="margin-top:5px;">
                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}
                   
              
                             
</div>
            </div> 
       
         </div>
		
        <div class="row">
            <div class="col-md-12" style="margin-top:5px;">
                <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;"
                    align="center"><span class="fa fa-desktop"></span> <strong>Masters</strong></label>


                <a href="{{route('index')}}"> <button id="on" type="button" class="btn mjks"
                        style="color:#FFFFFF; height:30px; width:auto;background-color: #993800;"><i
                            class="fa fa-database"></i>Masters</button>
                </a>

            </div>
        </div>
        <!-- </div> -->
        <div class="row">
            <div class="col-md-12" style="margin-top: 2vh;">

                <form action="{{ route('city') }}" method="post">
                    @csrf
                    <div class="col-md-2">
                        <label class="control-label">Add City<font color="#FF0000">*</font></label>
                        <input type="text" class="form-control" id="city" name="city_name" placeholder="" onclick="initAutocomplete()"/>
                        <input type="hidden" class="form-control" id="longitude" name="longitude"
                                               readonly required>
                    <input type="hidden" class="form-control" id="latitude" name="latitude"
                                               readonly required>
                    </div>

                    <div class="col-md-2" style="margin-top:15px;">
                        <button id="on" type="submit" class="btn mjks"
                            style="color:#FFFFFF; height:30px; width:auto;">
                            <i class="fa fa-plus"></i>ADD</button>
                        <button id="on" type="button" data-toggle="modal" data-target="#popup8" class="btn mjks"
                            style="color:#FFFFFF; height:30px; width:auto;"> <i class="fa fa-gear"></i>Manage</button>

                    </div>

                </form>

            </div>
            <!-- =========================================City model===================== -->
            <div class="modal" id="popup8" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Added City</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <table class="table datatable">
                                    <thead>

                                        <tr>
                                            <th>Sr. No.</th>

                                            <th>Added City</th>
                                            <th>Status</th>
                                           <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($city as $cities)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $cities->city }}</td>
@if ($cities->status == '0')
                                                    <td>{{ 'Active' }}</td>
                                                @else
                                                    <td>{{ 'Inactive' }}</td>
                                                @endif
                                               <td>
                                                     {{-- <button data-toggle="modal" value="{{ $cities->id }}"
                                                        city_name="{{ $cities->city }}" data-target="#popup13"
                                                        style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                        type="button" class="btn btn-info editbtn_city"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fa fa-edit" style="margin-left:5px;"></i></button>  --}}
                                                    {{-- <a href="{{ route('city_destroy', $cities->id) }}">
                                                        <button
                                                            style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                            type="button" class="btn btn-info" data-toggle="tooltip"
                                                            data-placement="top" title="Delete"><i class="fa fa-trash-o"
                                                                style="margin-left:5px;"></i></button>
                                                    </a> --}}

                                                    <label class="switch switch-small label_change" id="{{$cities->id}}" @if($cities->status == '0') checked value="1" @else value="0" @endif>
                                                        <input type="checkbox"  @if($cities->status == '0') checked @endif>
                                                        <span class="slider round"></span>
                                            </label>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===============================edit city======================== -->
            <div class="modal" id="popup13" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Update City</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <div class="col-md-12">
                                    <form action="{{ route('update_city') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="" id="city_id" name="city_id" onclick="initAutocomplete1()" />
                                        <div class="col-md-6">
                                            <label class="control-label"> City<font color="#FF0000">*</font></label>
                                            <input type="text" class="form-control" id="city_name" name="city_name"
                                                placeholder="" />
                                        </div>

                                        <div class="col-md-6" style="margin-top:15px;padding-left: 10px;">
                                            <button id="on" type="submit" class="btn mjks"
                                                style="color:#FFFFFF; height:30px; width:auto;"> <i
                                                    class="fa fa-plus"></i>Update</button>


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>
            {{-- ================ end of city ============ --}}

            <form action="{{ route('category') }}" method="post">
                @csrf
                <div class="col-md-12" style="margin-top: 2vh;">
                    <div class="col-md-2">
                        <label class="control-label">Add Wedding Venue Type<font color="#FF0000">*</font></label>
                        <input type="text" class="form-control" name="category_name" placeholder="" />
                    </div>
                    <div class="col-md-2" style="margin-top:15px;">
                        <button id="on" type="submit" class="btn mjks"
                            style="color:#FFFFFF; height:30px; width:auto;"> <i class="fa fa-plus"></i>ADD</button>
                        <button id="on" type="button" data-toggle="modal" data-target="#popup4"
                            class="btn mjks" style="color:#FFFFFF; height:30px; width:auto;"> <i
                                class="fa fa-gear"></i>Manage</button>

                    </div>

                </div>
            </form>


            <div class="modal" id="popup4" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Added Wedding Venue Type</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>

                                            <th>Added Wedding Venue Type</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $categorys)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $categorys->category }}</td>

                                                <td>
                                                    <button data-toggle="modal" value="{{ $categorys->id }}"
                                                        category_name="{{ $categorys->category }}" data-target="#popup9"
                                                        style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                        type="button" class="btn btn-info edit_category_btn"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fa fa-edit" style="margin-left:5px;"></i></button>
                                                            <a href="{{ route('category_destroy', $categorys->id) }}" onclick="return confirmDelete()">
                                                                <button
                                                                    style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                                    type="button" class="btn btn-info" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"><i class="fa fa-trash-o"
                                                                        style="margin-left:5px;"></i></button>
                                                            </a>
                                                    {{-- <button  onclick="openCustomModal('{{route('category_destroy',$categorys->id)}}')" id="customModal"
                                                        style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="popup9" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Update Wedding Venue Type</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <form action="{{ route('update_category') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="" id="category_id" name="category_id" />
                                    <div class="col-md-12">

                                        <div class="col-md-6">
                                            <label class="control-label">Category<font color="#FF0000">*</font></label>
                                            <input type="text" class="form-control" id="category_name"
                                                name="category_name" placeholder="" />
                                        </div>

                                        <div class="col-md-6" style="margin-top:15px;padding-left: 10px;">
                                            <button id="on" type="submit" class="btn mjks"
                                                style="color:#FFFFFF; height:30px; width:auto;"> <i
                                                    class="fa fa-plus"></i>Update</button>


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- =============================================================End Model========================== -->

            <form action="{{ route('aminities') }}" method="post">
                @csrf
                <div class="col-md-12" style="margin-top: 2vh;">
                    <div class="col-md-2">
                        <label class="control-label">Add Aminities<font color="#FF0000">*</font></label>
                        <input type="text" class="form-control" name="aminities_name" placeholder="" />
                    </div>
                    <div class="col-md-2" style="margin-top:15px;">
                        <button id="on" type="submit" class="btn mjks"
                            style="color:#FFFFFF; height:30px; width:auto;"> <i class="fa fa-plus"></i>ADD</button>
                        <button id="on" type="button" data-toggle="modal" data-target="#popup5"
                            class="btn mjks" style="color:#FFFFFF; height:30px; width:auto;"> <i
                                class="fa fa-gear"></i>Manage</button>

                    </div>
                </div>
            </form>

            <div class="modal" id="popup5" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Added Aminities</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>

                                            <th>Added Aminities</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($aminities as $aminitiess)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $aminitiess->aminities }}</td>

                                                <td>
                                                    <button data-toggle="modal" value="{{ $aminitiess->id }}"
                                                        aminities_name="{{ $aminitiess->aminities }}"
                                                        data-target="#popup10"
                                                        style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                        type="button" class="btn btn-info edit_aminities_btn"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fa fa-edit" style="margin-left:5px;"></i></button>
                                                    <a href="{{ route('aminities_destroy', $aminitiess->id) }}" 
                                                        onclick="return confirm('Are you sure you want to delete this?')">
                                                        <button
                                                            style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                            type="button" class="btn btn-info" data-toggle="tooltip"
                                                            data-placement="top" title="Delete"><i class="fa fa-trash-o"
                                                                style="margin-left:5px;"></i></button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="popup10" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Update Aminities</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <form action="{{ route('update_aminities') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="" id="aminities_id" name="aminities_id" />
                                    <div class="col-md-12">

                                        <div class="col-md-8">
                                            <label class="control-label">Aminities<font color="#FF0000">*</font></label>
                                            <input type="text" class="form-control" id="aminities_name"
                                                name="aminities_name" placeholder="" />
                                        </div>

                                        <div class="col-md-4" style="margin-top:15px;padding-left: 10px;">
                                            <button id="on" type="submit" class="btn mjks"
                                                style="color:#FFFFFF; height:30px; width:auto;"> <i
                                                    class="fa fa-plus"></i>Update</button>


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================End Layout Model========================= -->

            <form action="{{ route('slot_category') }}" method="post">
                @csrf
                <div class="col-md-12" style="margin-top: 2vh;">
                    <div class="col-md-2">
                        <label class="control-label">Add Slot Category<font color="#FF0000">*</font></label>
                        <input type="text" class="form-control" name="slot_category_name" placeholder="" />
                    </div>
                    <div class="col-md-2" style="margin-top:15px;">
                        <button id="on" type="submit" class="btn mjks"
                            style="color:#FFFFFF; height:30px; width:auto;"> <i class="fa fa-plus"></i>ADD</button>
                        <button id="on" type="button" data-toggle="modal" data-target="#popup6"
                            class="btn mjks" style="color:#FFFFFF; height:30px; width:auto;"> <i
                                class="fa fa-gear"></i>Manage</button>

                    </div>
                </div>
            </form>

            <div class="modal" id="popup6" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Added Slot Category</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>

                                            <th>Added Slot Category</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            
                                        @foreach ($slot_category as $slot_categorys)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $slot_categorys->slot_category }}</td>

                                            <td>
                                                <button data-toggle="modal" value="{{ $slot_categorys->id }}"
                                                    slot_category_name="{{ $slot_categorys->slot_category }}"
                                                    data-target="#popup11"
                                                    style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                    type="button" class="btn btn-info edit_slot_category_btn"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fa fa-edit" style="margin-left:5px;"></i></button>
                                                <a href="{{ route('slot_category_destroy', $slot_categorys->id) }}" onclick="return confirm('Are you sure you want to delete this?')">
                                                    <button
                                                        style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                        type="button" class="btn btn-info" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"><i class="fa fa-trash-o"
                                                            style="margin-left:5px;"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="popup11" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Update Slot Category</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <form action="{{ route('update_slot_category') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="" id="slot_category_id" name="slot_category_id" />
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <label class="control-label">Slot Category<font color="#FF0000">*</font>
                                            </label>
                                        <input type="text" class="form-control" id="slot_category_name" name="slot_category_name" placeholder="" />
                                    </div>

                                    <div class="col-md-6" style="margin-top:15px;padding-left: 10px;">
                                        <button id="on" type="submit" class="btn mjks"
                                            style="color:#FFFFFF; height:30px; width:auto;"> <i
                                                class="fa fa-plus"></i>Update</button>


                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======================================End model================================== -->
			
			<!-- Start Business Category -->
			
			  {{-- <form action="#" method="post">
                     <!--    @csrf-->
                <div class="col-md-12" style="margin-top: 2vh;">
                    <div class="col-md-2">
                        <label class="control-label">Add Business Category<font color="#FF0000">*</font></label>
                        <input type="text" class="form-control" name="slot_category_name" placeholder="" />
                    </div>
                    <div class="col-md-2" style="margin-top:15px;">
                        <button id="on" type="submit" class="btn mjks"
                            style="color:#FFFFFF; height:30px; width:auto;"> <i class="fa fa-plus"></i>ADD</button>
                        <button id="on" type="button" data-toggle="modal" data-target="#popup_business"
                            class="btn mjks" style="color:#FFFFFF; height:30px; width:auto;"> <i
                                class="fa fa-gear"></i>Manage</button>

                    </div>
                </div>
            </form>

            <div class="modal" id="popup_business" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Added Business Category</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>

                                            <th>Added Business Category</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            
                                     <!--   @foreach ($slot_category as $slot_categorys)-->
                                        <tr>
                                            <td>#</td>

                                            <td>#</td>

                                            <td>
                                                <button data-toggle="modal" value="#"
                                                    slot_category_name="#"
                                                    data-target="#popup_business_edit"
                                                    style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                    type="button" class="btn btn-info edit_slot_category_btn"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fa fa-edit" style="margin-left:5px;"></i></button>
                                                <a href="#" onclick="return confirm('Are you sure you want to delete this?')">
                                                    <button
                                                        style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                        type="button" class="btn btn-info" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"><i class="fa fa-trash-o"
                                                            style="margin-left:5px;"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                 <!--   @endforeach-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="popup_business_edit" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
                aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="H4">Update Business Category</h4>
                        </div>
                        <div class="modal-body" style="height:30%;padding: 10px;">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <form action="#" method="post">
                                  <!--  @csrf-->
                                    <input type="hidden" value="" id="slot_category_id" name="slot_category_id" />
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <label class="control-label">Business Category<font color="#FF0000">*</font>
                                            </label>
                                        <input type="text" class="form-control" id="slot_category_name" name="slot_category_name" placeholder="" />
                                    </div>

                                    <div class="col-md-6" style="margin-top:15px;padding-left: 10px;">
                                        <button id="on" type="submit" class="btn mjks"
                                            style="color:#FFFFFF; height:30px; width:auto;"> <i
                                                class="fa fa-plus"></i>Update</button>


                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div> --}}

			<!-- End Business Category -->

            <form action="{{ route('slider') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="col-md-12" style="margin-top: 2vh;">
                <div class="col-md-2">
                    <label class="control-label">Add Slider<font color="#FF0000">*</font></label>
                    <input type="file" class="form-control" name="slider_name" placeholder="" />
                </div>
                <div class="col-md-2" style="margin-top:15px;">
                    <button id="on" type="submit" class="btn mjks"
                        style="color:#FFFFFF; height:30px; width:auto;"> <i class="fa fa-plus"></i>ADD</button>
                    <button id="on" type="button" data-toggle="modal" data-target="#popup7" class="btn mjks"
                        style="color:#FFFFFF; height:30px; width:auto;"> <i class="fa fa-gear"></i>Manage</button>

                </div>
            </div>
            </form>
        </div>

    </div>
   
    <div class="modal" id="popup7" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="H4">Added Slider</h4>
                </div>
                <div class="modal-body" style="height:30%;padding: 10px;">
                    <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>

                                    <th>Added Slider</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                @foreach ($slider as $sliders)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                      <a href="{{asset('public/panel/images/slider_name/'.$sliders->slider)}}" target="_blank">  <img src="{{asset('public/panel/images/slider_name/'.$sliders->slider)}}" style="height:50px;">
                                       </a>
                                    </td>

                                    <td>
                                        <button data-toggle="modal" value="{{ $sliders->id }}"
                                            slider_name="{{ $sliders->slider }}"
                                            data-target="#popup12"
                                            style="background-color:#3399ff; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                            type="button" class="btn btn-info edit_slider_btn"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit" style="margin-left:5px;"></i></button>
                                        <a href="{{ route('slider_destroy', $sliders->id) }}" onclick="return confirm('Are you sure you want to delete this?')">
                                            <button
                                                style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;"
                                                type="button" class="btn btn-info" data-toggle="tooltip"
                                                data-placement="top" title="Delete"><i class="fa fa-trash-o"
                                                    style="margin-left:5px;"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ======================================End model================================== -->
    <!-- ======================================edit model========================================== -->


    <div class="modal" id="popup12" tabindex="-1" role="dialog" aria-labelledby="smallModalHead"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="H4">Update Slider</h4>
                </div>
                <div class="modal-body" style="height:30%;padding: 10px;">
                    <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                        <form action="{{ route('update_slider') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="" id="slider_id" name="slider_id" />
                        <div class="col-md-12">

                            <div class="col-md-6">
                                <label class="control-label"> Slider<font color="#FF0000">*</font></label>
                                <input type="file" class="form-control" name="slider_name" placeholder="" />
                            </div>

                            <div class="col-md-6" style="margin-top:15px;padding-left: 10px;">
                                <button id="on" type="submit" class="btn mjks"
                                    style="color:#FFFFFF; height:30px; width:auto;"> <i
                                        class="fa fa-plus"></i>Update</button>


                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer" style="border: none !important; background-color: #FFF !important;">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

@stop
@section('js')
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this?');
    }
    </script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.editbtn_city', function() {
                var city_id = $(this).val();

                $('#popup13').modal('show');

                $('#city_name').val($(this).attr('city_name'));
                $('#city_id').val($(this).attr('value'));
            });
            $(document).on('click', '.edit_category_btn', function() {
                var category_id = $(this).val();

                $('#popup9').modal('show');

                $('#category_name').val($(this).attr('category_name'));
                $('#category_id').val($(this).attr('value'));
            });
            $(document).on('click', '.edit_aminities_btn', function() {
                var aminities_id = $(this).val();

                $('#popup10').modal('show');

                $('#aminities_name').val($(this).attr('aminities_name'));
                $('#aminities_id').val($(this).attr('value'));
            });
            $(document).on('click', '.edit_slot_category_btn', function() {
                var slot_category_id = $(this).val();

                $('#popup11').modal('show');

                $('#slot_category_name').val($(this).attr('slot_category_name'));
                $('#slot_category_id').val($(this).attr('value'));
            });
            $(document).on('click', '.edit_slider_btn', function() {
                var slider_id = $(this).val();

                $('#popup11').modal('show');

                $('#slider_name').val($(this).attr('slider_name'));
                $('#slider_id').val($(this).attr('value'));
            });
           $(document).on("click", ".label_change", function(e) {
                e.preventDefault(); // Prevent default action

                var status = $(this).attr('value');
                var id = $(this).attr('id');

                // Show a confirmation dialog
                var userConfirmed = confirm("Are you sure?");

                if (userConfirmed) {
                    $.ajax({
                        url: "{{ route('city_status') }}",
                        data: {
                            status: status,
                            id: id
                        },
                        success: function(result) {
                            setTimeout(function() {
                                location.reload();
                            }, 60);
                        }
                    });
                }
            });
        });
    </script>
<script>
    // Load the Google Maps API with the Places library
    function initAutocomplete() {
        const autocomplete = new google.maps.places.Autocomplete(document.getElementById('city'));
        autocomplete.addListener('place_changed', function () {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
                console.error('Place not found: ', place);
                return;
            }
             document.getElementById('latitude').value = place.geometry.location.lat();
             document.getElementById('longitude').value = place.geometry.location.lng();
        });
    }
    // jQuery document ready function
    $(document).ready(function () {
        // Your jQuery code goes here
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1Cz13aBYAbBYJL0oABZ8KZnd7imiWwA4&libraries=places&callback=initAutocomplete" async defer></script>

@stop
