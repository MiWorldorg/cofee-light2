<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Illuminate\Http\Request;

class AdminSalesController extends Controller
{


    public function index()
    {
        $sales= Sales::all(['id','order_id', 'amount', 'sale_date']);
        return view("admin.pages.sales.index", compact("sales"));
    }


    public function destroy(Sales $sales)
    {
        $sales->delete();
        return redirect()->back();
    }


}
