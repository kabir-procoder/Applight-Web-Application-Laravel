<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if(Auth::User()->is_role == '1') {
                return redirect()->intended('admin/dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', "Invalid Admin");
            }

        } else {
            return redirect()->back()->with('error', "Please enter currect email and password");
        }
    }

    public function forgot_password()
    {
        return view('auth.forgot');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }


}
