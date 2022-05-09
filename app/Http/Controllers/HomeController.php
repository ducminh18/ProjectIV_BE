<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
        function Index(Request $request)
        {
                return view('home/pages/index');
                // $data = DB::select('SELECT * FROM `products` LIMIT 8');
                // return view('home', ['data' => $data]);
        }
=======
    function Index(Request $request)
    {
        return view('home/pages/index');
        // $data = DB::select('SELECT * FROM `products` LIMIT 8');
        // return view('home', ['data' => $data]);
    }
>>>>>>> 41d2e61880e7cd27510565c27bed18ed960795c3
}
