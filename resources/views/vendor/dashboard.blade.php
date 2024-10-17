<style>
    .calendar1-base {
        width: 900px;
        height: 500px;
        border-radius: 20px;
        background-color: white;
        position: relative;
        z-index: -1;
        color: black;
    }

    .year {
        color: #E8E8E8;
        font-size: 30px;
        float: right;
        position: relative;
        right: 75px;
        top: 20px;
        font-weight: bold;
    }

    .triangle-left {
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-right: 10px solid #E8E8E8;
        border-bottom: 5px solid transparent;
        float: right;
        position: relative;
        right: 90px;
        top: 36px;
    }

    .triangle-right {
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-left: 10px solid #E8E8E8;
        border-bottom: 5px solid transparent;
        float: right;
        position: relative;
        left: 20px;
        top: 36px;
    }

    .triangle-left:hover {
        border-right: 10px solid#2ECC71;
    }

    .triangle-right:hover {
        border-left: 10px solid#2ECC71;
    }

    .month-color {
        color: #27AE60;
    }

    .month-hover:hover {
        color: #27e879 !important;
    }

    .months {
        color: #AAAAAA;
        position: relative;
        left: 350px;
        top: 90px;
        word-spacing: 10px;
    }

    .month-line {
        border-color: #E8E8E8;
        position: relative;
        top: 85px;
        width: 57%;
        left: 178px;
    }

    .days {
        color: #AAAAAA;
        position: relative;
        font-size: 18px;
        left: 355px;
        top: 80px;
        word-spacing: 35px;
        font-weight: 600;
    }

    .num-dates {
        float: right;
        position: relative;
        top: 110px;
        right: 50px;
        z-index: 1;
    }

    .first-week {
        margin-bottom: 25px;
        word-spacing: 55px;
    }

    .second-week {
        margin-bottom: 25px;
        word-spacing: 53px;
    }

    .third-week {
        margin-bottom: 25px;
        word-spacing: 58px;
    }

    .fourth-week {
        margin-bottom: 25px;
        word-spacing: 58px;
    }

    .fifth-week {
        margin-bottom: 25px;
        word-spacing: 56px;
    }

    .sixth-week {
        margin-bottom: 25px;
        word-spacing: 55px;
    }

    .active-day {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background-color: #2ECC71;
        position: relative;
        top: 295px;
        left: 661px;
    }

    .white {
        color: white;
    }

    .event-indicator {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background-color: #2980B9;
        position: relative;
        top: 304px;
        left: 695px;
    }

    .two {
        position: relative;
        top: 168px;
        left: 535px;
    }

    .grey {
        color: #AAAAB1;
    }

    .calendar1-left {
        width: 300px;
        height: 500px;
        border-radius: 20px 0px 0px 20px;
        background-color: #2ECC71;
        position: relative;
        z-index: -1;
        bottom: 500px;
        color: white;
    }

    .hamburger {
        position: relative;
        top: 25px;
        left: 25px;
    }

    .burger-line:hover,
    .hamburger:hover {
        background-color: #27e879 !important;
    }

    .burger-line {
        width: 25px;
        height: 3px;
        background-color: white;
        border-radius: 15%;
        margin-bottom: 3px;
    }

    .num-date {
        font-size: 150px;
        width: 50%;
        margin: 0 auto;
        font-weight: 700;
    }

    .day {
        width: 50%;
        margin: 0px auto;
        font-size: 30px;
        position: relative;
        bottom: 60px;
    }

    .current-events {
        font-size: 15px;
        position: relative;
        margin-left: 25px;
        bottom: 30px;
    }

    .posts {
        text-decoration: underline dotted;
    }

    .posts:hover {
        color: #27e879 !important;
    }

    .create-event {
        font-size: 18px;
        position: relative;
        margin-top: 30px;
        margin-left: 25px;
    }

    .event-line {
        width: 90%;
    }

    .add-event {
        width: 20px;
        height: 20px;
        padding: 0px;
        border-radius: 50%;
        border: solid white 2px;
        position: relative;
        bottom: 42px;
        left: 260px;
    }

    .add {
        font-size: 25px;
        position: relative;
        left: 4px;
        bottom: 10px;
    }

    .add:hover,
    .create-event:hover,
    .add-event:hover {
        color: #27e879 !important;
        border-color: #27e879 !important;
    }


    .pieID {
        display: inline-block;
        vertical-align: top;
    }

    .pie {
        height: 200px;
        width: 200px;
        position: relative;
        margin: 0 30px 30px 0;
    }

    .pie::before {
        content: "";
        display: block;
        position: absolute;
        z-index: 1;
        width: 100px;
        height: 100px;
        background: #EEE;
        border-radius: 50%;
        top: 50px;
        left: 50px;
    }

    .pie::after {
        content: "";
        display: block;
        width: 120px;
        height: 2px;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
        margin: 220px auto;

    }

    .slice {
        position: absolute;
        width: 200px;
        height: 200px;
        clip: rect(0px, 200px, 200px, 100px);
        animation: bake-pie 1s;
    }

    .slice span {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        background-color: black;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        clip: rect(0px, 200px, 200px, 100px);
    }

    .legend {
        list-style-type: none;
        padding: 0;
        margin: 0;
        background: #FFF;
        padding: 15px;
        font-size: 13px;
        box-shadow: 1px 1px 0 #DDD,
            2px 2px 0 #BBB;
    }

    .legend li {
        width: 170px;
        height: 1.25em;
        margin-bottom: 0.7em;
        padding-left: 0.5em;
        border-left: 1.25em solid black;
    }

    .legend em {
        font-style: normal;
    }

    .legend span {
        float: right;
    }

    footer {
        position: fixed;
        bottom: 0;
        right: 0;
        font-size: 13px;
        background: #DDD;
        padding: 5px 10px;
        margin: 5px;
    }
