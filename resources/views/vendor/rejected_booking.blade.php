@extends('vendor.layout')
@section('content')
    <div class="page-content-wrap">


        <div class="row">
            <div class="panel-body" style="padding:1px 5px 2px 5px;">

                <div class="col-md-12" style="margin-top:5px;">

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: center;margin-top: 5px;">
                <h6 class="panel-title"
                    style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:12px; padding:7px;"
                    align="center">
                    <i class="fa fa-file-text"> &nbsp;<b style="font-family: 'Open Sans', sans-serif;">Rejected Booking</b>
                    </i>
                </h6>

            </div>


            <div class="col-md-12" style="margin-top:5px;">

                <div class="panel panel-default">
                    <div class="col-md-2"></div>
                    <div class="panel-body" style="margin-top:-10px; margin-bottom:-5px;">
                        <div class="form-group">
                            <form role="form" method="get" action="{{route('rejected_booking')}}">
        
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top:-10px;">
                                        <div class="col-md-4" style="margin-top:15px;"></div>
    
                                    
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
                                <th>Date</th>
                                <th>Name</th>
                                <th>Contact No</th>
                                <th>Time Slot</th>
                                <th>Venue Name</th>
                                <th>Price</th>
                                <th>Guest</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        {{-- @json($approve_booking) --}}
                        <tbody>
                            @foreach ($rejected_booking as $rejected_bookings)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ date('d-m-Y', strtotime($rejected_bookings->date)) }}</td>
                                    <td>{{ $rejected_bookings->name }}</td>
                                    <td>{{ $rejected_bookings->contact_no }}</td>
                                    <td>{{ $rejected_bookings->time_slot }}</td>
                                    <td>{{ $rejected_bookings->venue_name ?? '' }}</td>
                                 
                                    <td> {{ $rejected_bookings->price }}
                                    </td>
                                
                                    <td>{{ $rejected_bookings->guest }}</td>
                                    <td>{{ $rejected_bookings->remark ??'N/A' }}</td>

                                    <td> <button
                                            style="background-color:#ee0e0e; border:none; max-height:25px;color:#FFFFFF"
                                            type="button" class="btn btn-info">Rejected</button>
                                    </td>


                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Price</h5>
                                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                            </div>
                            <div class="modal-body">
                                <form id="editPriceForm">
                                    @csrf
                                    <input type="hidden" id="booking_id" name="booking_id">
                                    <div class="mb-2">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                    <br>
                                    {{-- <div class="mb-2">
                                        <label for="advance" class="form-label">Advance</label>
                                        <input type="text" class="form-control" name="advance">
                                    </div> --}}
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary close1"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="savePrice">Update Price</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="editAdvance" tabindex="-1" aria-labelledby="editadvanceLabel"
                    aria-hidden="true">
                    <div class="modal-dialog  modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editadvanceLabel">Edit Advance</h5>
                                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> --}}
                            </div>
                            <div class="modal-body">
                                <form id="editAdvanceForm">
                                    @csrf
                                    <input type="hidden" id="booking_id1" name="booking_id">
                                    <div class="form-group">
                                        <label for="advance">Advance</label>
                                        <input type="number" class="form-control" id="advance" name="advance">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary close1">Close</button>
                                <button type="button" class="btn btn-primary" id="saveeditAdvancee">Save
                                    Advance</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop
