@extends('website.layout')
@section('content')
        <div class="clearfix"></div>

        <div id="titlebar" class="gradient margin-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Cancellation Policy</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="{{route('website_index')}}">Home</a></li>
                                <li>Cancellation Policy</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="fullwidth_block padding-top-50 padding-bottom-10" style="padding:20px;">
            <div class="container">
                <div class="row">

                    <h2>Cancellation Policy</h2>
                    <p align="justify">Unless explicitly specified otherwise, all bookings and purchases done on
                        bookmywedding hall are non-refundable. This includes purchases by end-customers of products like
                        Venue Booking as well as purchases by wedding businesses, and
                        vendors. <br>However, when a vendor is booked by a user, after discovering them on Bookmywedding
                        hall, the vendor's 'Refund & cancellation' policy will be applicable on those bookings. In case
                        the same isn't explicitly shared,
                        we recommend for the same to be checked before booking.
                    </p>
                    <p align="justify">Bookmyweddinghall reserves the power to restrict, totally or partially, the
                        access of certain users, and to cancel, suspend, block, edit, or delete certain type of content,
                        or cancel the accounts of users who misuse the Website, if
                        Bookmyweddinghall acquires actual knowledge that the activity or stored information is unlawful
                        or harms property or rights of another, for example (but not restricted to) cases of plagiarism.
                        </h2>
                </div>
            </div>
        </section>

      @stop