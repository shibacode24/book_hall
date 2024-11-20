<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\admin\Aminities;
use App\Models\admin\Category;
use App\Models\admin\City;
use App\Models\vendor\AddListing;
use App\Models\vendor\ListingAmenity;
use App\Models\vendor\VendorInformation;
use App\Models\vendor\TimeSlot;
use App\Models\website\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AddListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function index()
   {

   $aminities = Aminities :: get();
   $city = City :: where('status','0')->get();
   $category = Category :: get();

   return view('vendor.add_listing',compact('aminities','city','category'));

   }

   public function store(Request $request)
   {
// dd($request->all());
      $validatedData = $request->validate([
         'name' => 'required|string',
         'contact_no' => 'required|size:10',
         'address' => 'required|string',
        //  'email' => 'required|email',
        //  'website_link' => 'required',
        //  'facebook_link' => 'required',
        // 'instagram_link' => 'required',
        // 'linkedin_link' => 'required',
        // 'youtube_link' => 'required',
        // 'amenities_for_booking' => 'required',
         'description' => 'required',
        //  'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //  'front_page_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //  'amenities' => 'required',
         'contact_person_name' => 'required',
         'contact_person_number' => 'required|size:10',
        //  'vendor_name' => 'required',
        //  'vendor_description' => 'required',
        //  'vendor_price' => 'required',
        //  'vendor_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //  'location_city' => 'required',
         'location_address' => 'required',
     ]);
// dd($request->all());
       $add_listing = new AddListing();
       
       $add_listing->user_id = Auth::user()->id;
       $add_listing->name = $request->input('name');
       $add_listing->other_city = $request->input('other_city');
       $add_listing->contact_no = $request->input('contact_no');
       $add_listing->address = $request->input('address');
       $add_listing->email = $request->input('email');
       $add_listing->website_link = $request->input('website_link');
       $add_listing->facebook_link = $request->input('facebook_link');
       $add_listing->instagram_link = $request->input('instagram_link');
       $add_listing->linkedin_link = $request->input('linkedin_link');
       $add_listing->youtube_link = $request->input('youtube_link');
       $add_listing->twitter_link = $request->input('twitter_link');
       $add_listing->threads_link = $request->input('threads_link');
       $add_listing->google_map_link = $request->input('google_map_link');
    //    $add_listing->amenities_for_booking = $request->amenities_for_booking;
    //    $add_listing->capacity = $request->capacity;
       $add_listing->from_time_slot = $request->from_time_slot;
       $add_listing->to_time_slot = $request->to_time_slot;
       $add_listing->description = $request->input('description');
    //    $add_listing->price = $request->price;
       $add_listing->show_price = $request->input('show_price');
       

      if ($request->hasFile('banner_image')) {
         $bannerImages = [];
         foreach ($request->file('banner_image') as $bannerImage) {
             $bannerImageName = rand(001,999).time() . '_' . $bannerImage->getClientOriginalName();
             $bannerImage->move(public_path('panel/images/banner_images'), $bannerImageName);
             $bannerImages[] = $bannerImageName;
         }
        
         $add_listing->banner_image = $bannerImages;
     }

       // Store Front Page Image
       if ($request->hasFile('front_page_image')) {
           $frontPageImage = $request->file('front_page_image');
           $frontPageImageName = time().'.'.$frontPageImage->getClientOriginalExtension();
           $frontPageImage->move(public_path('panel/images/front_page_image'), $frontPageImageName);
           $add_listing->front_page_image = $frontPageImageName;
       }

       $add_listing->amenities = $request->amenities;
      $add_listing->category_id = $request->category_id;
       $add_listing->contact_person_name = $request->input('contact_person_name');
       $add_listing->contact_person_number = $request->input('contact_person_number');
       $add_listing->location_city = $request->input('location_city');
       $add_listing->location_address = $request->input('location_address');

       $add_listing->save();  
       $insert_id=  $add_listing->id;

      foreach ($request->amenities_for_booking as $index => $amenity) {
        $listing_amenities = new ListingAmenity();
        $listing_amenities->listing_id = $insert_id;
        $listing_amenities->amenity = $amenity;
        $listing_amenities->capacity = $request->capacity[$index]; 
        $listing_amenities->venue_name = $request->venue_name[$index]; 
        $listing_amenities->price = $request->price[$index]; 
        $listing_amenities->save();
    }    

    foreach ($request->category_id as $index => $category) {
        $time_slot = new TimeSlot();
        $time_slot->listing_id = $insert_id;
        $time_slot->category_id = $category;
        $time_slot->from_time_slot = $request->from_time_slot[$index]; 
        $time_slot->to_time_slot = $request->to_time_slot[$index]; 
        $time_slot->save();
    }   


       $vendor =new VendorInformation();
       $vendor->add_listing_id = $insert_id;
       $vendor->vendor_name = $request->input('vendor_name');
       $vendor->vendor_description = $request->input('vendor_description');
       $vendor->vendor_description = $request->input('vendor_description');
       $vendor->vendor_offer = $request->input('vendor_offer');
       $vendor->vendor_discount = $request->input('vendor_discount');
       $vendor->vendor_price = $request->input('vendor_price');
       
       // Store Vendor Image
    //    if ($request->hasFile('vendor_image')) {
    //     $vendorImage = $request->file('vendor_image');
    //     $vendorImageName = time().'.'.$vendorImage->getClientOriginalExtension();
    //     $vendorImage->move(public_path('panel/images/vendor_image'), $vendorImageName);
    //     $vendor->vendor_image = $vendorImageName;
    // }

   $image_name_array = [];

if (isset($request->vendor_image) && !empty($request->vendor_image)) {
    foreach ($request->vendor_image as $key => $vendor_image) {
        // If vendor_image is "undefined", add null to the array
        if ($vendor_image === "undefined") {
            $image_name_array[] = null;
        } else {
            // Process the valid images
            $extension = explode('/', mime_content_type($vendor_image))[1];
            $data = base64_decode(substr($vendor_image, strpos($vendor_image, ',') + 1));
            $imgname = 'v' . rand(000, 999) . $key . time() . '.' . $extension;

            // Save the image to the server
            file_put_contents(public_path('panel/images/vendor_image') . '/' . $imgname, $data);

            // Add the image filename to the array
            $image_name_array[] = $imgname;
        }
    }

    // Assign the image array to the vendor's image property
    $vendor->vendor_image = $image_name_array;
}


// dump($vendor->vendor_image);
// exit();
    $vendor->save();  
       return redirect()->route('add_listing')->with(['success'=>'Data Inserted Successfully']);
   }

	 public function approve_booking(Request $request)
	   {
        $approve_booking = Booking::join('add_listing', 'add_listing.id', '=', 'booking.listing_id')
        ->where('add_listing.user_id', Auth::user()->id)
        ->where('booking.status', '1')
        ->leftJoin('listing_amenities', 'listing_amenities.id', '=', 'booking.venue_name_id')
        ->select(
            'booking.*',
            'add_listing.user_id',
            'listing_amenities.amenity',
            'listing_amenities.venue_name',
            'listing_amenities.capacity',
            'add_listing.id as listing_id',
            'booking.id as booking_id'
        );
    
    if (isset($request->from_date) && isset($request->to_date)) {
        $approve_booking = $approve_booking->whereDate('booking.created_at', '>=', $request->from_date)
                                           ->whereDate('booking.created_at', '<=', $request->to_date);
    }
    
    $approve_booking = $approve_booking->orderBy('booking.date', 'desc')->get();
    
// echo json_encode($approve_booking);
// exit();

		return view('vendor.approve_booking',compact('approve_booking'));
	   }

		 public function rejected_booking(Request $request)
	   {
		$rejected_booking = Booking::join('add_listing','add_listing.id','=','booking.listing_id')
		->where('add_listing.user_id',Auth::user()->id)
		->where('booking.status','2')
		->leftjoin('listing_amenities','listing_amenities.id','=','booking.venue_name_id')
		->select('booking.*','add_listing.user_id','listing_amenities.venue_name','listing_amenities.amenity','listing_amenities.capacity','listing_amenities.price','add_listing.id','booking.id as booking_id');
        if (isset($request->from_date) && isset($request->to_date)) {
            $rejected_booking = $rejected_booking->whereDate('booking.created_at', '>=', $request->from_date)
                                               ->whereDate('booking.created_at', '<=', $request->to_date);
        }
        
        $rejected_booking = $rejected_booking->orderby('booking.date','desc')
		->get();
		return view('vendor.rejected_booking',compact('rejected_booking'));
	   }
		 public function updatePrice(Request $request)
	   {
		   $booking = Booking::find($request->booking_id);
		   $booking->price = $request->price;
		//    $booking->advance = $request->advance;
		   $booking->save();

		   return response()->json(['id' => $booking->id, 'new_price' => $booking->price]);
	   }

     public function update_advance(Request $request)
   { 
    // echo json_encode($request->all());
    // exit();
       $booking = Booking::find($request->booking_id);
       $booking->advance = $request->advance;
       $booking->save();

       return response()->json(['id' => $booking->id, 'advance' => $booking->advance,'price' => $booking->price]);
   }
	
   public function view_enquiry(Request $request)
   {
    $view_enquiry = Booking::join('add_listing','add_listing.id','=','booking.listing_id')
    ->where('add_listing.user_id',Auth::user()->id)
    ->where('booking.status','0')
    ->leftjoin('listing_amenities','listing_amenities.id','=','booking.venue_name_id')
    ->select('booking.*','add_listing.user_id','listing_amenities.amenity','listing_amenities.venue_name','listing_amenities.price','listing_amenities.capacity');
    if (isset($request->from_date) && isset($request->to_date)) {
        $view_enquiry = $view_enquiry->whereDate('booking.created_at', '>=', $request->from_date)
                                           ->whereDate('booking.created_at', '<=', $request->to_date);
    }
    $view_enquiry = $view_enquiry->orderby('booking.created_at','desc')
    ->get();
    // echo json_encode($view_enquiry);
    // exit();
    return view('vendor.view_enquiry',compact('view_enquiry'));
   }

   public function add_remark(Request $request)
   {
     $user = Booking::where('id',$request->user_id)->first();
     $user->remark=$request->remark;
     // dump($user);
     // exit();
     $user->save();
     return redirect()->back();

   }

   public function approve_enquiry(Request $request)
    {
        $approve = Booking :: where('id',$request->id)->first();

        $approve->status = '1';
        $approve->save();
        return back();
    }

    public function reject_enquiry(Request $request)
    {
        $reject = Booking :: where('id',$request->id)->first();

        $reject->status = '2';
        $reject->save();
        return back();
    }

   public function dashboard()
   {
    return view('vendor.dashboard');
   }

   public function fetchBookingDataForVendor() {

    $get_listing_id = AddListing::where('user_id',Auth::user()->id)->select('id')->first();
    $ConfirmedBookingCount = Booking::where('listing_id',$get_listing_id->id)->where('status', '1')->count();
    $RejectedCount = Booking::where('listing_id',$get_listing_id->id)->where('status', '2')->count();
    $TotalEnquiresCount = Booking ::where('listing_id',$get_listing_id->id)-> where('status', '0')->count();
    return response()->json([
        'TotalEnquires' => $TotalEnquiresCount,
        'ConfirmedBooking' => $ConfirmedBookingCount,
        'Rejected' => $RejectedCount
    ]);
}

   public function your_listing()
   {
    $your_listing = AddListing::where('user_id',Auth::user()->id)
    ->get();
    return view('vendor.your_listing',compact('your_listing'));
   }


   public function edit_listing($id)
   {
   $aminities = Aminities :: get();
   $city = City :: get();
	  // $city = City :: where('status','0')->get();
   $category = Category :: get();

   $edit_listing = AddListing::where('id',$id)->first();
   $edit_vendor = VendorInformation::where('add_listing_id',$id)->first();

   $edit_amenity_listing = ListingAmenity::join('category','category.id','=','listing_amenities.amenity')
   ->where('listing_id',$id)
   ->select('listing_amenities.*','category.id','category.category','listing_amenities.id as amenity_id')
   ->get();

   $edit_time_slot = TimeSlot::
   join('category','category.id','=','time_slot.category_id')
   ->where('listing_id',$id)
   ->select('time_slot.*','category.id','category.category','time_slot.id as time_id')
   ->get();
//    echo json_encode($edit_time_slot);
//   exit();

    return view('vendor.edit_listing',compact('aminities','city','category','edit_listing','edit_vendor','edit_amenity_listing','edit_time_slot'));
   }

   public function delete_amenity_list(Request $request)
   {
    $delete_amenity_list = ListingAmenity:: where('id',$request->id)->delete();
    return back();
   }

   public function update_venue_type(Request $request)
   {
    // dd($request->all());
    ListingAmenity:: where('id',$request->id)->update(
        [
            'listing_id' => $request->listing_id,
            'venue_name' => $request->venue_name,
            'amenity' => $request->amenity,
            'capacity' => $request->capacity,
            'price' => $request->price,
        ]
    );
    return back();
   }

   public function update_time_slot(Request $request)
   {
    // dd($request->all());
    TimeSlot:: where('id',$request->id)->update(
        [
            'listing_id' => $request->listing_id,
            'category_id' => $request->category_id,
            'from_time_slot' => $request->from_time_slot,
            'to_time_slot' => $request->to_time_slot,
        ]
    );
    return back();
   }

