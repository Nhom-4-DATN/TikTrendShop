<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $topProducts = Product::with('store.user')
            ->orderBy('view_count', 'desc')
            ->take(5)
            ->get();
        $products = Product::with('store.user')->get();
        return view('home', ['topProducts' => $topProducts], ['products' => $products]);
    }
}
