<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class AdminController extends Controller
{
=======
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class AdminController extends Controller
{
    public ProductService $productService;
    function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

>>>>>>> d4b75824f1a38af2224f826d1dba8aa3d4941276
    function Index(Request $request)
    {
        return view('admin/pages/home');
    }
    function  Category(Request $request)
    {
        return view('admin/pages/category');
    }
    function  Product(Request $request)
    {
        return view('admin/pages/product');
    }
<<<<<<< HEAD
    function  ProductDetail(Request $request)
    {
        return view('admin/pages/product-detail');
=======
    function  ProductDetail(Request $request, int $id)
    {
        $product = $this->productService->getById($id);
        if ($product)
        {
            return view('admin/pages/product-detail', ['product' => $product]);
        }
        else
        {
            throw new NotFoundResourceException();
        }
    }
    function  ProductDetails(Request $request)
    {
        return view('admin/pages/product-detail-list');
>>>>>>> d4b75824f1a38af2224f826d1dba8aa3d4941276
    }
}