//    public function delete_banner_image(Request $request)
//    {
//     $delete_banner_image = AddListing:: where('id',$request->id)->delete();
//     return back();
//    }

public function deleteBannerImage(Request $request)
{
    // Retrieve the listing based on the provided ID
    $listing = AddListing::findOrFail($request->id);

    // Remove the image from the array
    $listing->banner_image = array_diff($listing->banner_image, [$request->image]);

    // Save the changes
    $listing->save();
    
    // Perform any additional logic (e.g., delete the image file if needed)

    return response()->json(['success' => true]);
}

   
//    public function delete_time_slot(Request $request)
//    {
//     $delete_time_slot = TimeSlot:: where('id',$request->id)->delete();
//     return back();
    
//    }

public function delete_time_slot($id)
    {
        $timeSlot = TimeSlot::find($id);
        if ($timeSlot) {
            $timeSlot->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Time slot not found'], 404);
    }

   public function delete_vendory_list(Request $request)
    {
         $previous_data = VendorInformation::where('id',$request->id)->first();
// echo json_encode($previous_data);
// exit();
            if (!$previous_data) {
                return response()->json(['status' => false, 'message' => 'Valuer not found']);
                    // return back()->with(['error', 'Vendor data not found']);
                }

                $vendor_name = $previous_data->vendor_name ?: [];
                $vendor_description = $previous_data->vendor_description ?: [];
                $vendor_price = $previous_data->vendor_price ?: [];
                $vendor_image = $previous_data->vendor_image ?: [];

                // Determine the keys to delete
                $keysToDelete = [$request->index]; // Replace with an array of keys you want to delete, e.g., ["2", "3"]
                // echo json_encode($keysToDelete);
                //  exit();
                // Check if the keys exist before attempting to delete elements
                foreach ($keysToDelete as $key) {
                    if (array_key_exists($key, $vendor_name) &&
                        array_key_exists($key, $vendor_description) &&
                        array_key_exists($key, $vendor_price) &&
                        array_key_exists($key, $vendor_image)) {

                        // Unset the elements based on the key
                        unset($vendor_name[$key]);
                        unset($vendor_description[$key]);
                        unset($vendor_price[$key]);
                        unset($vendor_image[$key]);
                    }
                }

                // Update the database record
                $previous_data->update([
                    'vendor_name' => array_values($vendor_name),
                    'vendor_description' => array_values($vendor_description),
                    'vendor_price' => array_values($vendor_price),
                    'vendor_image' => array_values($vendor_image),
                ]);
                // return response()->json(['success' => true]);
                return response()->json(['status' => true, 'message' => 'Vendor data deleted successfully']);
     
   }

   public function update_listing(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'contact_no' => 'required|size:10',
        'address' => 'required|string',
        // 'email' => 'required|email',
        // 'website_link' => 'required',
        // 'facebook_link' => 'required',
        // 'instagram_link' => 'required',
        // 'linkedin_link' => 'required',
        // 'youtube_link' => 'required',
        'amenities_for_booking' => 'required',
        'description' => 'required',
        // 'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // 'front_page_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'amenities' => 'required',
        'contact_person_name' => 'required',
        'contact_person_number' => 'required|size:10',
        // 'vendor_name' => 'required',
        // 'vendor_description' => 'required',
        // 'vendor_price' => 'required|numeric',
        // 'vendor_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // 'location_city' => 'required',
        'location_address' => 'required',
    ]);
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    // dd($request->all());
    // Find the existing listing to update
    $add_listing = AddListing::where('id',$request->id)->first();

