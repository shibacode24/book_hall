<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\website\vendor_registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;

class VendorRegistrationController extends Controller
{

    public function vendor_registration()
    {
        return view('website.vendor_registration');
    }

    public function store_vendor_registration(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'state' => 'required',
        //     'category' => 'required',
        //     'email' => 'required|email',
        //     'contact_no' => 'required',
        //     'password' => 'required',
        // ]);

        $vendor_registration = new vendor_registration();
        $vendor_registration->name = $request->name;
        $vendor_registration->state = $request->state;
        $vendor_registration->city = $request->city;
        $vendor_registration->category = $request->category;
        $vendor_registration->email = $request->email;
        $vendor_registration->phone_number = $request->contact_no;
        $vendor_registration->address = $request->address;
        $vendor_registration->password = Hash::make($request->password);
        $vendor_registration->save();

        // return response()->json(['success' => true, 'message' => 'Data saved successfully!']);
        return redirect()->back()->with('success', 'Registration Successful.');
    }

    public function edit_vendor_registration(Request $request)
    {
        $vendor_registration = vendor_registration::where('id', $request->id)->first();
        return view('admin.edit_vendor_registration',compact('vendor_registration'));
    }


    // Update vendor_registration information
    public function update_vendor_registration(Request $request)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact_no' => 'required|string|max:15',
        'password' => 'nullable|string|min:8|confirmed',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
    ]);

    // Find the vendor registration record
    $vendor_registration = vendor_registration::where('id', $request->id)->first();
    // Update vendor details
    $vendor_registration->name = $request->name;
    $vendor_registration->state = $request->state;
    $vendor_registration->city = $request->city;
    $vendor_registration->category = $request->category;
    $vendor_registration->email = $request->email;
    $vendor_registration->phone_number = $request->contact_no;
    $vendor_registration->alternate_phone_number = $request->alternate_phone_number;
    $vendor_registration->star_count = $request->star_count;
    $vendor_registration->review_count = $request->review_count;
    $vendor_registration->address = $request->address;
    // Update password if provided
    if ($request->password) {
        $vendor_registration->password = Hash::make($request->password);
    }

    if ($request->hasFile('image')) {
        // Check if there's an existing image and if it exists in the folder
        if ($vendor_registration->image && file_exists(public_path('images/vendor_registration_image/' . $vendor_registration->image))) {
            // Unlink (delete) the old image
            unlink(public_path('images/vendor_registration_image/' . $vendor_registration->image));
        }

        // Handle the new image upload
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $filePath = public_path('images/vendor_registration_image/' . $filename);

        // Move the uploaded file to the folder
        $file->move(public_path('images/vendor_registration_image'), $filename);

        // Compress the image
        $compressImage = App::make('compressImage');
        $compressImage($filePath, $file->getClientOriginalExtension());

        // Update the new image filename in the database
        $vendor_registration->image = $filename;
    }
    $vendor_registration->save();

    return redirect()->route('vendor_list')->with('success', 'Vendor registration information updated successfully.');
}


    // Delete vendor_registration information
    public function destroy($id)
    {
        $vendor_registration = vendor_registration::findOrFail($id);
        $vendor_registration->delete();

        return redirect()->back()->with('success', 'vendor_registration information deleted successfully.');
    }
}
