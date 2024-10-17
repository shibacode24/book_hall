<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\vendor\AddListing;
use App\Models\website\Booking;
use App\Models\admin\City;
use App\Models\vendor\ListingAmenity;
use App\Models\vendor\TimeSlot;
use App\Models\vendor\VendorInformation;
use App\Models\website\vendor_registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function all_listing(Request $request)
    {
        $all_listing = AddListing :: 
        // leftjoin('listing_amenities','listing_amenities.listing_id','=','add_listing.id')
        // ->leftjoin('category','category.id','=','listing_amenities.amenity')
        // ->select('add_listing.*','listing_amenities.amenity','listing_amenities.price','listing_amenities.capacity','category.category')
        get ();
        // echo json_encode($all_listing);
        // exit();
        return view('admin.all_listing',compact('all_listing'));

    }

    public function vendor_list(Request $request)
    {
        $vendor_list = vendor_registration :: 
        get ();
        // echo json_encode($vendor_list);
        // exit();
        return view('admin.vendor_list',compact('vendor_list'));

    }

    public function approve_vendor(Request $request)
    {
        $approve = vendor_registration :: where('id',$request->id)->first();
        $approve->status = 'Approved';
        $approve->save();
        return back();
    }

    public function reject_vendor(Request $request)
    {
        $reject = vendor_registration :: where('id',$request->id)->first();

        $reject->status = 'Rejected';
        $reject->save();
        return back();
    }

    public function verified_vendor(Request $request)
    {
        $verified = vendor_registration :: where('id',$request->id)->first();

        $verified->verified = $verified->verified == '1' ? '0' : '1'; 
        // echo json_encode($verified);
        // exit();
        $verified->save();
        return back();
    }

    public function approve_listing(Request $request)
    {
        $approve = AddListing :: where('id',$request->id)->first();

        $approve->status = 'Approve';
        $approve->save();
        return back();
    }

    public function reject_listing(Request $request)
    {
        $reject = AddListing :: where('id',$request->id)->first();

        $reject->status = 'reject';
        $reject->save();
        return back();
    }

    public function all_approve_booking(Request $request)
    {
     $all_approve_booking = Booking::
     where('booking.status','1');
     if(isset($request->city_id))
     {
        $all_approve_booking =  $all_approve_booking->where('add_listing.location_city',$request->city_id);
     }
     if (isset($request->from_date) && isset($request->to_date)) {
        $all_approve_booking = $all_approve_booking->whereDate('booking.created_at', '<=', $request->to_date)
          ->whereDate('booking.created_at', '>=', $request->from_date);
      }
     $all_approve_booking =  $all_approve_booking->leftjoin('listing_amenities','listing_amenities.listing_id','=','booking.listing_id')
     ->join('category','category.id','=','listing_amenities.amenity')
     ->leftjoin('add_listing','add_listing.id','=','booking.listing_id')
     ->select('booking.*','add_listing.name as hall_name','listing_amenities.amenity','listing_amenities.venue_name','listing_amenities.price','listing_amenities.capacity','category.category')
     ->get();
    //  echo json_encode($all_approve_booking);
    //  exit();

     $city = City::get();

     return view('admin.booking',compact('all_approve_booking','city'));
    }

 
    
    public function dashboard()
    {
     return view('admin.dashboard');
    }

    public function getBookingData() {
        $bookingCount = DB::table('booking')->where('status', '1')->count();
        $enquiryCount = DB::table('booking')->where('status', '0')->count();
        $cancelledCount = DB::table('booking')->where('status', '2')->count();
    
        return response()->json([
            'booking' => $bookingCount,
            'enquiry' => $enquiryCount,
            'cancelled' => $cancelledCount
        ]);
    }


    public function view_listing(Request $request)
    {

      $view_listing = AddListing ::where('id',$request->id)->first();
      $vanue_type = ListingAmenity ::where('listing_id',$request->id)->get();
      $time_slot = TimeSlot ::where('listing_id',$request->id)->get();
      $vendor_information = VendorInformation ::where('add_listing_id',$request->id)->first();
    //   echo json_encode($vendor_information);
    //   exit();

       return view('admin.view_listing',compact('view_listing','vanue_type','time_slot','vendor_information'));
    }
   
}
