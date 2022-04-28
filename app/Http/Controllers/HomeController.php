<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Index(Request $request)
    {
        return view('home/pages/index');
<<<<<<< HEAD
        // $data = DB::select('SELECT * FROM `products` LIMIT 8');
        // return view('home', ['data' => $data]);
=======
        $data = DB::select('SELECT * FROM `products` LIMIT 8');
        return view('home', ['data' => $data]);
>>>>>>> 7dca136466195f76199f1f30319a1b5f0164bd44
    }
}
