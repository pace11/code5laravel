<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{   

    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view("auth/login");
    }

    public function login(Request $request){

        // validate
        $this->validate($request, [
            'email' => 'required|email', 
            'password' => 'required|min:6'
        ]);

        // attemp for login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //if successfull
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
