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
            <form id="registerForm" action="{{ route('add_listing_store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12">
                    <div class="panel panel-defult">
                        <div class="panel-body">

                            <div class="add_utf_listing_section margin-top-45">
                                <div class="utf_add_listing_part_headline_part">
                                    <h3><i class="sl sl-icon-list"></i>Add Listing</h3>
                                </div>

                                <div class="row with-forms">
                                    <div class="col-md-3">
                                        <label>City</label>
                                        <!-- <input type="text" class="form-control" placeholder="" value=""> -->
                                        <select class="form-control" name="location_city" id="select_city">
                                            <option disabled selected>Select</option>
                                            <option value="other">Other</option>
                                            @foreach ($city as $citys)
                                                <option value="{{ $citys->id }}"
                                                    @if (old('location_city') == $citys->id) selected @endif>{{ $citys->city }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3" id="other_city">
                                        <label>Add City</label>
                                        <input type="text" name="other_city" class="form-control"
                                                    placeholder="" value="">
                                    </div>
                                    <div class="col-md-5">
                                        <label>Address for google map</label>
                                        {{-- <input type="text" name="location_address" class="form-control"
                                                    placeholder="" value=""> --}}
                                        <input type="text" name="location_address" class="form-control"
                                            id="address-input" placeholder="Enter an address"
                                            value="{{ old('location_address') }}">
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
                                <label>Business Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="col-md-2">
                                <label>Contact No</label>
                                <input type="text" class="form-control" maxlength="10" name="contact_no"
                                    placeholder="Contact No" value="{{ old('contact_no') }}" maxlength="10">
                            </div>
                            <div class="col-md-2">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                                    placeholder="Address">
                            </div>

                            <div class="col-md-2">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="Email">
                            </div>

                            <div class="col-md-2">
                                <label>Google Map Link</label>
                                <input type="text" class="form-control" name="google_map_link"
                                    value="{{ old('google_map_link') }}" placeholder="Google Map Link">
                            </div>

                            <div class="col-md-2">
                                <label>Website Link</label>
                                <input type="text" class="form-control" name="website_link"
                                    value="{{ old('website_link') }}" placeholder="Website Link">
                            </div>
                            <div class="col-md-2">
                                <label>Facebook Link</label>
                                <input type="text" class="form-control" name="facebook_link"
                                    value="{{ old('facebook_link') }}" placeholder="Facebook Link">
                            </div>


                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Instagram Link</label>
                                <input type="text" class="form-control" name="instagram_link"
                                    placeholder="Instagram Link" value="{{ old('instagram_link') }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Linkedin Link</label>
                                <input type="text" class="form-control" name="linkedin_link" placeholder="Linkedin Link"
                                    value="{{ old('linkedin_link') }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Youtube Link</label>
                                <input type="text" class="form-control" name="youtube_link" placeholder="Youtube"
                                    value="{{ old('youtube_link') }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Twitter Link</label>
                                <input type="text" class="form-control" name="twitter_link"
                                    placeholder="Twitter Link" value="{{ old('twitter_link') }}">
                            </div>
                            <div class="col-md-2" style="margin-top:5px;">
                                <label>Threads Link</label>
                                <input type="text" class="form-control" name="threads_link"
                                    placeholder="Threads Link" value="{{ old('threads_link') }}">
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
                                                    value="{{ $aminitiess->id }}">
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
                                                placeholder="" value="{{ old('contact_person_name') }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Contact No</label>
                                            <input type="text" name="contact_person_number" maxlength="10"
                                                class="form-control" placeholder=""
                                                value="{{ old('contact_person_number') }}" maxlength="10">
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
                                            id="show-price-yes" value="yes">
                                        <label class="form-check-label" for="show-price-yes">Yes</label>

                                        <input class="form-check-input" type="radio" name="show_price"
                                            id="show-price-no" value="no">
                                        <label class="form-check-label" for="show-price-no">No</label>
                                    </div>
                                </div>
                              
                                <div class="col-md-3">
                                    <label> Wedding Venue Type</label>
                                    {{-- <input type="text" class="form-control" id="amenities_for_booking" placeholder=""
                                        value="{{ old('facebook_link') }}"> --}}
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
                                        style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;margin-top: 2vh;"><i
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

                                        </tbody>


                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="panel panel-defult" style="padding-bottom:30px;">
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
                                <div class="col-md-12" style="margin-top: 2vh; ">
                                    <table width="100%" border="1">
                                        <tr style="background-color:#f0f0f0; height:30px;">
                                            <th width="20%" style="text-align:center">Wedding Venue Type</th>
                                            <th width="20%" style="text-align:center">From Time Slot</th>
                                            <th width="20%" style="text-align:center">To Time Slot</th>
                                            <th width="20%" style="text-align:center">Action</th>
                                        </tr>
                                        <tbody class="add_more_time">

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
                                    <textarea class="form-control" name="description" cols="10" rows="5" required>{{ old('description') }}</textarea>
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
                                        </div>

                                        <div class="col-md-6">
                                            <label>Front Page Images
                                            </label>
                                            <input type="file" class="form-control" name="front_page_image"
                                                placeholder="" value="">
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
                                                    value="{{ $categorys->id }}">
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
                                            
                                            <select class="form-control" name="location_city">
                                                <option disabled selected>Select</option>
                                                @foreach ($city as $citys)
                                                    <option value="{{ $citys->id }}">{{ $citys->city }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-5">
                                            <label>Address</label>
                                           
                                                <input type="text" name="location_address" class="form-control" id="address-input" placeholder="Enter an address">
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

                <!-- START DEFAULT DATATABLE -->



            </div>
        </div>
    </div>

@stop

@section('js')

    <script>
        $(document).ready(function() {
            $('#other_city').hide();
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
                var wedding_venue_name = $('#wedding_venue_name').val();
                var price = $('#price').val();

                var markup =
                    '<tr><td><input type="hidden" name="amenities_for_booking[]" required="" style="border:none; width: 100%;" value="' +
                    amenities_for_booking +
                    '"><input type="text" required="" readonly style="border:none; width: 100%;" value="' +
                    amenities_for_booking_name + '"></td>' + '<td><input type="text" readonly name="venue_name[]" required="" style="border:none; width: 100%;" value="' +
                        wedding_venue_name + '"></td>'+
                    '<td><input type="text" name="capacity[]" readonly required="" style="border:none; width: 100%;" value="' + capacity + '"></td>' +
                    '<td><input type="text" name="price[]" readonly required="" style="border:none; width: 100%;" value="' +
                    price + '"></td>' +
                    '<td style="text-align:center; color:#FF0000"><button class="delete-row"><i class="fa fa-trash-o"></i></button></td></tr>';

                $(".add_more").append(markup);

                // Clear the input field
                $('#amenities_for_booking').val('');
                $('#wedding_venue_name').val('');
                $('#capacity').val('');
                $('#price').val('');

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
                    '<tr><td><input type="text" name="vendor_name[]" readonly required="" style="border:none; width: 100%;" value="' +
                    vendor_name + '"></td>' +
                    '<td><input type="text" name="vendor_description[]" readonly required=""  style="border:none; width: 100%;" value="' +
                    vendor_description + '"></td>' +
                    '<td><input type="text" name="vendor_offer[]" required="" readonly style="border:none; width: 100%;" value="' +
                    vendor_offer + '"></td>' +
                    '<td><input type="text" name="vendor_discount[]" required="" readonly style="border:none; width: 100%;" value="' +
                    vendor_discount + '"></td>' +
                    '<td><input type="text" name="vendor_price[]" required="" readonly  style="border:none; width: 100%;" value="' +
                    vendor_price + '"></td>' + '<td><input name="vendor_image[]" type="hidden" value="' +
                    blob + '"><a target="_blank" href="' + image_src + '" >' + link + '</a></td>' +
                    '<td style="text-align:center; color:#FF0000"><button class="delete-row1"><i class="fa fa-trash-o"></i></button></td></tr>';

                $(".add_more_vendor").append(markup);

                // Clear the input field
                $('#vendor_name').val('');
                $('#vendor_description').val('');
                $('#vendor_price').val('');
                $('#vendor_image').val('');
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
                    '"><input type="text" readonly required="" style="border:none; width: 100%;" value="' +
                    category_name.trim() + '"></td>' +
                    '<td><input type="text" name="from_time_slot[]" readonly required="" style="border:none; width: 100%;" value="' +
                    from_time_slot + '"></td>' +
                    '<td><input type="text" name="to_time_slot[]" readonly required="" style="border:none; width: 100%;" value="' +
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



            $('#registerForm').validate({
                rules: {
                    amenities_for_booking: {
                        required: true
                    },
                    lastname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 4
                    },
                    retypepassword: {
                        required: true,
                        equalTo: "#password"
                    },
                    terms: {
                        required: true
                    }
                },
                messages: {

                    amenities_for_booking: {
                        required: "<span class='error-msg'>Please enter your first name</span>"
                    },
                    lastname: {
                        required: "<span class='error-msg'>Please enter your last name</span>"
                    },
                    email: {
                        required: "<span class='error-msg'>Please enter your email</span>",
                        email: "<span class='error-msg'>Please enter a valid email address</span>"
                    },
                    password: {
                        required: "<span class='error-msg'>Please enter a password</span>",
                        minlength: "<span class='error-msg'>Password must be at least 4 characters long</span>"
                    },
                    retypepassword: {
                        required: "<span class='error-msg'>Please re-enter your password</span>",
                        equalTo: "<span class='error-msg'>Passwords do not match</span>"
                    },
                    terms: {
                        required: "<span class='error-msg'>Please accept the terms and conditions</span>"
                    }
                },

                errorPlacement: function(error, element) {
                    if (element.attr("name") == "terms") {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                // submitHandler: function(form) {
                //     form.submit();
                // }
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

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1Cz13aBYAbBYJL0oABZ8KZnd7imiWwA4&libraries=places&callback=initAutocomplete"
        async defer></script>
@stop
