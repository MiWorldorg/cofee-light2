<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view("admin.pages.profile.index");
    }
    public function edit()
    {
        return view("admin.pages.profile.update");
    }


    public function update(Request $request,User $user)
    {
        $inputs=$request->all();



        if (Hash::check($inputs['tekpassword'] , auth()->user()->password)){

            $user =Auth::user();
            $user->name = $request['name'];
            $user->username = $request['username'];
            $user->password = Hash::make( $request['password']);
            $user->save();
            return to_route("admin.profile.index")->with('message','اطلاعات کاربر با موفقیت تغیر کرد');

        }else{
            return to_route("admin.profile.index")->with('message','مشکلی به وجود امد');
        }
    }

}
