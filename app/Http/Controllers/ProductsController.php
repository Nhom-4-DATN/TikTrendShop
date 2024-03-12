<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductVariations;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::paginate(6);
        $product_variations = ProductVariations::all();
        return view('site/components/user/products', compact('products', 'product_variations'));
    }

    public function productDetails($id_product)
    {
        $product = Products::where('id_product', $id_product)->first();
        $product_variations = ProductVariations::all();
        return view('site/components/user/product_details', compact('product', 'product_variations'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        // $products = Products::where('name', 'like', '%'.$keyword.'%')->paginate(6);
        $products = Products::where('name', 'LIKE', "%$keyword%")
            ->where(function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "% $keyword %") // Từ nằm giữa câu
                    ->orWhere('name', 'LIKE', "$keyword %")    // Từ đầu câu
                    ->orWhere('name', 'LIKE', "% $keyword");   // Từ cuối câu
            })
            ->paginate(6);

        $totalProducts = $products->count();
        $product_variations = ProductVariations::all();
        return view('site/components/user/search', compact('products', 'product_variations', 'keyword', 'totalProducts'));
    }
}
