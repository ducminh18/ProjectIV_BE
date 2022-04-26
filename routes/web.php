<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::prefix('admin')->group(function () {
    Route::get('home', [AdminController::class, 'Index']);
    Route::get('product', [AdminController::class, 'Product']);
    Route::get('product-detail', [AdminController::class, 'ProductDetail']);
    Route::get('category', [AdminController::class, 'Category']);
});

Route::get('', [HomeController::class, 'index']);
Route::get('/for-him', [ProductController::class, 'index']);
Route::get('/detail-product', [ProductController::class, 'DetailProduct']);