$add_listing->name = $request->filled('name') ? $request->input('name') : $add_listing->name;
$add_listing->other_city = $request->filled('other_city') ? $request->input('other_city') : $add_listing->other_city;
$add_listing->contact_no = $request->filled('contact_no') ? $request->input('contact_no') : $add_listing->contact_no;
$add_listing->address = $request->filled('address') ? $request->input('address') : $add_listing->address;
$add_listing->email = $request->filled('email') ? $request->input('email') : $add_listing->email;
$add_listing->website_link = $request->filled('website_link') ? $request->input('website_link') : $add_listing->website_link;
$add_listing->facebook_link = $request->filled('facebook_link') ? $request->input('facebook_link') : $add_listing->facebook_link;
$add_listing->instagram_link = $request->filled('instagram_link') ? $request->input('instagram_link') : $add_listing->instagram_link;
$add_listing->linkedin_link = $request->filled('linkedin_link') ? $request->input('linkedin_link') : $add_listing->linkedin_link;
$add_listing->youtube_link = $request->filled('youtube_link') ? $request->input('youtube_link') : $add_listing->youtube_link;
$add_listing->twitter_link = $request->filled('twitter_link') ? $request->input('twitter_link') : $add_listing->twitter_link;
$add_listing->threads_link = $request->filled('threads_link') ? $request->input('threads_link') : $add_listing->threads_link;
$add_listing->google_map_link = $request->filled('google_map_link') ? $request->input('google_map_link') : $add_listing->google_map_link;
// $add_listing->amenities_for_booking = $request->filled('amenities_for_booking') ? $request->input('amenities_for_booking') : $add_listing->amenities_for_booking;
// $add_listing->capacity = $request->filled('capacity') ? $request->input('capacity') : $add_listing->capacity;
$add_listing->from_time_slot = $request->filled('from_time_slot') ? $request->input('from_time_slot') : $add_listing->from_time_slot;
$add_listing->to_time_slot = $request->filled('to_time_slot') ? $request->input('to_time_slot') : $add_listing->to_time_slot;
$add_listing->description = $request->filled('description') ? $request->input('description') : $add_listing->description;
// $add_listing->price = $request->filled('price') ? $request->input('price') : $add_listing->price;
$add_listing->show_price = $request->filled('show_price') ? $request->input('show_price') : $add_listing->show_price;
$add_listing->amenities = $request->filled('amenities') ? $request->input('amenities') : $add_listing->amenities;
$add_listing->category_id = $request->filled('category_id') ? $request->input('category_id') : $add_listing->category_id;
$add_listing->contact_person_name = $request->filled('contact_person_name') ? $request->input('contact_person_name') : $add_listing->contact_person_name;
$add_listing->contact_person_number = $request->filled('contact_person_number') ? $request->input('contact_person_number') : $add_listing->contact_person_number;
$add_listing->location_city = $request->filled('location_city') ? $request->input('location_city') : $add_listing->location_city;
$add_listing->location_address = $request->filled('location_address') ? $request->input('location_address') : $add_listing->location_address;


    // Update banner image if provided
    // if ($request->hasFile('banner_image')) {
    //     $bannerImages = [];
    //     foreach ($request->file('banner_image') as $bannerImage) {
    //         $bannerImageName = rand(001,999).time() . '_' . $bannerImage->getClientOriginalName();
    //         $bannerImage->move(public_path('panel/images/banner_images'), $bannerImageName);
    //         $bannerImages[] = $bannerImageName;
    //     }
    //     $add_listing->banner_image = $bannerImages;
    // }

    // Retrieve existing banner images
