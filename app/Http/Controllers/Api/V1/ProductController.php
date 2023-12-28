<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            'result'=>true,
            'message'=>'product  page',
            'data'=>[
                Product::all("id","name","description","price","image_location")
            ]
        ],200);
    }
}
