<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortBy('id');

        return view('product.index', [
            'products' => $products
        ]);
    }
}