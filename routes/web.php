<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MasterController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\vendor\AddListingController;
use App\Http\Controllers\vendor\ProfileController;
use App\Http\Controllers\website\IndexController;
use App\Http\Controllers\website\RegistrationController;
use App\Http\Controllers\website\VendorRegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('demo','website.demo')->name('demo');
// Route::view('index','website.index')->name('website_index');
// Route::view('listing_page','website.listing_page')->name('listing_page');
Route::view('listing_list','website.listing_list')->name('listing_list');
Route::view('test','website.test')->name('test');
Route::view('cancellation','website.cancellation')->name('cancellation');
Route::view('terms','website.terms')->name('terms');
Route::view('about','website.about')->name('about');
Route::view('how-it-work','website.how-it-work')->name('how-it-work');
Route::view('contact','website.contact')->name('contact');
Route::view('vendor_category','website.vendor_category')->name('vendor_category');
Route::view('vendor_registration','website.vendor_registration')->name('vendor_registration');
Route::view('vendor_registration','website.vendor_registration')->name('vendor_registration');
 Route::view('business_listing_login','website.business_listing_login')->name('business_listing_login');
//  Route::view('view_listing','admin.view_listing')->name('view_listing');


 
Route::get('admin_login',[DashboardController::class,'login_page'])->name('login_page');
Route::post('login_submit',[DashboardController::class,'login_submit'])->name('login_submit');
Route::get('log_out',[DashboardController::class,'log_out'])->name('log_out');

// Route::view('booking','admin.booking')->name('booking');
Route::middleware(['CheckLogin'])->group(function () {
Route::get('/',[IndexController::class,'website_index'])->name('website_index');
});
Route::get('listing_page/{id}',[IndexController::class,'listing_page'])->name('listing_page');
Route::post('booking',[IndexController::class,'booking'])->name('booking');
Route::get('check_booking',[IndexController::class,'check_booking'])->name('check_booking');
Route::post('review',[IndexController::class,'review'])->name('review');
Route::get('search',[IndexController::class,'search'])->name('search');
Route::post('updateReview',[IndexController::class,'updateReview'])->name('updateReview');
Route::post('send_mail',[IndexController::class,'send_mail'])->name('send_mail');
Route::get('deleteReview/{id}',[IndexController::class,'deleteReview'])->name('deleteReview');
Route::get('history',[IndexController::class,'history'])->name('history');
Route::get('captcha', [IndexController::class,'generateCaptcha'])->name('captcha');
Route::get('select_venue_name',[IndexController::class,'select_venue_name'])->name('select_venue_name');
Route::get('vendors',[IndexController::class,'vendors'])->name('vendors');
Route::get('vendor_search_result',[IndexController::class,'vendor_search_result'])->name('vendor_search_result');
Route::get('vendor_details',[IndexController::class,'vendor_details'])->name('vendor_details');



// Route::get('direct_booking',[IndexController::class,'direct_booking'])->name('direct_booking');
//Route::group(['middleware'=>'CheckLogin'],function(){
    
Route::get('profile',[ProfileController::class,'profile'])->name('profile');
Route::post('edit_profile',[ProfileController::class,'edit_profile'])->name('edit_profile');

Route::get('vendor_registration',[VendorRegistrationController::class,'vendor_registration'])->name('vendor_registration');
Route::post('store_vendor_registration',[VendorRegistrationController::class,'store_vendor_registration'])->name('store_vendor_registration');
Route::get('edit_vendor_registration/{id}',[VendorRegistrationController::class,'edit_vendor_registration'])->name('edit_vendor_registration');
Route::post('update_vendor_registration',[VendorRegistrationController::class,'update_vendor_registration'])->name('update_vendor_registration');

Route::get('master',[MasterController::class,'index'])->name('index');
Route::post('city',[MasterController::class,'city_store'])->name('city');
Route::post('update_city',[MasterController::class,'update_city'])->name('update_city');
Route::get('city_destroy/{id}',[MasterController::class,'city_destroy'])->name('city_destroy');
Route::get('city_status',[MasterController::class,'city_status'])->name('city_status');

Route::post('category',[MasterController::class,'category_store'])->name('category');
Route::post('update_category',[MasterController::class,'update_category'])->name('update_category');
Route::get('category_destroy/{id}',[MasterController::class,'category_destroy'])->name('category_destroy');

Route::post('aminities',[MasterController::class,'aminities_store'])->name('aminities');
Route::post('update_aminities',[MasterController::class,'update_aminities'])->name('update_aminities');
Route::get('aminities_destroy/{id}',[MasterController::class,'aminities_destroy'])->name('aminities_destroy');

Route::post('slot_category',[MasterController::class,'slot_category_store'])->name('slot_category');
Route::post('update_slot_category',[MasterController::class,'update_slot_category'])->name('update_slot_category');
Route::get('slot_category_destroy/{id}',[MasterController::class,'slot_category_destroy'])->name('slot_category_destroy');