@section('js')
    {{-- <script>
        $(document).ready(function() {
            $('.edit-price').on('click', function() {
                console.log(1);

                var id = $(this).data('id');
                var price = $(this).data('price');
                var name = $(this).data('name');
                $('#booking_id').val(id);
                $('#price').val(price);

                console.log(id);
                console.log(price);
                $('#editModalLabel').text('Edit Price: ' + name);
                $('#editModal').modal('show');

            });


            $('.close1').on('click', function() {
                $('#editModal').modal('hide');
            })


            $('#savePrice').on('click', function() {
                var form = $('#editPriceForm');
                var formData = form.serialize();

                $.ajax({
                    url: '{{ route('update_price') }}', // Update with your route
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#editModal').modal('hide');
                        $('#price-' + response.id).text(response.new_price);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('.edit-price').on('click', function() {
                var id = $(this).data('id');
                var price = $(this).data('price');
                var name = $(this).data('name');

                $('#booking_id').val(id);
                $('#price').val(price);

                $('#editModalLabel').text('Edit Price: ' + name);
                $('#editModal').modal('show');
            });

            $('.close1').on('click', function() {
                $('#editModal').modal('hide');
            });

            $('#savePrice').on('click', function() {
                var form = $('#editPriceForm');
                var formData = form.serialize();

                $.ajax({
                    url: '{{ route('update_price') }}', // Update with your route
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // Update the price in the table or UI
                        $('#price-' + response.id).text(response.new_price);
                        $('#advance-' + response.id).text(response.advance);
                        var price = parseFloat($('#price-' + response.id).text());
                        // var advance = parseFloat($('#advance-' + response.id).text());
                        // var rem = price - advance;

                        // console.log(rem);

                        // Update the data-price attribute of the edit button with the new price
                        $('.edit-price[data-id="' + response.id + '"]').data('price', response
                            .new_price);


                        // Hide the modal
                        $('#editModal').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

    <script>
        // $(document).ready(function() {
        //     $('.edit-advance').on('click', function() {
        //         var id1 = $(this).data('id');
        //         var advance = $(this).data('advance');
        //         var price = $(this).data('price');

        //         $('#booking_id1').val(id1);
        //         $('#advance').val(advance);

              
        //         $('#editAdvance').modal('show');
        //     });

        //     // When you save the updated advance, you can recalculate and update the remaining amount
        //     $('#saveeditAdvancee').on('click', function() {
        //         var form = $('#editAdvanceForm');
        //         var formData = form.serialize();

        //         $.ajax({
        //             url: '{{ route('update_advance') }}', // Update with your route
        //             method: 'POST',
        //             data: formData,
        //             success: function(response) {
        //                 $('#advance-' + response.id).text(response.advance);
        //                 var price = parseFloat(price);
        //                 var advance = parseFloat($('#advance-' + response.id).text());
        //                 var remaining = price - advance;

        //                 console.log(remaining);
        //                 // Hide the modal
        //                 $('#editAdvance').modal('hide');
        //             },
        //             error: function(xhr, status, error) {
        //                 console.log(xhr.responseText);
        //             }
        //         });
        //     });
        // });

        $(document).ready(function() {
    $('.edit-advance').on('click', function() {
        var id1 = $(this).data('id');
        var advance = parseFloat($(this).data('advance'));
        var price = parseFloat($(this).data('price'));
        
        // Calculate the remaining amount
        var remaining = price - advance;

        // Set the initial values in the modal
        $('#booking_id1').val(id1);
        $('#advance').val(advance);

        // Update the remaining amount display if needed
        $('#remaining').text('Remaining: ' + remaining); // Ensure you have this element in your modal
        
        // Show the modal
        $('#editAdvance').modal('show');
    });

    $('#saveeditAdvancee').on('click', function() {
        var form = $('#editAdvanceForm');
        var formData = form.serialize();

        $.ajax({
            url: '{{ route('update_advance') }}', // Update with your route
            method: 'POST',
            data: formData,
            success: function(response) {
                // Update the advance amount in the table
                $('#advance-' + response.id).text(response.advance);
                
                // Fetch the price again
                var price = parseFloat($('#price-' + response.id).attr('price')); // Ensure price is fetched correctly
                var updatedAdvance = parseFloat(response.advance);
                
                // Calculate the remaining amount
                var remaining = price - updatedAdvance;

                // Update the remaining amount in the UI
                $('#remaining-' + response.id).text(remaining); // Ensure this element exists in your HTML

                // Hide the modal
                $('#editAdvance').modal('hide');
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});

    </script>

@stop
