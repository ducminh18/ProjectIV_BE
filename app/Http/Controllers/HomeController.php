<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $categories = Category::where('visible', 1)->get();
        return view('home/pages/index', ['categories' => $categories]);
    }

    public function Shop()
    {
        $categories = Category::where('visible', 1)->get();
        /**
         * @var Collection $lastest
         */
        $lastest = Product::where('quantity', '>', 0)->orderBy('created_at', 'desc')->take(6)->get();
        if ($lastest->count() > 0)
            while ($lastest->count() < 6) {
                $lastest->push($lastest[0]);
            }
        return view('home/pages/shop', ['categories' => $categories, 'lastest_products' => $lastest]);
    }
}
