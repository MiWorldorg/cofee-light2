<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all(['id', 'name', 'description', 'price', 'image_location']);
        return view("admin.pages.product.index", compact("products"));
    }
}
