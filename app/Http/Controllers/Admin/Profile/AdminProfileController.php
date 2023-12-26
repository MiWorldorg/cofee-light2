<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        $profile = User::all(['id', 'order_id', 'amount', 'sale_date']);
        return view("admin.page.index", compact("profile"));
    }

}
