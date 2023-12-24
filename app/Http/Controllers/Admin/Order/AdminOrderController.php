<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::all(['id', 'status', 'user_id', 'total_price','created_at']);
        return view("admin.pages.order.index", compact("orders"));
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back();
    }


    public function changeStatus(Order $order)
    {

        if ($order['status'] == 0) {
            $order['status'] = 1;
            $order->save();
            return redirect()->back();

        } else {
            $order['status'] = 0;
            $order->save();
            return redirect()->back();

        }
    }
}
