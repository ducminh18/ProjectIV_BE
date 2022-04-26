<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function Index(Request $request)
    {
        return view('home/pages/Products');
    }
    function detailProduct(Request $request)
    {
        return view('home/pages/detail-product');
    }
}
