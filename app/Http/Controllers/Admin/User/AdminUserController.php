<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("admin.pages.user.user_page", compact("users"));
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->back();
    }
}