$previousImages = $add_listing->banner_image ?? [];

if ($request->hasFile('banner_image')) {
    $bannerImages = [];

    // Move and store new uploaded images
    foreach ($request->file('banner_image') as $bannerImage) {
        $bannerImageName = rand(001, 999) . time() . '_' . $bannerImage->getClientOriginalName();
        $bannerImage->move(public_path('panel/images/banner_images'), $bannerImageName);
        $bannerImages[] = $bannerImageName;
    }

    // Merge paths of previous and new images
    $mergedImages = array_merge($previousImages, $bannerImages);

    // Update the listing with merged image paths
    $add_listing->banner_image = $mergedImages;
} else {
    // If no new images uploaded, retain the previous images
    $add_listing->banner_image = $previousImages;
}


    // Update front page image if provided
    if ($request->hasFile('front_page_image')) {
        $frontPageImage = $request->file('front_page_image');
        $frontPageImageName = time().'.'.$frontPageImage->getClientOriginalExtension();
        $frontPageImage->move(public_path('panel/images/front_page_image'), $frontPageImageName);
        $add_listing->front_page_image = $frontPageImageName;
    }

    // Save the updated listing
    $add_listing->save();

    
    $listing_amenities = ListingAmenity::where('listing_id', $request->id)->get();

// Loop through each amenity from the request data
foreach ($request->amenities_for_booking as $index => $amenity) {
    // Check if there's an existing listing amenity for the current index
    if (isset($listing_amenities[$index])) {
        // Update existing listing amenity
        $listing_amenities[$index]->amenity = $amenity;
        $listing_amenities[$index]->capacity = $request->capacity[$index];
        $listing_amenities->venue_name = $request->venue_name[$index]; 
        $listing_amenities[$index]->price = $request->price[$index];
        $listing_amenities[$index]->save();
    } else {
        // Create a new listing amenity if it doesn't exist
        $newListingAmenity = new ListingAmenity();
        $newListingAmenity->listing_id = $request->id;
        $newListingAmenity->amenity = $amenity;
        $newListingAmenity->capacity = $request->capacity[$index];
        $newListingAmenity->venue_name = $request->venue_name[$index]; 
        $newListingAmenity->price = $request->price[$index];
        $newListingAmenity->save();
    }
}

