<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{

        public function index()
    {
        $customers= Customer::all(['id','user_id', 'total_spent', 'loyaly_points']);
        return view("admin.pages.customer.index", compact("customers"));
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->back();
    }

}
