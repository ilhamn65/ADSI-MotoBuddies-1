<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    public function index(Product $product)
    {

        return view('products.details', [
            'product' => $product
        ]);
    }
}
