<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    function manager()
    {
        return view('pages.blog.manage-log');
    }
    function chart()
    {
        return view('pages.order.dashboard');
    }
}
