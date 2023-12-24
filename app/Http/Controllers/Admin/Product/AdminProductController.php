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
        $inputs = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_location' => 'required',
        ]);

        if ($request->hasFile('image_location')) {
            if (!empty($product->image_location)) {
                file("$product->image_location")->delete();
            }
            $file = $request->file('image_location');
            $filename = time() . '_' . $file->getClientOriginalName();
            // File upload location
            $location = 'uploads/product/';
            // Upload file
            $file->move($location, $filename);
            $inputs['image_location'] = "http://127.0.0.1:8000/uploads/product/" . $filename;

        } else {
            if (isset($inputs['currentImage']) && !empty($product->image_location)) {
                $image = $product->image_location;
                $image['currentImage'] = $inputs['currentImage'];
                $inputs['img_product'] = $image;
            }
        }
        $product = Product::create($inputs);
        return redirect()->route('admin.product.index');

    }


    public function edit(Product $product)
    {
        return view("admin.pages.product.update",compact("product"));
    }

    public function update(Request $request,Product $product)
    {
        $input=$request->all();

        $inputs = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',

        ]);


        if($request->hasFile('image_location')) {
            $file = $request->file('image_location');
            $filename = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'uploads/product/';

            // Upload file
            $file->move($location,$filename);
            $input['image_location']="http://127.0.0.1:8000/uploads/product/".$filename;
        }

        $product->update($input);
        return redirect()->route('admin.product.index');








    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