</style>

@extends('vendor.layout')
@section('content')

    {{-- @json(auth()->user()) --}}
    <!-- START CONTENT FRAME -->

    <div class="row">
        <div class="panel-body" style="padding:1px 5px 2px 5px;">

            <div class="col-md-12" style="margin-top:25px;" align="center">
                <div class="pieID pie">
                </div>
                <ul class="pieID legend" align="left">
                    <li style="border-color: black;">
                        <em>Total Enquires</em>
                        <span id="TotalEnquiresCount">0</span>
                    </li>
                    <li style="border-color: green;">
                        <em>Confirmed Booking</em>
                        <span id="ConfirmedBookingCount">0</span>
                    </li>
                    <li style="border-color: red;">
                        <em>Rejected</em>
                        <span id="RejectedCount">0</span>
                    </li>
                </ul>

            </div>
        </div>

    </div>






    <div class="content-frame">
        <!-- START CONTENT FRAME TOP -->
        <div class="content-frame-top">
            <div class="page-title">
                <h2><span class="fa fa-calendar"></span> Calendar</h2>
            </div>
            <div class="pull-right">
                <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
            </div>
        </div>
        <!-- END CONTENT FRAME TOP -->


        <!-- START CONTENT FRAME BODY -->
        <div class="content-frame-body padding-bottom-0">

            <div class="row" align="center">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    {{-- <div id="alert_holder"></div> --}}
                    <div class="calendar">
                        <div id="calendar1"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>

            </div>

        </div>
        <!-- END CONTENT FRAME BODY -->

    </div>
    <!-- END CONTENT FRAME -->


    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body padding-bottom-0">

        <div class="row" align="center">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                {{-- <div id="alert_holder"></div> --}}
                <div class="calendar">
                    <div id="calendar1"></div>
                </div>
            </div>
            <div class="col-md-1"></div>

        </div>

    </div>
    <!-- END CONTENT FRAME BODY -->

    </div>
    <!-- END CONTENT FRAME -->



