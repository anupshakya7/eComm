<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', ["products" => $data]);
    }

    public function detail($id)
    {
        $data = Product::find($id);
        return view('details', ['products' => $data]);
    }
}
