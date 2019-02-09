<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginPage()
    {
        return view('admin.admin_login');
        
    } 

    public function login(Request $request)
    {

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
    		return redirect('/admin_dashboard');
    	}
    	
    }

    // public function logout()
    // {
    //     Auth::guard('admin')->logout();
    //     return redirect('/admin');
    // }

     
}
