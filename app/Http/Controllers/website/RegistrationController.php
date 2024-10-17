<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;



class RegistrationController extends Controller
{

	  public function check_login()
   {
    auth::attempt('token');
    return view('admin.dashboard');

    // $user = User :: where()

   }
	
public function storeRegistration(Request $request)
{
    // dd($request->all());
    // Define validation rules
    // $rules = [
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|email|unique:users,email',
    //     'contact_no' => 'required|string|max:20',
    //     'password' => 'required|string|min:8',
    // ];

    // // Define custom validation messages
    // $messages = [
    //     'name' => 'Name is required.',
    //     'email' => 'Email is required.',
    //     'contact_no' => 'Contact No is required.',
    //     'password' => 'Password is required.',
    //     // Add more custom messages as needed for other fields
    // ];



    // // Perform validation
    // $validator = Validator::make($request->all(), $rules, $messages);

    // // Check if validation fails
    // if ($validator->fails()) {
    //     // dd(1);
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'contact_no' => 'required|size:10',
        'password' => 'required|string',
        'email' => 'required|email',
      
    ]);
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    // Validation passed, proceed with storing registration data
    $registration = new User;
    $registration->user_type = $request->user_type;
    $registration->name = $request->name;
    $registration->email = $request->email;
	$registration->gender = $request->gender;
    $registration->contact_no = $request->contact_no;
    $registration->password = Hash::make($request->input('password'));

    // echo json_encode($registration);
    // exit();

    $registration->save();

    Auth::login($registration);
    // Redirect based on user type
    if ($request->user_type === 'user') {
        return redirect()->back()->with('success', 'Registration Successful.');
    } elseif ($request->user_type === 'business') {
        return redirect()->route('add_listing')->with('success', 'Registration Successful.');
    }
}


public function checkUnique(Request $request)
    {
        $email_exists = User::where('email', $request->email)->exists();
        $contact_no_exists = User::where('contact_no', $request->contact_no)->exists();

        return response()->json([
            'exists' => $email_exists || $contact_no_exists,
            'email_exists' => $email_exists,
            'contact_no_exists' => $contact_no_exists
        ]);
    }

public function login(Request $request)
{
    // Validation rules
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return response()->json(['status' => 'error', 'message' => 'Please enter username and password']);
    }

    // Attempt to authenticate the user
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->user_type === 'user') {
            return response()->json(['status' => 'success', 'redirect_url' => url()->previous()]);
        } elseif ($user->user_type === 'business') {
            return response()->json(['status' => 'success', 'redirect_url' => route('your_listing')]);
        } 
		//elseif ($user->user_type === 'admin') {
          //  return response()->json(['status' => 'success', 'redirect_url' => route('admin_dashboard')]);
       // }
    }

    // User not found or authentication failed
    return response()->json(['status' => 'error', 'message' => 'Incorrect username or password']);
}



public function send_mobile_verify_otp(Request $request)
{
    $contact = $request->input('contact_no');

    if($contact){
         // Mobile number exists, proceed to send OTP
     $otp = rand(1000, 9999);
    $name = 'Sir/Mam';
   $msg = 'Dear ' . $name . ', Your OTP is ' . $otp . '. Send
       by WEBMEDIA';
    $msg = urlencode($msg);
    // $to = $request->contact;

    $data1 = "uname=habitm1&pwd=habitm1&senderid=WMEDIA&to=" .
        $contact  . "&msg=" . $msg .
        "&route=T&peid=1701159196421355379&tempid=1707161527969328476";
    $ch = curl_init('http://bulksms.webmediaindia.com/sendsms?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    // $otp=1234;
return response()->json(['otp' => $otp]);
} 

}

public function verifyOTP(Request $request)
{
    $enteredOTP = $request->input('otp');

    $storedOTP = session()->get('otp'); // Replace 'otp' with your session key

    // Compare the entered OTP with the stored OTP
    if ($enteredOTP === $storedOTP) {
        // OTPs match, return success response
        return response()->json(['success' => true, 'message' => 'OTP verified successfully']);
    } else {
        // OTPs do not match, return error response
        return response()->json(['success' => false, 'message' => 'Invalid OTP']);
    }
}


// to check mobile number is exist in database or not
public function checkMobileExistence(Request $request)
{
    $contact = $request->input('contact');

    // Check if the mobile number exists in the database
    $user = User::where('contact_no', $contact)->first();

    if ($user) {
        // Mobile number exists, return user ID
        return response()->json(['exists' => true, 'userId' => $user->id]);
    } else {
        // Mobile number does not exist
        return response()->json(['exists' => false, 'error' => 'Mobile number not found']);
    }
}


public function send_otp_for_forgot_pass(Request $request)
{
    $contact = $request->input('contact');

    // Check if the mobile number exists in the database
    $user = User::where('contact_no', $contact)->first();


    if($user){
         // Mobile number exists, proceed to send OTP
     $otp = rand(1000, 9999);
    $name = 'Sir/Mam';
   $msg = 'Dear ' . $name . ', Your OTP is ' . $otp . '. Send
       by WEBMEDIA';
    $msg = urlencode($msg);
    // $to = $request->contact;

    $data1 = "uname=habitm1&pwd=habitm1&senderid=WMEDIA&to=" .
        $contact  . "&msg=" . $msg .
        "&route=T&peid=1701159196421355379&tempid=1707161527969328476";
    $ch = curl_init('http://bulksms.webmediaindia.com/sendsms?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    // return response()->json($otp);

 // Store the OTP in the session for later verification
//  session(['otp' => $otp]);

//  return response()->json(['otp' => $otp]);
session(['otp' => $otp, 'userId' => $user->id]);

 // Return the response with OTP and userId
return response()->json(['otp' => $otp, 'userId' => $user->id]);
} else {
    // Mobile number does not exist
    return response()->json(['error' => 'Mobile number not found']);
}

}

public function verify_otp_for_forgot_pass(Request $request)
{
    $enteredOtp = $request->input('enteredOtp');
    $otp = session('otp'); // Retrieve the stored OTP from the session

    $isValid = ($enteredOtp == $otp);

    return response()->json(['valid' => $isValid]);
}

public function update_password(Request $request)
{
    // Retrieve the user ID from the session
    $userId = session('userId');

    // Find the user by ID or any identifier
    $user = User::find($userId);

    if ($user) {
        // Update the user's password

        if($request->input('newPassword')===$request->input('confirmPassword')){
        $user->password = bcrypt($request->input('newPassword'));
        $user->save();

        // return response()->json(['success' => true]);
        return redirect()->back()->with('success', 'Password Updated Successfully...');

    } else {
            return redirect()->back()->with('error', 'Passwords do not match');
    }
}
else {
        return response()->json(['error' => 'User not found']);
    }
}

public function user_profile()
   {
    $data = User::where('id',auth()->user()->id)->first();
    return view('website.user_profile',compact('data'));
   }

   public function edit_user_profile(Request $request)
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

    return redirect()->route('website_index');
   }

	public function checkMobileExist(Request $request)  // for ajax dispay
{
    // dd( $request->input('mobile'));
    $mobile = $request->input('mobile');
    $exists = User::where('contact_no', $mobile)->exists();
    
    return response()->json(['exists' => $exists]);
}
	
	   public function delete_profile(Request $request)
   {
      $user_data = User::where('id',$request->id)->first();
      $user_data->photo = NULL;
      $user_data->save();
      return back();

	   }
public function logout()
{
    Auth::logout();

     return redirect('/');

       // return redirect()->back();
}

}
