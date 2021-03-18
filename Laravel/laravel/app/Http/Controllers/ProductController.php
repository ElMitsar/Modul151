<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list() {
        $products = \App\Models\Product::all();

        echo "<pre>";
        var_dump($products);
        die();

        return view('products', ['products' => $products]);
    }

    public function detail($id) {
        dd($id);
    }
}
