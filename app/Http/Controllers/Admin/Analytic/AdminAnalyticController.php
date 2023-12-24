<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class AdminAnalyticController extends Controller
{
    public function index()
    {
        $sales = Sales::all(['sale_date', 'amount']);
        return view("admin.pages.analytic.index", compact("sales"));
    }
}
