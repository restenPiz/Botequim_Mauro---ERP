<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function storeProduct()
    {
        $products = new Product();

        $products->Product_name=Request::input('Product_name');
        $products->Quantity=Request::input('Quantity');
        $products->Barcode=Request::input('Barcode');
        $products->Price=Request::input('Price');
        $products->Entry_date=Request::input('Entry_date');
        $products->Expiry_date=Request::input('Expiry_date');
        $products->Id_category=Request::input('Id_category');

        $products->save();

        //?Alerta de sucesso
        Alert::success('Actualizado','O producto foi adicionado com sucesso!');

        return back();
    }
}