$time_slot = TimeSlot::where('listing_id', $request->id)->get();

foreach ($request->category_id as $index => $category) {
    // Check if there's an existing listing amenity for the current index
    if (isset($time_slot[$index])) {
        // Update existing listing amenity
        $time_slot[$index]->category_id = $category;
        $time_slot[$index]->from_time_slot = $request->from_time_slot[$index];
        $time_slot[$index]->to_time_slot = $request->to_time_slot[$index];
        $time_slot[$index]->save();
    } else {
        // Create a new listing amenity if it doesn't exist
        $newtime_slot = new TimeSlot();
        $newtime_slot->listing_id = $request->id;
        $newtime_slot->category_id = $category;
        $newtime_slot->from_time_slot = $request->from_time_slot[$index];
        $newtime_slot->to_time_slot = $request->to_time_slot[$index];
        $newtime_slot->save();
    }
}

    // Update vendor information
    $vendor = VendorInformation::where('add_listing_id', $request->id)->first();

if ($vendor) {
    // Update vendor information based on the request input
    $vendor->vendor_name = $request->filled('vendor_name') ? $request->input('vendor_name') : $vendor->vendor_name;
    $vendor->vendor_description = $request->filled('vendor_description') ? $request->input('vendor_description') : $vendor->vendor_description;
    $vendor->vendor_offer = $request->filled('vendor_offer') ? $request->input('vendor_offer') : $vendor->vendor_offer;
    $vendor->vendor_discount = $request->filled('vendor_discount') ? $request->input('vendor_discount') : $vendor->vendor_discount;
    $vendor->vendor_price = $request->filled('vendor_price') ? $request->input('vendor_price') : $vendor->vendor_price;

    // Define an empty array to store image filenames
  $image_name_array = [];

    // Check if there are old images and add them to the array
    if ($request->old_image) {
        $image_name_array = $request->old_image;
    }
    
    // Check if vendor_image is set and is an array
    if ($request->vendor_image && is_array($request->vendor_image)) {
        foreach ($request->vendor_image as $key => $vendor_image) {
            // If the value is "undefined", store null in the array
            if ($vendor_image === "undefined" || $vendor_image === "null") {
                array_push($image_name_array, null);
                continue;
            }
    
            // Process valid images
            if (!empty($vendor_image)) {
                // Get the image extension
                $extension = explode('/', mime_content_type($vendor_image))[1];
    
                // Decode the base64-encoded image data
                $base_encode = base64_decode(substr($vendor_image, strpos($vendor_image, ',') + 1));
    
                // Generate a unique image name
                $imgname = 'v' . rand(000, 999) . $key . time() . '.' . $extension;
    
                // Save the image to the server
                file_put_contents(public_path('panel/images/vendor_image') . '/' . $imgname, $base_encode);
    
                // Add the image filename to the array
                array_push($image_name_array, $imgname);
            }
        }
    }
    
    // Assign the image array to the vendor's image property
    $vendor->vendor_image = $image_name_array;
    
    // Save the updated vendor information
    $vendor->save();
    
}

    return redirect()->back()->with(['success' => 'Data Updated Successfully']);
    // return redirect()->route('your_listing')->with(['success' => 'Data Updated Successfully']);
}

