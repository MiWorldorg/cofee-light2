<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function ShowForm()
    {
        return view("auth.loginForm");
    }

    public function login(Request $request,User $user)
    {

        $inputs = $request->validate([
            'phone_number' => 'required',
            'password' => 'required',
        ]);
        /* find user */
        $user = User::where('phone_number', $request->phone_number)->first();

        if ($user && Auth::attempt(['phone_number' => $request->phone_number, 'password' => $request->password])) {


            return to_route("admin.dashboard");

        }else{

            return redirect()->back()->with("error to login ");
        }
    }
}