Route::post('slider',[MasterController::class,'slider_store'])->name('slider');
Route::post('update_slider',[MasterController::class,'update_slider'])->name('update_slider');
Route::get('slider_destroy/{id}',[MasterController::class,'slider_destroy'])->name('slider_destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('your_listing',[AddListingController::class,'your_listing'])->name('your_listing');

});
Route::get('add_listing',[AddListingController::class,'index'])->name('add_listing');
Route::post('add_listing_store',[AddListingController::class,'store'])->name('add_listing_store');
Route::get('approve_booking',[AddListingController::class,'approve_booking'])->name('approve_booking');
Route::get('cancelled_booking',[AddListingController::class,'cancelled_booking'])->name('cancelled_booking');
Route::get('view_enquiry',[AddListingController::class,'view_enquiry'])->name('view_enquiry');
Route::get('vendor_dashboard',[AddListingController::class,'dashboard'])->name('vendor_dashboard');
Route::get('approve_enquiry/{id}',[AddListingController::class,'approve_enquiry'])->name('approve_enquiry');
Route::get('reject_enquiry/{id}',[AddListingController::class,'reject_enquiry'])->name('reject_enquiry');
Route::post('add_remark',[AddListingController::class,'add_remark'])->name('add_remark');
Route::get('edit_listing/{id}',[AddListingController::class,'edit_listing'])->name('edit_listing');
Route::post('update_listing',[AddListingController::class,'update_listing'])->name('update_listing');
Route::get('delete_amenity_list/{id}',[AddListingController::class,'delete_amenity_list'])->name('delete_amenity_list');
Route::post('update_venue_type',[AddListingController::class,'update_venue_type'])->name('update_venue_type');
Route::post('update_time_slot',[AddListingController::class,'update_time_slot'])->name('update_time_slot');

// Route::get('delete_vendory_list/{id}/{index}',[AddListingController::class,'delete_vendory_list'])->name('delete_vendory_list');
Route::post('delete_vendory_list', [AddListingController::class, 'delete_vendory_list'])->name('delete.vendory_list');
// Route::get('/delete_banner_image/{id}/{image}', [AddListingController::class, 'deleteBannerImage'])->name('delete_banner_image');
Route::post('delete_banner_image', [AddListingController::class, 'deleteBannerImage'])->name('delete_banner_image');
Route::get('rejected_booking', [AddListingController::class, 'rejected_booking'])->name('rejected_booking');
Route::get('/fetch-booking-data', [AddListingController::class, 'fetchBookingData'])->name('fetchBookingData');
Route::get('log_out_vendor', [AddListingController::class, 'log_out_vendor'])->name('log_out_vendor');
Route::get('delete_time_slot/{id}', [AddListingController::class, 'delete_time_slot'])->name('delete_time_slot');
Route::post('update_price', [AddListingController::class, 'updatePrice'])->name('update_price');
Route::post('update_advance', [AddListingController::class, 'update_advance'])->name('update_advance');
Route::get('fetchBookingDataForVendor', [AddListingController::class, 'fetchBookingDataForVendor'])->name('fetchBookingDataForVendor');
Route::get('add_booking', [IndexController::class, 'add_booking'])->name('add_booking');
Route::post('direct_booking',[IndexController::class,'direct_booking'])->name('direct_booking');
Route::get('select_category',[IndexController::class,'select_category'])->name('select_category');


Route::get('all_listing',[ReportController::class,'all_listing'])->name('all_listing');
Route::get('approve_listing/{id}',[ReportController::class,'approve_listing'])->name('approve_listing');
Route::get('reject_listing/{id}',[ReportController::class,'reject_listing'])->name('reject_listing');
Route::get('all_approve_booking',[ReportController::class,'all_approve_booking'])->name('all_approve_booking');
Route::get('admin_dashboard',[ReportController::class,'dashboard'])->name('admin_dashboard');
Route::get('view_listing/{id}',[ReportController::class,'view_listing'])->name('view_listing');
Route::get('vendor_list',[ReportController::class,'vendor_list'])->name('vendor_list');
Route::get('approve_vendor/{id}',[ReportController::class,'approve_vendor'])->name('approve_vendor');
Route::get('reject_vendor/{id}',[ReportController::class,'reject_vendor'])->name('reject_vendor');
Route::get('verified_vendor/{id}',[ReportController::class,'verified_vendor'])->name('verified_vendor');
Route::get('getBookingData',[ReportController::class,'getBookingData'])->name('getBookingData');


//Register
Route::post('store-registration', [RegistrationController::class, 'storeRegistration'])->name('storeRegistration');
Route::post('check-unique', [RegistrationController::class, 'checkUnique'])->name('check.unique');

Route::post('/login', [RegistrationController::class, 'login'])->name('login');
//to send otp for forget password
Route::get('send_mobile_verify_otp', [RegistrationController::class, 'send_mobile_verify_otp'])->name('send_mobile_verify_otp');
Route::post('check_mobile_existence',  [RegistrationController::class, 'checkMobileExistence'])->name('check_mobile_existence');
//to varify otp
Route::post('verify_otp_for_forgot_pass', [RegistrationController::class, 'verify_otp_for_forgot_pass'])->name('verify_otp_for_forgot_pass');
//update password
Route::post('update-password', [RegistrationController::class, 'update_password'])->name('update_password');
// Route::post('/logout', [RegistrationController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], '/logout', [\App\Http\Controllers\website\RegistrationController::class, 'logout'])->name('logout');
Route::post('send_otp_for_forgot_pass', [RegistrationController::class, 'send_otp_for_forgot_pass'])->name('send_otp');

Route::get('user_profile',[RegistrationController::class,'user_profile'])->name('user_profile');
Route::post('edit_user_profile',[RegistrationController::class,'edit_user_profile'])->name('edit_user_profile');
Route::post('checkMobileExist',[RegistrationController::class,'checkMobileExist'])->name('check_mobile_exist');

Route::post('check_login',[RegistrationController::class,'check_login'])->name('check_login');
Route::get('delete_profile/{id}',[RegistrationController::class,'delete_profile'])->name('delete_profile');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect()->back();
    //return "All cache cleared!";
});

//});