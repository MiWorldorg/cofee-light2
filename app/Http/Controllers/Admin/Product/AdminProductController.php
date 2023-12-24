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


    public function create()
    {
        return view("admin.pages.product.create");
    }



    public function store(Request $request, Product $product)
    {
        $inputs = $request->all();
        dd($inputs);

    }




    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