// public function fetchBookingData(Request $request)
//     {
//         // Retrieve user's ID
//         $userID = auth()->user()->id;

//         // Retrieve user's associated listings
//         $listings = AddListing::where('user_id', $userID)->pluck('id');

//         // Retrieve booking data for each listing
//         $booking = [];
//         foreach ($listings as $listing) {
//             $booking = array_merge($booking, Booking::where('listing_id', $listing)
//                 ->select('date', 'name', 'contact_no') // Select only required fields
//                 ->get()->toArray());
//         }
// // echo json_encode($bookings);
// // exit();
//         // Return the booking data as JSON
//         return response()->json($booking);
//     }

public function fetchBookingData(Request $request)
{
    // Retrieve user's ID
    $userID = auth()->user()->id;

    // Retrieve user's associated listings
    $listings = AddListing::where('user_id', $userID)->pluck('id');

    // Retrieve booking data for each listing
    $events = [];
    foreach ($listings as $listing) {
        $bookings = Booking::where('listing_id', $listing)
        ->where('status','1')
            ->select('date', 'name', 'contact_no') // Select only required fields
            ->get();

        foreach ($bookings as $booking) {
            // Format the date as needed by the full calendar
            // $startDate = $booking->date . 'T00:00:00'; // Assuming date format is YYYY-MM-DD
            $events[] = [
                'name' => $booking->name, // Use name as the title
                'date' => $booking->date,
                // 'end' => $startDate, // Assuming the event is only for one day
                'contact_no' => $booking->contact_no, // Add contact number to the event data
                // You can add more properties as needed
            ];
        }
    }
    return response()->json($events);

    // Pass the $events variable to the blade view
    // return view('vendor.dashboard')->with('events', $events);
}

public function log_out_vendor()
{
   Auth::logout();
  
  return redirect()->route('website_index');
}

}