@stop
@section('js')

    {{-- <script>
    $(document).ready(function() {
    // Initialize FullCalendar
    var calendar = $('#calendar1').fullCalendar({
        // Your FullCalendar options here
        // Example options:
        // header: {
        //     left: 'prev,next today',
        //     center: 'title',
        //     right: 'month,agendaWeek,agendaDay'
        // },
        // Other options...
    });

    // Fetch booking data via AJAX
    function fetchBookingData() {
        // var amenityId = $('.amenity:checked').val(); // Get the selected amenity ID
        var id = $('#listing_id').val();

        $.ajax({
            url: '{{ route('check_booking') }}',
            type: 'GET',
            data: {
                listing_amenity_id: amenityId,
                id: id
            },
            success: function(response) {
                // Process the booking data and add it to FullCalendar
                var events = processBookingData(response.booking_data);
                // Add events to FullCalendar
                calendar.fullCalendar('addEventSource', events);
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            }
        });
    }

    // Process booking data to format it for FullCalendar
    function processBookingData(bookingData) {
        // Example: Convert bookingData to FullCalendar event format
        var events = [];
        bookingData.forEach(function(booking) {
            events.push({
                title: 'Booked',
                start: booking.start_date, // Assuming start_date is provided in the response
                end: booking.end_date,     // Assuming end_date is provided in the response
                // You can include additional event properties here
            });
        });
        return events;
    }

    // Trigger fetching of booking data when amenity selection changes
    $('.amenity').on('change', function() {
        fetchBookingData();
    });

    // Initial fetching of booking data on page load
    fetchBookingData();
});

</script> --}}
    {{-- <script>
    $(document).ready(function() {
        // Initialize FullCalendar
        $('#calendar1').fullCalendar({
            // Your FullCalendar options...
            events: function(title, start, name, callback) {
                // AJAX request to fetch booking data
                $.ajax({
                    url: '{{ route('fetchBookingData') }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var events = [];
                        // Process the booking data
                        $.each(response, function(index, booking) {
                            console.log(booking.date);
                            console.log(booking.name);

                            events.push({
                                title: 'Booked',
                                date: booking.date,
                                name: booking.name,
                                color: '#10af23' // Gray color for booked dates
                            });
                        });
                        // Return the formatted events
                        callback(events);
                    }
                });
            }
        });

        // Function to disable dates in FullCalendar
        // function disableDates(start) {
        //     $('#calendar1').data('fullCalendar').isInvalidDate = function(date) {
        //         var dateString = date.format('YYYY-MM-DD');
        //         return $.inArray(dateString, start) !== -1;
        //     };
        //     $('#calendar1').data('fullCalendar').updateCalendars();
        // }
    });
</script> --}}

    <script>
        $(document).ready(function() {
            fetchData();
            // Initialize FullCalendar
            $('#calendar1').fullCalendar({
                // Your FullCalendar options...
                events: function(title, start, name, callback) {
                    // AJAX request to fetch booking data
                    $.ajax({
                        url: '{{ route('fetchBookingData') }}',
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            var events = [];
                            // Process the booking data
                            $.each(response, function(index, booking) {
                                console.log(booking.date);
                                console.log(booking.name);

                                events.push({
                                    title: 'Booked',
                                    start: booking.date,
                                    end: booking
                                        .date, // assuming each booking is for one day only
                                    name: booking.name,
                                    contact: booking
                                        .contact_no, // assuming contact number is in booking data
                                    color: '#10af23' // Gray color for booked dates
                                });
                            });
                            // Return the formatted events
                            callback(events);
                        }
                    });
                },
                eventRender: function(event, element) {
                    // Append name and contact number below the title
                    element.find('.fc-title').append('<br/>' + event.name + '<br/>' + event.contact);
                }
            });
        });
    </script>




    <script type="text/javascript">
        function sliceSize(dataNum, dataTotal) {
            return (dataNum / dataTotal) * 360;
        }

        function addSlice(sliceSize, pieElement, offset, sliceID, color) {
            $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
            var offset = offset - 1;
            var sizeRotation = -179 + sliceSize;
            $("." + sliceID).css({
                "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
            });
            $("." + sliceID + " span").css({
                "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
                "background-color": color
            });
        }

        function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
            var sliceID = "s" + dataCount + "-" + sliceCount;
            var maxSize = 179;
            if (sliceSize <= maxSize) {
                addSlice(sliceSize, pieElement, offset, sliceID, color);
            } else {
                addSlice(maxSize, pieElement, offset, sliceID, color);
                iterateSlices(sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
            }
        }

        function createPie(data, pieElement) {
            // Use the correct data keys based on the response structure
            var listData = [data.TotalEnquires, data.ConfirmedBooking, data.Rejected];
            var listTotal = listData.reduce((a, b) => a + b, 0);
            var offset = 0;
            var color = ["black", "green", "red"]; // Define colors for each category

            for (var i = 0; i < listData.length; i++) {
                var size = sliceSize(listData[i], listTotal);
                iterateSlices(size, pieElement, offset, i, 0, color[i]);
                offset += size;
            }
        }
 
        function fetchData() {
            $.ajax({
                url: "{{ route('fetchBookingDataForVendor') }}",
                method: 'GET',
                success: function(response) {
                    $("#TotalEnquiresCount").text(response.TotalEnquires);
                    $("#ConfirmedBookingCount").text(response.ConfirmedBooking);
                    $("#RejectedCount").text(response.Rejected);
                    createPie(response, ".pieID.pie");
                }
            });
        }

        // $(document).ready(function() {

        // });
    </script>

@stop
