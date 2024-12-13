<style>
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
        width: 110px;
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

@extends('admin.layout')
@section('content')

    <!--<template>
          <b-calendar block locale="en-US"></b-calendar>
        </template>-->


    <!-- START CONTENT FRAME -->

    <div class="row">
        <div class="panel-body" style="padding:1px 5px 2px 5px;">

            <div class="col-md-12" style="margin-top:25px;" align="center">
                <div class="pieID pie"></div>
                <ul class="pieID legend">
                    <li style="border-color: green;">
                        <em>Booking</em>
                        <span id="bookingCount">0</span>
                    </li>
                    <li style="border-color: orange;">
                        <em>Enquiry</em>
                        <span id="enquiryCount">0</span>
                    </li>
                    <li style="border-color: red;">
                        <em>Cancelled</em>
                        <span id="cancelledCount">0</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>

@stop
@section('js')

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
            var listData = [data.booking, data.enquiry, data.cancelled];
            var listTotal = listData.reduce((a, b) => a + b, 0);
            var offset = 0;
            var color = ["green", "orange", "red"];
            for (var i = 0; i < listData.length; i++) {
                var size = sliceSize(listData[i], listTotal);
                iterateSlices(size, pieElement, offset, i, 0, color[i]);
                offset += size;
            }
        }

        function fetchData() {
            $.ajax({
                url: "{{ route('getBookingData') }}",
                method: 'GET',
                success: function(response) {
                    $("#bookingCount").text(response.booking);
                    $("#enquiryCount").text(response.enquiry);
                    $("#cancelledCount").text(response.cancelled);
                    createPie(response, ".pieID.pie");
                }
            });
        }

        $(document).ready(function() {
            fetchData();
        });
    </script>
@stop
