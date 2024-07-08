<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class MyAccountController extends Controller
{
    public function my_account()
    {
        $data['getRecord'] = User::find(Auth::user()->id);
        return view('admin.my_account.update', $data);
    }

    public function my_account_update(Request $request)
    {
        $user = request()->validate([
            'email' => 'required|unique:users,email,'.Auth::user()->id
        ]);

        $user = User::find(Auth::user()->id);

        $user->name  = trim($request->name);
        $user->email = trim($request->email);

        if(!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        return redirect('admin/my_account')->with('success', 'My Account Successfully Updated');
    }
}
