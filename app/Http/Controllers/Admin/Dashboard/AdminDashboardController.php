<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use App\Models\Admin\Product;
use App\Models\Sales;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $customer=Customer::all();
        $sales=Sales::all();
        $salesAmount=Sales::all("amount")->sum("amount");
        $customer=Customer::all();
        $product=Product::all();
        return view("admin.pages.dashboard.dashboard",compact("product","customer","sales","salesAmount"));
    }
}
