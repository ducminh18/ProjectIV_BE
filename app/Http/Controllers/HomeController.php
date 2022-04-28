<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Index(Request $request)
    {
        return view('home/pages/index');
        $data = DB::select('SELECT * FROM `products` LIMIT 8');
        return view('home', ['data' => $data]);
    }
}
