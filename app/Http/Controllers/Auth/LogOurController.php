<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogOurController extends Controller
{
    public function logOut()
    {

        Session::flush();

        Auth::logout();

        return redirect('auth/loginForm');
    }
}
