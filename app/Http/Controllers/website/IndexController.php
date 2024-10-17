<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\City;
use App\Models\admin\Slider;
use App\Models\vendor\AddListing;
use App\Models\vendor\ListingAmenity;
use App\Models\vendor\TimeSlot;
use App\Models\website\Booking;
use App\Models\website\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\website\vendor_registration;

class IndexController extends Controller
{
   public function website_index(Request $request)
   {

    $slider = Slider :: get();
    // $city = City :: get();
    $city = City :: where('status','0')->get();
    $category = Category:: get();

        // Initialize the base query
      //  $query = AddListing::where('status', 'approve');
 
            $query = AddListing::join('city', 'city.id', '=', 'add_listing.location_city')
        ->where('add_listing.status', 'approve')
        ->where('city.status', '0')
        ->select('add_listing.*', 'city.status');

    // Apply city filter if present, otherwise default to Amravati
    if (isset($request->city)) {
        $query->where('location_city', $request->city);
    } else {
        // Assuming Amravati's city ID is known, replace 1 with Amravati's city ID
        $query->where('location_city', 1); // Replace 1 with the actual ID of Amravati city
    }

    // Get listing IDs with applied filters
    $approved_listing_ids = $query->pluck('id');

    // Fetch unique amenities for these listings
    $amenities_query = DB::table('listing_amenities')
        ->whereIn('listing_id', $approved_listing_ids)
        ->distinct()
        ->select('listing_id', 'amenity');

    // Apply category filter if present, otherwise show all categories
    if (isset($request->category)) {
        $amenities_query->where('amenity', $request->category);
    }

    // Get the filtered amenities
    $amenities = $amenities_query->get();

    // If category is applied, filter listing IDs based on the amenities
    if (isset($request->category)) {
        $approved_listing_ids = $amenities->pluck('listing_id')->unique();
    }

    // Fetch distinct listings based on the filtered listing IDs
    $approve_listing = AddListing::whereIn('id', $approved_listing_ids)->get();
    // echo json_encode($approve_listing );
    // exit();
    // Attach amenities to listings
    foreach ($approve_listing as $listing) {
        $listing->amenities = $amenities->where('listing_id', $listing->id)->pluck('amenity');
    }


	   $all_reviews = Review:: join('users','users.id','=','review.user_id')
    ->select('review.user_id','review.review','users.*')
    ->get();


    return view('website.index',compact('slider','city','category','approve_listing','all_reviews'));
   }

   public function listing_page(Request $request)
   {
       $listing_page = AddListing :: where('add_listing.id',$request->id) 
       ->leftjoin('vendor_information','vendor_information.add_listing_id','=','add_listing.id')
    //    ->leftjoin('listing_amenities','listing_amenities.listing_id','=','add_listing.id')
        ->select('add_listing.*','vendor_information.add_listing_id','vendor_information.vendor_name','vendor_information.vendor_description','vendor_information.vendor_price','vendor_information.vendor_image','vendor_information.vendor_offer','vendor_information.vendor_discount')
       ->first();
    //     echo json_encode($listing_page);
    //    exit();

    $listing_anemity = ListingAmenity :: where('listing_id',$request->id)
    ->join('category','category.id','=','listing_amenities.amenity')
    ->select('listing_amenities.*','category.category','category.id')
    ->groupby('listing_amenities.amenity')
    ->get();
    // $listing_anemity = Category::get();

    $booking = Booking :: where('listing_id',$request->id)->get();
    $review = Review::where('listing_id',$request->id)->get();

    $edit_review = Review::where('id',$request->id)
    ->first();

    $reviewCounts = Review::where('listing_id', $request->id)
    ->select('rating', DB::raw('count(*) as count'))
    ->groupBy('rating')
    ->pluck('count', 'rating')
    ->toArray();

// Ensure all ratings from 1 to 5 are included with 0 count if not present
for ($rating = 1; $rating <= 5; $rating++) {
    if (!isset($reviewCounts[$rating])) {
        $reviewCounts[$rating] = 0;
    }
}

$totalReviews = array_sum($reviewCounts);

$totalReviews = array_sum($reviewCounts);
       return view('website.listing_page',compact('listing_page','booking','review','listing_anemity','reviewCounts',
     'totalReviews','edit_review'));

   }

   public function add_booking()
   {
    $category = Category::get();
    $get_listing_id = AddListing::where('user_id',Auth::user()->id)->get();
    return view('vendor.add_booking',compact('category','get_listing_id'));
   }

