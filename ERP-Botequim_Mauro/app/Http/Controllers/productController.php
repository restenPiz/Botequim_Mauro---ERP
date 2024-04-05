<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function allProduct()
    {
        $products = Product::all();

        return view('Admin.allProduct', compact("products"));
    }
    public function addProduct()
    {
        $categories=Category::all();

        return view('Admin.addProduct',compact('categories'));
    }
}
