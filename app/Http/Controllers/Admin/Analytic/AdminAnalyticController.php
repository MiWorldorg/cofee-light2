<?php

namespace App\Http\Controllers\Admin\Analytic;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Illuminate\Http\Request;

class AdminAnalyticController extends Controller
{


    public function index()
    {
        $response = $this->getSalesData(); // Fetch data from getSalesData method

        $data = json_decode($response->getContent(), true); // Convert JSON response to array

        $amounts = $data['amounts'];
        $saleDates = $data['saleDates'];

        return view("admin.pages.analytic.index", [
            'amounts' => $amounts,
            'saleDates' => $saleDates,
        ]);


    }

    public function getSalesData()
    {
        $sales = Sales::select('amount', 'sale_date')->get(); // Fetch both amount and sale_date

        $amounts = $sales->pluck('amount')->toArray(); // Extract amounts
        $saleDates = $sales->pluck('sale_date')->toArray(); // Extract sale_dates

        return response()->json([
            'amounts' => $amounts,
            'saleDates' => $saleDates,
        ]);
    }
}
