<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class ProfileController extends Controller
{
    public function profile()
   {
    $data = User::where('id',auth()->user()->id)->first();
    return view('vendor.profile',compact('data'));
   }

   public function edit_profile(Request $request)
   {
    $data = User::where('id',auth()->user()->id)->first();

    // dd($request->all());
    if ($request->hasFile('photo')) { 
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/photos'), $filename);
    $data->photo = $filename;

    }
    $data->name=$request->get('name');
    $data->contact_no=$request->get('contact_no');
    $data->email=$request->get('email');
    $data->gender=$request->get('gender');
    $data->password = $request->password ? Hash::make($request->password) : $data->password;


    // echo json_encode($data);
    // exit();

    $data->save();

    return redirect()->back();
   }
}
