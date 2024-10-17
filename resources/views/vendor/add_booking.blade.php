<style>
    .container {
        background: #fff;
        width: 100%;
        padding: 1rem;
    }

    .title {
        font-size: 24px;
        line-height: 28px;
        font-weight: bold;
        color: #374151;
        padding-bottom: 11px;
        border-bottom: 1px solid #d7dbdf;
    }

    .form-group {
        margin-top: 25px;
        display: flex;
        flex-direction: column;
    }

    .textarea-group label,
    .form-group label {
        color: #374151;
        font-size: 16px;
        line-height: 19px;
        margin-bottom: 10px;
        text-align: left;
    }

    .form-group [type],
    .textarea-group textarea {
        border: 1px solid #d2d6db;
        border-radius: 6px;
        padding: 15px;
    }

    .form-group [type]:hover,
    .textarea-group textarea:hover {
        border-color: red;
    }

    .form-group [type]:focus,
    .textarea-group textarea:focus {
        border-color: red;
    }

    .textarea-group {
        margin-top: 24px;
    }

    .textarea-group textarea {
        resize: none;
        width: 100%;
        margin-top: 10px;
        height: calc(100% - 59px);
    }

    .checkbox-group {
        margin-top: 25px;
    }

    .checkbox-group label {
        display: flex;
    }

    .checkbox-group label::before {
        content: "\0020";
        display: flex;
        align-items: center;
        justify-content: center;
        width: 16px;
        height: 16px;
        margin-right: 8px;
        border: 1px solid #d2d6db;
        border-radius: 6px;
        transition: background 0.1s ease-in;
    }

    .checkbox-group input[type="checkbox"] {
        /* ici on ne doit pas mettre de display: none afin de pouvoir "tabber" */
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

    .checkbox-group input[type="checkbox"]:focus+label:before {
        border-color: #5850eb;
    }

    .checkbox-group input[type="checkbox"]:checked+label:before {
        color: #fff;
        content: "\2713";
        background: #5850eb;
        border-color: #5850eb;
    }

    .button {
        font-weight: bold;
        line-height: 19px;
        background: red;
        border: none;
        padding: 15px 25px;
        border-radius: 6px;
        color: white;
        width: 100%;
        margin-top: 24px;
    }

    .button:hover {
        background: red;
    }

    .button:focus {
        background: red;
    }

    @media screen and (min-width: 768px) {
        body {
            align-items: center;
            justify-content: center;
        }

        .container {
            margin: 2rem;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            max-width: 32rem;
            padding: 2rem;
        }
    }

    @media screen and (min-width: 1024px) {
        .container {
            max-width: 80%;
            width: 100%;
        }

        .checkboxes {
            display: flex;
        }

        .checkboxes> :not(:first-child) {
            margin-left: 1rem;
        }

        .grid {
            display: grid;
            grid-gap: 24px;
            grid-template-columns: 1fr 1fr 1fr;
            grid-auto-rows: 1fr;
        }

        .email-group {
            grid-column: 1;
            grid-row: 2;
        }

        .phone-group {
            grid-column: 2;
            grid-row: 2;
        }

        .textarea-group {
            grid-column: 3;
            grid-row: span 2;
            margin-right: 2rem;
        }

        .button-container {
            text-align: right;
        }

        .button {
            /* bon, bon, bon
  c'est pas tout mais j'ai faim moi ^^
  */
            width: auto;
        }
    }

    /*
    .disabled-date span {
        color: red !important;
    } */

    /* Hover Button with Red Effect */
    .button_new {
        background-color: #fff;
        /* Green */
        border: none;
        color: white;
        padding: 5px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 10px;
    }

    .button3 {
        background-color: white;
        color: black;
        border: 1.3px solid #f44336;
    }

    .button3:hover {
        background-color: #f44336;
        color: white;
    }

    .ui-datepicker td.ui-datepicker-unselectable .ui-state-disabled {
    color: red !important; /* Set the color to red for disabled dates */
    background-color: #000 !important; /* Set the background to black */
}

.ui-datepicker-unselectable .ui-state-disabled {
    color: red !important; /* Set text color to red */
    background-color: #a3d812 !important; /* Optional: background color */
}

</style>

@extends('vendor.layout')
@section('content')

    <div class="col-md-3 text-center">
    </div>


    <form id="booking_form1" action="{{ route('direct_booking') }}" method="post">
        @csrf
        {{-- <input type="text" name="listing_id" id="listing_id" value="{{$get_listing_id}}"> --}}


        <div class="col-md-6 text-center" style="margin-top: 5%">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">
                        <div class="panel-body" style="padding:1px 5px 2px 5px;">

                            <div class="col-md-12" style="margin-top:5px;">
                                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}



                            </div>
                        </div>

                    </div>

                    <h3 class="text-center" style="color:red;">Add Booking</h3>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">

                                <select name="listing_id" id="listing_id" class="form-control" value=""
                                    style="height: 45px" required>
                                    <option disabled selected> Amenity Name
                                    </option>
                                    @foreach ($get_listing_id as $get_listing_ids)
                                        <option value="{{ $get_listing_ids->id }}">{{ $get_listing_ids->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">

                                <select name="amenities_for_booking" class="form-control amenity" value="" style="height: 45px"
                                    required>
                                    <option disabled selected>Venue Type
                                    </option>
                                    @foreach ($category as $index)
                                        <option value="{{ $index->id }}">{{ ucfirst($index->category) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="select_venue" name="venue_name" class="form-control" value="{{ old('venue_name') }}"
                                    style="height: 45px" required>
                                    <option>Select Venue Name</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div style="
line-height: 40px; padding: 0 8px; outline: none; font-size: 12px; color: #808080; display: block; background-color: #fff; border: 1px solid #dbdbdb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.03);  opacity: 1; border-radius: 4px;"
                                    align="left">
                                    Price : <span class="price-value"></span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <input type="text" name="price1" class="price-value" style="display:none;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" id="datepicker" autocomplete="off" name="date"
                                    placeholder="Select Date" required>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input name="name1" type="text" value="{{ old('name') }}" placeholder="Name" required />

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input name="contact_no1" type="text" value="{{ old('contact_no1') }}" placeholder="Contact No" maxlength="10" required />

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select name="time_slot" class="form-control" value="" style="height: 45px" required>
                                    <option>Select Time</option>
                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input name="guest" type="text" placeholder="Guest" required />

                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div style="height: 45px;
line-height: 40px; padding: 0 8px; outline: none; font-size: 12px; color: #808080; display: block; background-color: #fff; border: 1px solid #dbdbdb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.03);  opacity: 1; border-radius: 4px;"
                                        align="left">
                                        Capacity: <span id="capacity-value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                                <div class="form-group">
                                    <button type="submit" class="button3 button_new"
                                        style="border-radius:5px; border-color:red;">Update</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </form>


@stop

@section('js')

<script>
    $(document).ready(function() {

        console.log(1);
        $('#booking_form1').validate({
            rules: {
                name1: {
                    required: true
                },
                time_slot: {
                    required: true,
                    // email: true
                },
                contact_no1: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                date: {
                    required: true,
                    // minlength: 4
                }
            },
            messages: {
                name1: {
                    required: "<span class='error-msg'>Please enter your name</span>"
                },
                time_slot: {
                    required: "<span class='error-msg'>Please select time slot</span>",
                    // email: "<span class='error-msg'>Please enter a valid email address</span>"
                },
                contact_no1: {
                    required: "<span class='error-msg'>Please enter your contact number</span>",
                    digits: "<span class='error-msg'>Please enter a valid contact number</span>",
                    minlength: "<span class='error-msg'>Contact number must be 10 digits long</span>",
                    maxlength: "<span class='error-msg'>Contact number must be 10 digits long</span>"
                },
                // password: {
                //     required: "<span class='error-msg'>Please enter a password</span>",
                //     minlength: "<span class='error-msg'>Password must be at least 4 characters long</span>"
                // }
            }
        });
    });
</script>

    <script>
        $(document).ready(function() {
            // INCLUDE JQUERY & JQUERY UI 1.12.1
            $(function() {
                $("#datepicker").datepicker({
                    dateFormat: "dd-mm-yy",
                    duration: "fast"
                });
            });

            setTimeout(() => {
                $('.amenity:first').trigger('click');
            }, 1500);


            $('.amenity').on('change', function() {

                var amenity = $('.amenity').val();
                var id = $('#listing_id').val();

                console.log(amenity);
                console.log(id);

                $.ajax({
                    url: '{{ route('select_venue_name') }}',
                    type: 'get',
                    data: {
                        listing_amenity_id: amenity,
                        id: id
                    },
                    success: function(response) {
                        console.log(response);
                        // Make sure listing_amenity exists
                        if (response.listing_amenity && Array.isArray(response
                                .listing_amenity)) {
                            let venueSelect = $('select[name="venue_name"]');

                            // Clear any previous options
                            venueSelect.empty();

                            // Append new options from the response
                            response.listing_amenity.forEach(function(item, index) {
                                // Check if this is the first item or some specific condition to set as selected
                                let selected = index === 0 ? 'selected' :
                                    ''; // Automatically select the first item
                                venueSelect.append('<option value="' + item.id + '" ' +
                                    selected + '>' + item.venue_name + '</option>');
                            });
                            let firstVenue = venueSelect.find('option:first').val();
                            venueSelect.val(firstVenue).trigger('change');
                            // Refresh the selectpicker
                            venueSelect.selectpicker('refresh');

                        } else {
                            console.log("No venues found or incorrect response structure");
                        }
                        $('select[name="time_slot"]').empty();
                        response.time_slot.forEach(function(slot) {
                            var optionText = slot.from_time_slot + ' - ' + slot
                                .to_time_slot;
                            console.log(optionText)
                            $('select[name="time_slot"]').append($('<option></option>')
                                .text(optionText));
                        });
                        $('.selectpicker').selectpicker('refresh');
                    },

                });
            });
            $('#select_venue').on('change', function() {
                // Clear the date picker value
                $('#datepicker').val('');

                // Get the selected venue ID
                var id = $('#select_venue').val(); // Use the select element's value
                var listing_id = $('#listing_id').val();
                console.log(id);

                $.ajax({
                    url: '{{ route('check_booking') }}',
                    type: 'get',
                    data: {
                        id: id,
                        listing_id: listing_id
                    },
                    success: function(response) {
                        // Ensure the response contains the expected data structure
                        if (response.listing_amenity) {
                            var bookingData = response
                            .booking_data; // This should be an array of dates
                            var capacity = response.listing_amenity.capacity;
                            var price = response.listing_amenity.price;

                            // Update the UI with new data
                            $('.price-value').text(formatPrice(
                            price)); // Format the price if necessary
                            $('#capacity-value').text(capacity);

                            console.log("Price:", price);
                            console.log("Capacity:", capacity);
                            console.log("Booking Data:", bookingData);

                            // Disable dates based on the booking data
                            if (bookingData && bookingData.length > 0) {
                                disableDates(bookingData); // Disable specific dates
                            }
                        } else {
                            console.log("No listing amenity found in the response.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching booking data:", error);
                    }
                });
            });

            // Function to disable specific dates
            function disableDates(bookingData) {
                $('#datepicker').datepicker('destroy'); // Destroy the previous instance
                console.log('Booking Data:', bookingData);

                // Initialize datepicker again with disabled dates logic
                $('#datepicker').datepicker({
                    format: 'yyyy-mm-dd', // Set the format for the datepicker
                    beforeShowDay: function(date) {
                        // Format the date as 'yyyy-mm-dd'
                        var year = date.getFullYear();
                        var month = ("0" + (date.getMonth() + 1)).slice(-2);
                        var day = ("0" + date.getDate()).slice(-2);
                        var dateString = year + '-' + month + '-' + day;

                        console.log('Checking Date:', dateString);

                        // Check if the date is in the bookingData array
                        if ($.inArray(dateString, bookingData) !== -1) {
                            console.log('Disabling Date:', dateString);
                            return [false, '.ui-datepicker td.ui-datepicker-unselectable .ui-state-disabled',
                            'Date not available']; // Disable the date and set class
                        }
                        return [true, '']; // Enable the date
                    }
                });
            }

            // $('#select_venue').on('change', function() {
            //     // Clear the date picker value
            //     $('#datepicker').val('');

            //     // Get the selected venue ID
            //     var id = $('#select_venue').val(); // Use the select element's value
            //     var listing_id = $('#listing_id').val();
            //     console.log(id);

            //     $.ajax({
            //         url: '{{ route('check_booking') }}',
            //         type: 'get',
            //         data: {
            //             id: id,
            //             listing_id: listing_id
            //         },
            //         success: function(response) {
            //             // Ensure the response contains the expected data structure
            //             if (response.listing_amenity) {
            //                 var bookingData = response.booking_data;
            //                 var capacity = response.listing_amenity.capacity;
            //                 var price = response.listing_amenity.price;

            //                 // Update the UI with new data
            //                 $('.price-value').text(formatPrice(
            //                     price)); // Format the price if necessary
            //                 $('#capacity-value').text(capacity);

            //                 console.log("Price:", price);
            //                 console.log("Capacity:", capacity);

            //                 // Disable dates based on the booking data
            //                 if (bookingData && bookingData.length > 0) {
            //                     disableDates(bookingData); // Disable specific dates
            //                 }
            //             } else {
            //                 console.log("No listing amenity found in the response.");
            //             }
            //         },
            //         error: function(xhr, status, error) {
            //             console.error("Error fetching booking data:", error);
            //         }
            //     });
            // });
            // // var bookingData = ['2024-09-30'];

            // // Function to disable specific dates
            // function disableDates(bookingData) {
            //     $('#datepicker').datepicker({
            //         format: 'yyyy-mm-dd', // Set the format for the datepicker
            //         beforeShowDay: function(date) {
            //             // Format the date as 'yyyy-mm-dd'
            //             var year = date.getFullYear();
            //             var month = ("0" + (date.getMonth() + 1)).slice(-2);
            //             var day = ("0" + date.getDate()).slice(-2);
            //             var dateString = year + '-' + month + '-' + day;

            //             console.log('Checking Date:', dateString);
            //             console.log(' Date:', bookingData);

            //             // Check if the date is in the bookingData array
            //             if ($.inArray(dateString, bookingData) !== -1) {
            //                 console.log('Disabling Date:', dateString);
            //                 return [false, 'disabled-date',
            //                 'Date not available']; // Disable the date and set class
            //             }
            //             return [true, '']; // Enable the date
            //         }
            //     });
            // }

            // Call the function to disable dates
            // disableDates(bookingData);

            function formatPrice(price) {
                price = price.toString();
                let parts = price.split(".");
                let integerPart = parts[0];
                let decimalPart = parts.length > 1 ? "." + parts[1] : "";

                // Format for Indian numbering system
                let lastThreeDigits = integerPart.slice(-3);
                let otherDigits = integerPart.slice(0, -3);
                if (otherDigits != '') {
                    lastThreeDigits = ',' + lastThreeDigits;
                }
                let formattedIntegerPart = otherDigits.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThreeDigits;

                return formattedIntegerPart + decimalPart;
            }


        });
    </script>


@stop
