@extends('vendor.layout')
@section('content')
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <div class="page-content-wrap">

        <!--    <div class="row">
                             <div class="panel-body" style="padding:1px 5px 2px 5px;">
                           
                            <div class="col-md-12" style="margin-top:5px;">
                                    <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label>
                                       
                                  
                                <a href="added_project_entry.html"> <button id="on" type="button" class="btn mjks"
                                    style="color:#FFFFFF; height:30px; width:auto;background-color: #009999;"><i
                                        class="fa fa-plus"></i>Added Project Entry</button>
                            </a>
                    </div>
                                </div>
                           
                             </div>-->

        <div class="row">
            <div class="panel-body" style="padding:1px 5px 2px 5px;">

                <div class="col-md-12" style="margin-top:5px;">
                    {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}



                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: center;margin-top: 5px;">
                <h6 class="panel-title"
                    style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:12px; padding:7px;"
                    align="center">
                    <i class="fa fa-file-text"> &nbsp;<b style="font-family: 'Open Sans', sans-serif;">Confirm Booking</b>
                    </i>
                </h6>

            </div>
			
						   <div class="col-md-12" style="text-align: center;margin-top: 5px;">
			 				  <a href="{{route('add_booking')}}"> <button type="button" class="btn mjks"
                style="color:#FFFFFF; height:30px; width:auto;background-color: #e60c0c;"><i
                    class="fa fa-plus"></i>Add Booking</button>
        </a>    
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
                                <th>Advance</th>
                                <th>Remaining</th>
                                <th>Guest</th>
                                <th>Status</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        {{-- @json($approve_booking) --}}
                        <tbody>
                            @foreach ($approve_booking as $approve_bookings)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ date('d-m-Y', strtotime($approve_bookings->date)) }}</td>
                                    <td>{{ $approve_bookings->name }}</td>
                                    <td>{{ $approve_bookings->contact_no }}</td>
                                    <td>{{ $approve_bookings->time_slot }}</td>
                                    <td>{{ $approve_bookings->venue_name ?? '' }}</td>
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
                                @endforeach
                                @endif --}}
                                    {{-- <td>{{ $approve_bookings->price }}
                                        <span> <a><i class='bx bx-edit'></i></span>
                                    </td> --}}
                                    <td> <span
                                            id="price-{{ $approve_bookings->booking_id }}">{{ $approve_bookings->price }}</span>
                                        <span>
                                            <a href="javascript:void(0);" class="edit-price"
                                                data-id="{{ $approve_bookings->booking_id }}"
                                                data-price="{{ $approve_bookings->price }}"
                                                data-name="{{ $approve_bookings->name }}">
                                                <i class='bx bx-edit'></i>
                                            </a>
                                        </span>
                                    </td>
                                    <td>
                                        <span id="advance-{{ $approve_bookings->booking_id }}">
                                            {{ $approve_bookings->advance ?? 0 }}
                                        </span>
                                        <span>
                                            <a href="javascript:void(0);" class="edit-advance"
                                                data-id="{{ $approve_bookings->booking_id }}"
                                                data-advance="{{ $approve_bookings->advance }}"
                                                data-name="{{ $approve_bookings->name }}"
                                                data-price="{{ $approve_bookings->price }}">
                                                <i class='bx bx-edit'></i>
                                            </a>
                                        </span>
                                    </td>
                                    {{-- @if ($approve_bookings->advance == null)
                                        <td>0</td>
                                    @else --}}
                                    <td>
                                        <span class="remaining-{{ $approve_bookings->booking_id }}">
                                            {{ $approve_bookings->price - $approve_bookings->advance}}
                                        </span>
                                    </td>
                                    {{-- @endif --}}

                                    <td>{{ $approve_bookings->guest }}</td>

                                    <td> <button
                                            style="background-color:#10af23; border:none; max-height:25px;color:#FFFFFF"
                                            type="button" class="btn btn-info">Approved</button>
                                    </td>

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
								<button type="button" class="close2 btn btn-secondary" data-dismiss="modal" aria-label="Close">Close
                                </button>
                            <!--    <button type="button" class="btn btn-secondary close2" data-bs-dismiss="modal">Close</button>-->
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
			
			 $('.close2').on('click', function() {
                $('#editAdvance').modal('hide');
            })
			
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
                        var advance = parseFloat($('#advance-' + response.id).text());
                        var remaining = price - advance;

                // Update the remaining amount in the UI
                $('.remaining-' + response.id).text(remaining); 
                        console.log(remaining);

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
      

        $('#booking_id1').val(id1);
        $('#advance').val(advance);

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
         
                $('#price-' + response.id).text(response.price);
                $('#advance-' + response.id).text(response.advance);

                var updatedAdvance = parseFloat(response.advance);
                var price = parseFloat(response.price);

                // Calculate the remaining amount
                var remaining = price - updatedAdvance;
                console.log(remaining);
                // Update the remaining amount in the UI
                $('.remaining-' + response.id).text(remaining); 
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
