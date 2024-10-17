@extends('vendor.layout')
@section('content')
    @include('alert')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="page-content-wrap">

        <div class="row">
            <div class="panel-body" style="padding:1px 5px 2px 5px;">

                <div class="col-md-12" style="margin-top:5px;">
                    {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}



                </div>
            </div>

        </div>

        <div class="row ">
            <form action="{{ route('update_listing') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit_listing->id }}">
                <div class="col-md-12">
                    <div class="panel panel-defult">
                        <div class="panel-body">
                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-list"></i>Edit Listing</h3>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-3">
                                        <label>City</label>
                                        {{-- {{app('request')->input('location_city')}} --}}
                                        <!-- <input type="text" class="form-control" placeholder="" value=""> -->
                                        <select class="form-control" name="location_city" id="select_city">
                                            <option disabled selected>Select</option>
                                            <option value="other" {{ app('request')->input('location_city') == 'other' }}>
                                                Other</option>
                                            @foreach ($city as $citys)
                                                <option value="{{ $citys->id }}"
                                                    {{ $edit_listing->location_city == $citys->id ? 'selected' : '' }}>
                                                    {{ $citys->city }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3" id="other_city">
                                        <label>Add City</label>
                                        <input type="text" name="other_city" class="form-control" placeholder=""
                                            value="{{ $edit_listing->other_city }}">
                                    </div>

                                    <div class="col-md-3">
                                        <label>Address for google map</label>
                                        <input type="text" name="location_address" class="form-control" placeholder=""
                                            id="address-input" value="{{ $edit_listing->location_address }}">
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="panel panel-defult">
                        <div class="panel-body">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-picture"></i>Business Info</h3>
                            </div>
                            <div class="col-md-2">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    value="{{ $edit_listing->name }}">
                            </div>
                            <div class="col-md-2">
                                <label>Contact No</label>
                                <input type="text" class="form-control" maxlength="10" name="contact_no"
                                    placeholder="Contact No" value="{{ $edit_listing->contact_no }}" maxlength="10">
                            </div>
                            <div class="col-md-2">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address"
                                    value="{{ $edit_listing->address }}">
                            </div>


                            <div class="col-md-2">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="{{ $edit_listing->email }}">
                            </div>

                            <div class="col-md-2">
                                <label>Google Map Link</label>
                                <input type="text" class="form-control" name="google_map_link"
                                    value="{{ $edit_listing->google_map_link }}" placeholder="Google Map Link">
                            </div>


                            <div class="col-md-2">
                                <label>Website Link</label>
                                <input type="text" class="form-control" name="website_link" placeholder="Website Link"
                                    value="{{ $edit_listing->website_link }}">
                            </div>
                            <div class="col-md-2">
                                <label>Facebook Link</label>
                                <input type="text" class="form-control" name="facebook_link" placeholder="Facebook Link"
                                    value="{{ $edit_listing->facebook_link }}">
                            </div>


                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Instagram Link</label>
                                <input type="text" class="form-control" name="instagram_link"
                                    placeholder="Instagram Link" value="{{ $edit_listing->instagram_link }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Linkedin Link</label>
                                <input type="text" class="form-control" name="linkedin_link"
                                    placeholder="Linkedin Link" value="{{ $edit_listing->linkedin_link }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Youtube Link</label>
                                <input type="text" class="form-control" name="youtube_link" placeholder="Youtube"
                                    value="{{ $edit_listing->youtube_link }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Twitter Link</label>
                                <input type="text" class="form-control" name="twitter_link"
                                    placeholder="Twitter Link" value="{{ $edit_listing->twitter_link }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Threads Link</label>
                                <input type="text" class="form-control" name="threads_link"
                                    placeholder="Threads Link" value="{{ $edit_listing->threads_link }}">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-defult">
                            <div class="panel-body">

                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-home"></i> Amenities</h3>
                                </div>
                                <div class="checkboxes in-row amenities_checkbox">

                                    <div class="col-md-12">
                                        @foreach ($aminities as $aminitiess)
                                            <div class="col-md-2">
                                                <input id="check-a" type="checkbox" name="amenities[]"
                                                    value="{{ $aminitiess->id }}"
                                                    {{ in_array($aminitiess->id, $edit_listing->amenities) ? 'checked' : '' }}>
                                                <label for="check-a">{{ $aminitiess->aminities }}</label>

                                            </div>
                                        @endforeach
                                        {{-- <div class="col-md-2">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Car Parking</label>
                                    
                                </div>
                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Event Spaces</label>
                                </div>

                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Indoor and Outdoor Options</label>
                                </div>
                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Groom's Room</label>
                                </div>
                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Catering Services</label>
                                </div>
                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Sound and Lighting</label>
                                </div> --}}
                                    </div>
                                    {{-- <div class="col-md-12">
                                <div class="col-md-2">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Dance Floor</label>
                                    
                                </div>
                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">On-Site Coordination</label>
                                </div>

                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Vendor Recommendations</label>
                                </div>
                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Accessibility</label>
                                </div>
                                <!-- <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Catering Services</label>
                                </div>
                                <div class="col-md-2">
                                    
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Sound and Lighting</label>
                                </div> -->
                            </div> --}}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        {{-- <div class="col-md-6"> --}}
                        <div class="panel panel-defult">
                            <div class="panel-body">
                                <div class="add_utf_listing_section margin-top-45">
                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-list"></i> Contact Person Information</h3>
                                    </div>
                                    <div class="row with-forms">


                                        <div class="col-md-3">
                                            <label>Name</label>
                                            <input type="text" name="contact_person_name" class="form-control"
                                                placeholder="" value="{{ $edit_listing->contact_person_name }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Contact No</label>
                                            <input type="text" name="contact_person_number" maxlength="10"
                                                class="form-control" placeholder=""
                                                value="{{ $edit_listing->contact_person_number }}">
                                        </div>
                                        <!-- <div class="col-md-4">
                                                                                <label>Address</label>
                                                                                <input type="text" class="form-control" placeholder="" value="">
                                                                            </div>
                                                            
                                                                            <div class="col-md-4">
                                                                                <label>Email</label>
                                                                                <input type="text" class="form-control" placeholder="" value="">
                                                                            </div>
                                                                            
                                                                            <div class="col-md-4">
                                                                                <label>Facebook Link</label>
                                                                                <input type="text" class="form-control" placeholder="" value="">
                                                                            </div>
                                                            
                                                                            <div class="col-md-4">
                                                                                <label>Instagram Link</label>
                                                                                <input type="text" class="form-control" placeholder="" value="">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Linkedin Link</label>
                                                                                <input type="text" class="form-control" placeholder="" value="">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Twitter Link</label>
                                                                                <input type="text" class="form-control" placeholder="" value="">
                                                                            </div> -->



                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-home"></i> Add Price </h3>
                                    </div>
                                    <div class="checkboxes in-row category_checkbox">
                                        <div class="col-md-12">
                                            <div class="form-group row">

                                                <div class="col-md-4">
                                                    {{-- <label>Add Price</label> --}}
                        {{-- <input type="text" class="form-control" name="price"
                                                        placeholder="">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline">

                                                        <input class="form-check-input" type="radio" name="show_price"
                                                            id="show-price-yes" value="yes">
                                                        <label class="form-check-label" for="show-price-yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="show_price"
                                                            id="show-price-no" value="no">
                                                        <label class="form-check-label" for="show-price-no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        {{-- </div>  --}}
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="col-md-6 ">
                        <div class="panel panel-defult">
                            <div class="panel-body">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-picture"></i>Wedding Venue Type</h3>
                                </div>
                                <div class="col-md-12" style="padding-bottom:10px;">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="show-price-no">Show Price</label>&nbsp;
                                        <input class="form-check-input" type="radio" name="show_price"
                                            id="show-price-yes" value="yes"
                                            {{ $edit_listing->show_price == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="show-price-yes">Yes</label>

                                        <input class="form-check-input" type="radio" name="show_price"
                                            id="show-price-no" value="no"
                                            {{ $edit_listing->show_price == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="show-price-no">No</label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label> Wedding Venue Type</label>
                                    {{-- <input type="text" class="form-control" id="amenities_for_booking" placeholder=""
                                        value=""> --}}

                                    <select class="form-control" id="amenities_for_booking">
                                        <option disabled selected>Select</option>
                                        @foreach ($category as $categorys)
                                            <option value="{{ $categorys->id }}">{{ $categorys->category }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-2">
                                    <label> Venue Name</label>
                                    <input type="text" class="form-control" id="wedding_venue_name" placeholder=""
                                        value="">
                                </div>
                                <div class="col-md-2">
                                    <label>Capacity</label>
                                    <input type="text" class="form-control" id="capacity" placeholder=""
                                        value="">
                                </div>
                                <div class="col-md-2">
                                    <label>Price</label>
                                    <input type="text" class="form-control" id="price" placeholder=""
                                        value="">
                                </div>

                                <div class="col-md-3">
                                    <button type="button" class="btn mjks add-row"
                                        style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;margin-top: 3vh;"><i
                                            class="fa fa-plus " aria-hidden="true"></i>
                                        Add</button>
                                </div>

                                {{-- <div class="col-md-12"></div> --}}
                                <div class="col-md-12" style="margin-top: 2vh;">
                                    <table width="100%" border="1">
                                        <tr style="background-color:#f0f0f0; height:30px;">
                                            <th width="15%" style="text-align:center">Wedding Venue Type</th>
                                            <th width="20%" style="text-align:center"> Venue Name</th>
                                            <th width="10%" style="text-align:center">Capacity</th>
                                            <th width="10%" style="text-align:center">Price</th>
                                            <th width="20%" style="text-align:center">Action</th>
                                        </tr>
                                        <tbody class="add_more">
                                            @foreach (json_decode($edit_amenity_listing) as $amenity)
                                                <tr>
                                                    <td><input type="hidden" name="amenities_for_booking[]"
                                                            style="border:none; width: 100%;"
                                                            value="{{ $amenity->amenity }}">
                                                        <input type="text" style="border:none; width: 100%;"
                                                            value="{{ $amenity->category }}" readonly>
                                                    </td>
                                                    <td><input type="text" name="venue_name[]"
                                                            style="border:none; width: 100%;"
                                                            value="{{ $amenity->venue_name }}" readonly></td>
                                                    <td><input type="text" name="capacity[]"
                                                            style="border:none; width: 100%;"
                                                            value="{{ $amenity->capacity }}" readonly></td>
                                                    <td><input type="text" name="price[]"
                                                            style="border:none; width: 100%;"
                                                            value="{{ $amenity->price }}" readonly></td>
                                                    <td style="text-align:center; color:#FF0000">
                                                        <a
                                                            href="{{ route('delete_amenity_list', $amenity->amenity_id) }}">
                                                            <button style="text-align:center; color:#FF0000"
                                                                class="delete-row"><i class="fa fa-trash-o"></i></button>
                                                        </a>
                                                        <button type="button" class="btn btn-sm  editVenueTypeModal"
                                                            id="{{ $amenity->amenity_id }}"
                                                            amenity="{{ $amenity->amenity }}"
                                                            venue_name="{{ $amenity->venue_name }}"
                                                            capacity="{{ $amenity->capacity }}"
                                                            price="{{ $amenity->price }}"><i class="fa fa-edit"
                                                                style="color: blue"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>


                                    </table>

                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="panel panel-defult">
                            <div class="panel-body">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-picture"></i>Time Slot</h3>
                                </div>
                                <div class="col-md-3">
                                    <label>Wedding Venue Type</label>
                                    {{-- <input type="text" class="form-control" id="amenities_for_booking" placeholder=""
                                        value=""> --}}
                                    <select class="form-control" id="category_id">
                                        <option disabled selected>Select</option>
                                        @foreach ($category as $categorys1)
                                            <option value="{{ $categorys1->id }}">{{ $categorys1->category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>From Time</label>
                                    <input type="time" class="form-control" id="from_time_slot"
                                        placeholder="10 Am : 10PM" value="">
                                </div>
                                <div class="col-md-3">
                                    <label>To Time</label>
                                    <input type="time" class="form-control" id="to_time_slot"
                                        placeholder="10 Am : 10PM" value="">
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn mjks add-row-time"
                                        style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;margin-top: 3vh;"><i
                                            class="fa fa-plus " aria-hidden="true"></i>
                                        Add</button>
                                </div>
                                {{-- <div class="col-md-12"></div> --}}
                                <div class="col-md-12" style="margin-top: 2vh;">
                                    <table width="100%" border="1">
                                        <tr style="background-color:#f0f0f0; height:30px;">
                                            <th width="20%" style="text-align:center">Wedding Venue Type</th>
                                            <th width="20%" style="text-align:center">From Time Slot</th>
                                            <th width="20%" style="text-align:center">To Time Slot</th>
                                            <th width="20%" style="text-align:center">Action</th>
                                        </tr>
                                        <tbody class="add_more_time">
                                            {{-- @foreach ($edit_time_slot->from_time_slot as $time_slot) --}}
                                            @foreach (json_decode($edit_time_slot) as $time_slot)
                                                <tr>
                                                    <td><input type="hidden" name="category_id[]"
                                                            style="border:none; width: 100%;"
                                                            value="{{ $time_slot->category_id }} ">
                                                        <input type="text" style="border:none; width: 100%;"
                                                            value="{{ $time_slot->category }}" readonly>
                                                    </td>

                                                    <td><input type="text" name="from_time_slot[]"
                                                            style="border:none; width: 100%;"
                                                            value="{{ $time_slot->from_time_slot }} " readonly></td>
                                                    <td><input type="text" name="to_time_slot[]"
                                                            style="border:none; width: 100%;"
                                                            value="{{ $time_slot->to_time_slot }} " readonly></td>
                                                    <td style="text-align:center; color:#FF0000">
                                                        <a href="javascript:void(0)">
                                                            <button type="button" data-id="{{ $time_slot->time_id }}"
                                                                style="text-align:center; color:#FF0000"
                                                                class=" del_time"><i class="fa fa-trash-o"></i></button>
                                                        </a>
                                                        <button type="button" class="btn btn-sm  editTimeSlot"
                                                        time_id="{{ $time_slot->time_id }}"
                                                        category_id="{{ $time_slot->category_id }}"
                                                        from_time_slot="{{ $time_slot->from_time_slot }}"
                                                        to_time_slot="{{ $time_slot->to_time_slot }}"
                                                       ><i class="fa fa-edit"
                                                            style="color: blue"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>


                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="col-md-6 ">

                        <div class="panel panel-defult">
                            <div class="panel-body">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-picture"></i>Add Description</h3>
                                </div>
                                <div class="col-md-12">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" cols="10" rows="5">{{ $edit_listing->description }}</textarea>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <!-- <div class="col-md-12"> -->
                        <div class="panel panel-defult">
                            <div class="panel-body" style="margin-bottom: 12.5vh;">

                                <div class="add_utf_listing_section margin-top-45">
                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-picture"></i> Add Images</h3>
                                    </div>
                                    <div class="row with-forms">
                                        <div class="col-md-6">
                                            <label>Banner Images(Select Multiple Image)
                                            </label>
                                            <input type="file" class="form-control" name="banner_image[]"
                                                placeholder="" value="" multiple>
                                            {{-- @foreach ($edit_listing->banner_image as $image)
                                                <img src="{{ asset('public/panel/images/banner_images/' . $image) }}"
                                                    style="width: 50px;height:50px;">
                                            @endforeach --}}
                                            @if (isset($edit_listing->banner_image))
                                                @foreach ($edit_listing->banner_image as $image)
                                                    <div style="display: inline-block; position: relative;">
                                                        <img src="{{ asset('public/panel/images/banner_images/' . $image) }}"
                                                            style="width: 50px; height: 50px;">
                                                        <a href="#" data-image="{{ $image }}"
                                                            data-id="{{ $edit_listing->id }}" class="delete-banner-image"
                                                            style="position: absolute; top: 0; right: 0; background: none; border: none; cursor: pointer;">
                                                            <span style="color: red; font-size: 20px;">&times;</span>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>



                                        <div class="col-md-6">
                                            <label>Front Page Images
                                            </label>
                                            <input type="file" class="form-control" name="front_page_image"
                                                placeholder="" value="">
                                            <img src="{{ asset('public/panel/images/front_page_image/' . $edit_listing->front_page_image) }}"
                                                style="width: 50px;height:50px;">
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>



                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-defult">
                            <div class="panel-body">

                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-home"></i> Categories</h3>
                                </div>
                                <div class="checkboxes in-row category_checkbox">

                                    <div class="col-md-12">
                                        @foreach ($category as $categorys)
                                            <div class="col-md-2">
                                                <input id="check-a" type="checkbox" name="category_id[]"
                                                    value="{{ $categorys->id }}"
                                                    {{ in_array($categorys->id, $edit_listing->category_id) ? 'checked' : '' }}>
                                                <label for="check-a">{{ $categorys->category }}</label>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row ">
                    <div class="col-md-12">
                        <div class="panel panel-defult">
                            <div class="panel-body">
                                <div class="add_utf_listing_section margin-top-45">
                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-list"></i>Vendor Information</h3>
                                    </div>
                                    <div class="row with-forms">


                                        <div class="col-md-2">
                                            <label>Vendor Name</label>
                                            <input type="text" id="vendor_name" class="form-control" placeholder=""
                                                value="">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Description</label>
                                            <input type="text" id="vendor_description" class="form-control"
                                                placeholder="" value="">
                                        </div>
                                        <div class="col-md-1">
                                            <label>Offer</label>
                                            <!-- <input type="text" class="form-control" placeholder="" value=""> -->
                                            <select class="form-control" id="vendor_offer">
                                                <option disabled selected>Select</option>
                                                <option value="percent">%</option>
                                                <option value="rupees">₹</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1">
                                            <label>Discount</label>
                                            <input type="text" id="vendor_discount" class="form-control"
                                                placeholder="" value="">
                                        </div>
                                        <div class="col-md-1">
                                            <label>Price</label>
                                            <input type="text" id="vendor_price" class="form-control" placeholder=""
                                                value="">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Upload Images (550 X 400)</label>
                                            <input type="file" id="vendor_image" class="form-control" placeholder=""
                                                value="">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn mjks add-row-vendor"
                                                style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;margin-top: 3vh;"><i
                                                    class="fa fa-plus " aria-hidden="true"></i>
                                                Add</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 2vh;">
                                        <table width="100%" border="1">
                                            <tr style="background-color:#f0f0f0; height:30px;">
                                                <th width="20%" style="text-align:center">Vendor Name</th>
                                                <th width="10%" style="text-align:center">Description</th>
                                                <th width="10%" style="text-align:center">Offer</th>
                                                <th width="10%" style="text-align:center">Discount</th>
                                                <th width="10%" style="text-align:center">Price</th>
                                                <th width="20%" style="text-align:center">Upload Images</th>
                                                <th width="20%" style="text-align:center">Action</th>
                                            </tr>
                                            <tbody class="add_more_vendor">
                                                @if (!is_null($edit_vendor))
                                                    @foreach ($edit_vendor->vendor_name ?? [] as $index => $instance)
                                                        @if (!empty($instance))
                                                            <tr>
                                                                <td><input type="text" name="vendor_name[]"
                                                                        style="border:none; width: 100%;"
                                                                        value="{{ $instance }}" readonly></td>
                                                                <td><input type="text" name="vendor_description[]"
                                                                        style="border:none; width: 100%;"
                                                                        value="{{ $edit_vendor->vendor_description[$index] ?? '' }}"
                                                                        readonly>
                                                                </td>
                                                                <td><input type="text" name="vendor_offer[]"
                                                                        style="border:none; width: 100%;"
                                                                        value="{{ $edit_vendor->vendor_offer[$index] ?? '' }}"
                                                                        readonly>
                                                                </td>
                                                                <td><input type="text" name="vendor_discount[]"
                                                                        style="border:none; width: 100%;"
                                                                        value="{{ $edit_vendor->vendor_discount[$index] ?? '' }}"
                                                                        readonly>
                                                                </td>
                                                                <td><input type="text" name="vendor_price[]"
                                                                        style="border:none; width: 100%;"
                                                                        value="{{ $edit_vendor->vendor_price[$index] ?? '' }}"
                                                                        readonly>
                                                                </td>
                                                                <td>
                                                                    <input type="hidden"
                                                                        value="{{ isset($edit_vendor->vendor_image[$index]) ? $edit_vendor->vendor_image[$index] : '' }}"
                                                                        name="old_image[]">

                                                                    @if (isset($edit_vendor->vendor_image[$index]) && !empty($edit_vendor->vendor_image[$index]))
                                                                        <img src="{{ asset('public/panel/images/vendor_image/' . $edit_vendor->vendor_image[$index]) }}"
                                                                            style="width: 50px;height:50px;">
                                                                    @else
                                                                        <img src="{{ asset('public/panel/images/vendor_image/default.png') }}"
                                                                            style="width: 50px;height:50px;"
                                                                            alt="img not uploaded">
                                                                    @endif
                                                                </td>

                                                                <td style="text-align:center; color:#FF0000">
                                                                    {{-- <a href="{{ route('delete_vendory_list', [$edit_vendor->id,$loop->index]) }}">
                                                                    <button style="text-align:center; color:#FF0000"
                                                                        class="delete-row1"><i
                                                                            class="fa fa-trash-o"></i></button>
                                                                    </a> --}}
                                                                    <a href="javascript:void(0)">
                                                                        <button type="button"
                                                                            style="text-align:center; color:#FF0000"
                                                                            class="vendor_data_del"
                                                                            data-id="{{ $edit_vendor->id }}"
                                                                            data-index="{{ $loop->index }}"><i
                                                                                class="fa fa-trash-o"></i></button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endif
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
                <div class="row ">
                    <div class="col-md-12">
                        {{-- <div class="panel panel-defult">
                            <div class="panel-body">
                                <div class="add_utf_listing_section margin-top-45">
                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-list"></i>Location</h3>
                                    </div>
                                    <div class="row with-forms">
                                        <div class="col-md-3">
                                            <label>City</label>
                                            <!-- <input type="text" class="form-control" placeholder="" value=""> -->
                                            <select class="form-control" name="location_city">
                                                <option disabled selected>Select</option>
                                                @foreach ($city as $citys)
                                                    <option value="{{ $citys->id }}"
                                                        {{ $edit_listing->location_city == $citys->id ? 'selected' : '' }}>
                                                        {{ $citys->city }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Address</label>
                                            <input type="text" name="location_address" class="form-control"
                                                placeholder="" value="{{ $edit_listing->location_address }}">
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div> --}}
                        <div class="utf_add_listing_part_headline_part">
                            <button id="on" type="submit" class="btn mjks"
                                style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;">
                                Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-md-12" style="overflow:scroll">

            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="modal-title">Update Wedding Venue Type</h5>
                            </div>
                            <div class="col-md-2" align="right">
                                <button type="button" class="close" data-dismiss="modal"
                                    onclick="closeCustomModal()">&times;</button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('update_venue_type') }}" method="post">
                            @csrf
                            <input type="hidden" id="id" name="id">
                            <input type="hidden" value="{{ $edit_listing->id }}" name="listing_id">
                            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                                <div class="col-md-12">

                                    <div class="col-md-3">
                                        <label> Wedding Venue Type</label>

                                        <select class="form-control" id="amenities_for_booking1" name="amenity">
                                            <option disabled selected>Select</option>
                                            @foreach ($category as $categorys)
                                                <option value="{{ $categorys->id }}">{{ $categorys->category }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-md-2">
                                        <label> Venue Name</label>
                                        <input type="text" class="form-control" name="venue_name"
                                            id="wedding_venue_name1">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Capacity</label>
                                        <input type="text" class="form-control" id="capacity1" name="capacity">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Price</label>
                                        <input type="text" class="form-control" id="price1" name="price">
                                    </div>

                                    <div class="col-md-3">
                                        <button type="submit" class="btn mjks"
                                            style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;margin-top: 3vh;"><i
                                                class="fa fa-plus " aria-hidden="true"></i>
                                            Update</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="modal-title">Update Time Slot</h5>
                        </div>
                        <div class="col-md-2" align="right">
                            <button type="button" class="close" data-dismiss="modal"
                                onclick="closeCustomModal()">&times;</button>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <form action="{{ route('update_time_slot') }}" method="post">
                        @csrf
                        <input type="hidden" id="time_id" name="id">
                        <input type="hidden" value="{{ $edit_listing->id }}" name="listing_id">
                        <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                            <div class="col-md-12">

                                <div class="col-md-3">
                                    <label> Wedding Venue Type</label>

                                    <select class="form-control" id="category_id1" name="category_id">
                                        <option disabled selected>Select</option>
                                        @foreach ($category as $categorys)
                                            <option value="{{ $categorys->id }}">{{ $categorys->category }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <label>From Time</label>
                                    <input type="time" class="form-control" id="from_time_slot1"
                                        placeholder="10 Am : 10PM" name="from_time_slot">
                                </div>
                                <div class="col-md-3">
                                    <label>To Time</label>
                                    <input type="time" class="form-control" id="to_time_slot1"
                                        placeholder="10 Am : 10PM" name="to_time_slot">
                                </div>

                                <div class="col-md-3">
                                    <button type="submit" class="btn mjks"
                                        style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;margin-top: 3vh;"><i
                                            class="fa fa-plus " aria-hidden="true"></i>
                                        Update</button>
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
        $(document).ready(function() {
            $('#other_city').hide();
            console.log("Initial value:", $('#select_city').val());
            if ($('#select_city').val() == null) {
                $('#other_city').show(); // Show the div if 'other' is selected
            } else {
                $('#other_city').hide(); // Hide the div if any other option is selected
            }

            $('#select_city').change(function() {
                console.log($(this).val());
                if ($(this).val() == 'other') {
                    $('#other_city').show(); // Show the div if 'other' is selected
                } else {
                    $('#other_city').hide(); // Hide the div if any other option is selected
                }
            });

            $(".add-row").click(function() {

                var amenities_for_booking = $('#amenities_for_booking').val();
                var amenities_for_booking_name = $('#amenities_for_booking option:selected').text();
                var capacity = $('#capacity').val();
                var price = $('#price').val();
                var wedding_venue_name = $('#wedding_venue_name').val();

                var markup =
                    '<tr>' +
                    '<td>' +
                    '<input type="hidden" name="amenities_for_booking[]" required style="border:none; width: 100%;" value="' +
                    amenities_for_booking + '">' +
                    '<input type="text" required readonly style="border:none; width: 100%;" value="' +
                    amenities_for_booking_name + '">' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" name="venue_name[]" required readonly style="border:none; width: 100%;" value="' +
                    wedding_venue_name + '">' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" name="capacity[]" required readonly style="border:none; width: 100%;" value="' +
                    capacity + '">' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" name="price[]" required readonly style="border:none; width: 100%;" value="' +
                    price + '">' +
                    '</td>' +
                    '<td style="text-align:center; color:#FF0000">' +
                    '<button class="delete-row"><i class="fa fa-trash-o"></i></button>' +
                    '</td>' +
                    '</tr>';

                $(".add_more").append(markup);

                // Clear the input field
                $('#amenities_for_booking').val('');
                $('#capacity').val('');
                $('#price').val('');
                $('#wedding_venue_name').val('');

            });

            // Find and remove selected table rows
            $("tbody").delegate(".delete-row", "click", function() {
                $(this).parents("tr").remove();
            });

            var src;
            var blob;
            var fileExtension;
            var fileName;
            $("#vendor_image").on('change', function(e) {
                src = URL.createObjectURL(e.target.files[0]);
                let file = e.target.files[0];
                fileExtension = file.name.split('.').pop();
                fileName = file.name;
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    blob = e.target.result;
                };
            })

            $(".add-row-vendor").click(function() {

                var vendor_name = $('#vendor_name').val();
                var vendor_description = $('#vendor_description').val();
                var vendor_price = $('#vendor_price').val();
                var vendor_offer = $('#vendor_offer').val();
                var vendor_discount = $('#vendor_discount').val();
                var vendor_image = $('#vendor_image').val();
                var image_src = src;
                let link = '';
                link = '<img style="height:70px;width:auto;" src="' + image_src + '">';
                var markup =
                    '<tr><td><input type="text" name="vendor_name[]" required="" readonly style="border:none; width: 100%;" value="' +
                    vendor_name + '"></td>' +
                    '<td><input type="text" name="vendor_description[]" required="" readonly style="border:none; width: 100%;" value="' +
                    vendor_description + '"></td>' +
                    '<td><input type="text" name="vendor_offer[]" required="" readonly style="border:none; width: 100%;" value="' +
                    vendor_offer + '"></td>' +
                    '<td><input type="text" name="vendor_discount[]" required="" readonly style="border:none; width: 100%;" value="' +
                    vendor_discount + '"></td>' +
                    '<td><input type="text" name="vendor_price[]" required="" readonly style="border:none; width: 100%;" value="' +
                    vendor_price + '"></td>' + '<td><input name="vendor_image[]" type="hidden" value="' +
                    blob + '"><a target="_blank" href="' + image_src + '" >' + link + '</a></td>' +
                    '<td style="text-align:center; color:#FF0000"><button class="delete-row1"><i class="fa fa-trash-o"></i></button></td></tr>';

                $(".add_more_vendor").append(markup);

                // Clear the input field
                $('#vendor_name').val('');
                $('#vendor_description').val('');
                $('#vendor_price').val('');
                $('#vendor_image').val('');
                $('#vendor_discount').val('');
                $('#vendor_offer').val('');
                src = null;
                blob = null;

            });

            // Find and remove selected table rows
            $("tbody").delegate(".delete-row1", "click", function() {
                $(this).parents("tr").remove();
            });

            $(".add-row-time").click(function() {

                var from_time_slot = $('#from_time_slot').val();
                var to_time_slot = $('#to_time_slot').val();
                var category_id = $('#category_id').val();
                var category_name = $('#category_id option:selected').text();
                var markup =
                    '<tr><td><input type="hidden" required="" readonly name="category_id[]" style="border:none; width: 100%;" value="' +
                    category_id +
                    '"><input type="text" required="" style="border:none; width: 100%;" value="' +
                    category_name.trim() + '" readonly></td>' +
                    '<td><input type="text" name="from_time_slot[]" readonly required="" style="border:none; width: 100%;" value="' +
                    from_time_slot + '"></td>' +
                    '<td><input type="text" name="to_time_slot[]" required="" readonly style="border:none; width: 100%;" value="' +
                    to_time_slot + '"></td>' +
                    '<td style="text-align:center; color:#FF0000"><button class="delete-row2"><i class="fa fa-trash-o"></i></button></td></tr>';

                $(".add_more_time").append(markup);

                // Clear the input field
                $('#time_slot').val('');

            });

            // Find and remove selected table rows
            $("tbody").delegate(".delete-row2", "click", function() {
                $(this).parents("tr").remove();
            });

        });
    </script>

    <script>
        // Assuming you are using jQuery
        $(document).ready(function() {
            // $('.delete-banner-image').click(function(e) {
            //     e.preventDefault();
            //     var image = $(this).data('image');
            //     var id = $(this).data('id');
            //     if (confirm('Are you sure you want to delete this image?')) {
            //         window.location.href = '{{ url('delete_banner_image') }}/' + id + '/' + image;
            //     }
            // });
            $(document).on('click', '.delete-banner-image', function(e) {
                e.preventDefault();
                var image = $(this).data('image');
                var id = $(this).data('id');

                if (confirm('Are you sure you want to delete this image?')) {
                    $.ajax({
                        url: '{{ url('delete_banner_image') }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}', // Laravel CSRF token
                            id: id,
                            image: image
                        },
                        success: function(response) {
                            if (response.success) {
                                // Remove the image element from the page
                                $('a[data-id="' + id + '"][data-image="' + image + '"]')
                                    .closest('div').remove();
                                // alert('Banner image deleted successfully.');
                            } else {
                                alert('Failed to delete banner image.');
                            }
                        },
                        error: function(xhr) {
                            console.error('Error:', xhr);
                            alert('An error occurred while deleting the banner image.');
                        }
                    });
                }
            });



            // $('.vendor_data_del').click(function(e) {
            //     e.preventDefault();
            //     var index = $(this).data('index');
            //     var id = $(this).data('id');
            //     console.log(index);
            //     console.log(id);
            //     if (confirm('Are you sure you want to delete this?')) {
            //         window.location.href = '{{ url('delete_vendory_list') }}/' + id + '/' + index;
            //     }
            // });

            $('.vendor_data_del').click(function(e) {
                e.preventDefault();
                var index = $(this).data('index');
                var id = $(this).data('id');
                console.log(index);
                console.log(id);

                if (confirm('Are you sure you want to delete this?')) {
                    $.ajax({
                        url: '{{ url('delete_vendory_list') }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}', // Laravel CSRF token
                            id: id,
                            index: index
                        },
                        success: function(response) {
                            if (response.status) {
                                // alert('Vendor data deleted successfully.');
                                // Optionally, remove the row from the table or update the page
                                // For example, you can remove the row from the table:
                                $('button[data-id="' + id + '"][data-index="' + index + '"]')
                                    .closest('tr').remove();
                            } else {
                                alert('Failed to delete vendor data.');
                            }
                        },
                        error: function(xhr) {
                            console.error('Error:', xhr);
                            alert('An error occurred while deleting the vendor data.');
                        }
                    });
                }
            });


            // $('.del_time').click(function(e) {
            //     e.preventDefault();
            //     var id = $(this).data('id');
            //     console.log(id);
            //     if (confirm('Are you sure you want to delete this?')) {
            //         window.location.href = '{{ url('delete_time_slot') }}/' + id;
            //     }
            // });
            $(document).on('click', '.del_time', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                console.log(id);

                if (confirm('Are you sure you want to delete this?')) {
                    $.ajax({
                        url: '{{ url('delete_time_slot') }}/' + id,
                        type: 'get',
                        data: {
                            _token: '{{ csrf_token() }}' // Laravel CSRF token
                        },
                        success: function(response) {
                            if (response.success) {
                                // Remove the row from the table
                                $('button[data-id="' + id + '"]').closest('tr').remove();
                                // alert('Time slot deleted successfully');
                            } else {
                                alert('Failed to delete time slot');
                            }
                        },
                        error: function(xhr) {
                            console.error('Error:', xhr);
                            alert('An error occurred while deleting the time slot');
                        }
                    });
                }
            });


        });
    </script>

    <script>
        function initAutocomplete() {
            var input = document.getElementById('address-input');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    console.log("Place details not available for input: '" + place.name + "'");
                    return;
                }
                // Use place object for further processing
                console.log("Selected place:", place);
            });
        }
    </script>
    <script>
        $(document).on('click', '.editVenueTypeModal', function() {

            $('#exampleModal').modal('show');
            $('#id').val($(this).attr('id'));
            $('#amenities_for_booking1').val($(this).attr('amenity'));
            $('#wedding_venue_name1').val($(this).attr('venue_name'));
            $('#capacity1').val($(this).attr('capacity'));
            $('#price1').val($(this).attr('price'));
            // $('#user_name').text('Remark: ' + $(this).attr(
            //     'user_name'
            //     )); //agar hume name show kr na hai text() use kr na or koi value form ke sath send kr ni ho to val() use kr na
            // //text('Disbale User :' + $(this).attr('user_name')) -- name ke sath agar koi static text bhi print kr na ho to  text('static text'+ jo value set kr na hai vo) 

        });
    </script>
    <script>
        $(document).on('click', '.editTimeSlot', function() {

            $('#exampleModal1').modal('show');
            $('#time_id').val($(this).attr('time_id'));
            $('#category_id1').val($(this).attr('category_id'));
            $('#from_time_slot1').val($(this).attr('from_time_slot'));
            $('#to_time_slot1').val($(this).attr('to_time_slot'));
            $('#category').val($(this).attr('category'));
          
        });
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1Cz13aBYAbBYJL0oABZ8KZnd7imiWwA4&libraries=places&callback=initAutocomplete"
        async defer></script>
@stop
