<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function login_page()

    {
     return view('admin.login');
    }

    public function login_submit(Request $request)
    {
       if (auth()->attempt(array('email' => $request['username'], 'password' => $request['password'],'user_type' => 'admin'))) 
       {
          return redirect()->route('admin_dashboard');
      }

      else{
        return redirect()->back()->with('error','Invalid Login Credentials.');  
          }

    }
    public function log_out()
    {
       Auth::logout();
      
      return redirect()->route('login_page');
    }

}
