<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::all();
        return view('site.components.user.products', ['products' => $products]);
    }
}
