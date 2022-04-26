<?php

use App\Http\Controllers\AdminController;
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



Route::prefix('admin')->group(function() {
    Route::get('home', [AdminController::class, 'Index']);
    Route::get('product', [AdminController::class, 'Product']);
<<<<<<< HEAD
    Route::get('product-detail', [AdminController::class, 'ProductDetail']);
=======
    Route::get('product/{id}', [AdminController::class, 'ProductDetail']);
    Route::get('product-detail', [AdminController::class, 'ProductDetails']);
>>>>>>> d4b75824f1a38af2224f826d1dba8aa3d4941276
    Route::get('category', [AdminController::class, 'Category']);
});