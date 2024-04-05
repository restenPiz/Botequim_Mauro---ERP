<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function allProduct()
    {
        $products = Product::all();

        return view('Admin.allProduct', compact("products"));
    }
}