   public function select_category(Request $request)
   {
    $listing_amenity = ListingAmenity :: where('listing_id',$request->listing_id)
    ->join('category','category.id','=','listing_amenities.amenity')
    ->select('category.category','category.id')
    ->groupby('listing_amenities.amenity')
    ->get();
    return response()->json(['listing_amenity' => $listing_amenity]);
   }

   
   public function booking(Request $request)
{
    if (Auth::check()) {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'name1' => 'required|string',
            'contact_no1' => 'required|digits:10',
            'time_slot' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors()
            ], 422);
        }

        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->listing_id = $request->listing_id;
        $booking->date = date('Y-m-d', strtotime(str_replace('/', '-', $request->date)));
        $booking->name = $request->name1;
        $booking->contact_no = $request->contact_no1;
        $booking->time_slot = $request->time_slot;
		$booking->venue_name_id = $request->venue_name;
        $booking->price = $request->price1;
        $booking->amenities_for_booking = $request->amenities_for_booking;
        $booking->guest = $request->guest;
		//echo json_encode($booking);
		//exit();
        $booking->save();
        
        $vendor_email = AddListing::where('id', $request->listing_id)->pluck('email')->first();
        $venue_name = ListingAmenity::where('id', $request->venue_name)->pluck('venue_name')->first();
        // echo json_encode($vendor_email);
        // exit();
        
        // Send email logic
        $data = $request->all();
        Mail::send('website.booking_email', ['data' => $data, 'venue_name' => $venue_name], function ($message) use ($vendor_email) { 
            $message->to($vendor_email)
                    ->subject('Enquiry');
            $message->from(Auth::user()->email); // Use vendor's email here
        });
        
        
        return response()->json([
            'success' => true,
            'message' => 'Request Sent Successfully'
        ]);
    } else {
        return response()->json([
            'error' => true,
            'message' => 'Please sign in an account.'
        ], 401);
    }
}

public function direct_booking(Request $request)
{
    if (Auth::check()) {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'name1' => 'required|string',
            'contact_no1' => 'required|digits:10',
            'time_slot' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'error' => true,
        //         'messages' => $validator->errors()
        //     ], 422);
        // }
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with([
                    'error' => true,
                    'messages' => $validator->errors()
                ]);
        }

        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->listing_id = $request->listing_id;
        $booking->date = $request->date;
        $booking->name = $request->name1;
        $booking->contact_no = $request->contact_no1;
        $booking->time_slot = $request->time_slot;
		$booking->venue_name_id = $request->venue_name;
        $booking->price = $request->price1;
        $booking->amenities_for_booking = $request->amenities_for_booking;
        $booking->guest = $request->guest;
        $booking->status = '1';
		//echo json_encode($booking);
		//exit();
        $booking->save();
        
        
        return redirect()->route('approve_booking')->with(['success' => 'Booking Added Successfully']);
    } 
}

     public function check_booking(Request $request)
        {
            // dd($request->all());
            $booking_data = Booking::
            where('venue_name_id',$request->id)
            ->where('status','1')
            // ->where('amenities_for_booking', $request->listing_amenity_id)
            ->pluck('date')
            ->toArray();
// $is_booked=false;
// if(in_array($request->date, $booking_data)){
// $is_booked=true;

// }
            // $time_slot = TimeSlot::
            // where('i',$request->id)
            // ->where('category_id', $request->listing_amenity_id)
            // ->select('from_time_slot','to_time_slot')
            // ->get();

            $listing_amenity = ListingAmenity::
            where('id',$request->id)
            // ->where('amenity', $request->listing_amenity_id)
            ->select('listing_amenities.*')
            ->first();

            
            // $listing_amenity = ListingAmenity::
            // where('listing_id',$request->listing_id)
            // ->where('amenity', $request->id)
            // ->select('listing_amenities.*')
            // ->first();

            // echo json_encode($listing_amenity);

            return response()->json(['booking_data' => $booking_data , 'listing_amenity' => $listing_amenity]);
        }

        public function select_venue_name(Request $request)
        {
 
            $time_slot = TimeSlot::
            where('listing_id',$request->id)
            ->where('category_id', $request->listing_amenity_id)
            ->select('from_time_slot','to_time_slot')
            ->get();

            $listing_amenity = ListingAmenity::
            where('listing_id',$request->id)
            ->where('amenity', $request->listing_amenity_id)
            ->select('listing_amenities.id','venue_name')
            ->get();

            // echo json_encode($listing_amenity);

            return response()->json(['listing_amenity' => $listing_amenity,'time_slot' => $time_slot ]);
        }

     public function check_booking_testttt(Request $request)
        {
            $date = $request->input('date');
        
            // Query the database to check if the selected date is booked
            $isBooked = Booking::
            where('listing_id',$request->id)
            ->where('date', $date)->exists();

            return response()->json(['booked' => $isBooked]);
        }
      public function review(Request $request)
{
    if (Auth::check()) {

        // Validate the rating input
        $validator = Validator::make($request->all(), [
            'rating' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors()
            ], 422);
        }

        // Check if the user has already submitted a review for this listing
        $existingReview = Review::where('user_id', Auth::id())
                                ->where('listing_id', $request->listing_id)
                                ->first();

        if ($existingReview) {
            return response()->json(['error' => 'You have already submitted a review for this listing.']);
        }

        // Create and save the review if no previous review exists
        $review = new Review();
        $review->user_id = Auth::user()->id;
        $review->listing_id = $request->listing_id;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        return response()->json(['success' => 'Review submitted successfully!']);
    } else {
        return response()->json(['error' => 'Please sign in to an account.']);
    }
}

   
        public function search(Request $request)
        {
            $cityId = $request->input('city');
            $categoryId = $request->input('category');
    
            // Perform your search logic here using the selected cityId and categoryId
            $results = AddListing::where('location_city', $cityId)
                                ->where('category_id', $categoryId)
                                ->get();
    
            return view('website.index', ['results' => $results]);
        }

        public function updateReview(Request $request)
        {
            // dd($request->all());
                // $request->validate([
                //     'review_id' => 'required|exists:reviews,id',
                //     'review_text' => 'required|string',
                // ]);
        
                $review = Review::find($request->id);
                $review->review = $request->review;
                $review->rating = $request->rating;
                $review->save();
        
                return back()->with(['success' => 'Review updated successfully.']);
        }
    

        public function deleteReview(Request $request)
        {
        
                $review = Review::find($request->id);
                $review->delete();         
                return back()->with(['success' => 'Review deleted successfully.']);
        }
    

        public function vendors(Request $request)
        {
            return view('website.vendors');
        }

        public function vendor_search_result(Request $request)
        {
            // dd($request->all());
            $vendor_data = vendor_registration::where('status', 'Approved')
            ->select('state', 'city')
            ->get()
            ->groupBy('state');

             $vendor_search_result = vendor_registration::
             where('status','Approved');
             if($request->category)
             {
                $vendor_search_result = $vendor_search_result->where('category', $request->category);
             }
             if($request->state)
             {
                $vendor_search_result = $vendor_search_result->where('state', $request->state);
             }
             if($request->city)
             {
                $vendor_search_result = $vendor_search_result->where('city', $request->city);
             }
             
             $vendor_search_result = $vendor_search_result->get();

             //echo json_encode($vendor_search_result);
            //  exit();
            $category = $request->category;
            return view('website.vendor_details',compact('vendor_search_result','vendor_data','category'));
        }

        public function vendor_details(Request $request)
        {
            // dd($request->all());
            $vendor_data = vendor_registration::where('status','Approved')->select('city','state')->groupby('city','state')->get();

             $vendor_search_result = vendor_registration::
             where('status','Approved')
             ->where('category', $request->category)
             ->where('state', $request->state)
             ->where('city', $request->city)
             ->get();
             //echo json_encode($vendor_search_result);
            //  exit();
            return view('website.vendor_details',compact('vendor_search_result','vendor_data'));
        }

public function send_mail(Request $request)
{
    // Validate the form inputs and CAPTCHA
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => [
            'required',
            'email',
            'regex:/^[\w\.-]+@(gmail\.com|yahoo\.com)$/i'
        ],
        'number' => 'required|digits:10',
        'comments' => 'required',
        'captcha' => 'required',
    ], [
        'email.regex' => 'The email must be a valid email address with gmail.com, yahoo.com.',
    ]);
    

    // Return validation errors as JSON if validation fails
     if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors()
            ], 422);
        }
    // Validate CAPTCHA
    if ($request->input('captcha') !== Session::get('captcha')) {
		 return response()->json([
            'error' => true,
            'message' => 'Invalid CAPTCHA. Please try again.'
        ], 401);
    }

    // Send email logic
    $data = $request->all();
    Mail::send('website.email', ['data' => $data], function ($message) {
        $message->to('shibakhan1970@gmail.com')
                ->subject('Enquiry');
        $message->from('shibakhan1970@gmail.com', 'Zhep Wedding');
    });

    // Return success message as JSON
   return response()->json([
            'success' => true,
            'message' => 'Enquiry Sent Successfully'
        ]);
}



        public function generateCaptcha()
        {
            // Set the content-type to image
            header('Content-Type: image/png');
    
            // Generate a random string for the CAPTCHA
            $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 6);
            
            // Store the CAPTCHA code in the session for validation later
            Session::put('captcha', $code);
    
            // Create a blank image
            $image = imagecreatetruecolor(150, 50);
    
            // Set the background and text color
            $bgColor = imagecolorallocate($image, 255, 255, 255); // white background
            $textColor = imagecolorallocate($image, 0, 0, 0); // black text
    
            // Fill the background
            imagefilledrectangle($image, 0, 0, 150, 50, $bgColor);
    
            // Add the text to the image
            imagestring($image, 5, 40, 15, $code, $textColor);
    
            // Output the image
            imagepng($image);
    
            // Free up memory
            imagedestroy($image);
        }

  public function history()
        {
            if(auth()->check())
            {
                $history = Booking :: where('user_id',auth()->user()->id)->get();
            }
            else{
                return back()->with(['error' => 'Please login first']); 
            }

            return view('website.history',compact('history'));
        }
}
