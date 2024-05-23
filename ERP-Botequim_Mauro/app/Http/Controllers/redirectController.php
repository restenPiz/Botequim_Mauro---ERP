<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Stock;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class redirectController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('dashboard');   
        }
        if(Auth::user()->hasRole('attendant'))
        {
            $payments=Payment::all();

            $stocks=Stock::with('product')->get();

            $sales=Sale::with('stocks.product')->get();

            $amount=DB::table('sales')
            ->sum('Amount');

            $totalPrice = Sale::sum('Amount');

            $iva = $totalPrice * 0.17;

            return view('dashboard1',compact('payments','stocks','sales','amount','iva'));
        }
        if(Auth::user()->hasRole('stock_manager'))
        {
            $products=Product::all();

            $categories=Category::all();

            //*Inicio dos metodos que vao retornar os dados de somatorios
            $stock_in=DB::table('stocks')
                ->count('id');
            
            $prod=DB::table('products')
                ->count('id');

            $stock_out=DB::table('sale__histories')
                ->count('id');

            return view('dashboard2',compact('products','categories','stock_in','prod','stock_out'));
        }
        if(Auth::user()->hasRole('accountant'))
        {
            //*Inicio dos metodos que vao retornar os dados de somatorios
            $stock_in=DB::table('stocks')
                ->count('id');
            
            $prod=DB::table('products')
                ->count('id');

            $stock_out=DB::table('sale__histories')
                ->count('id');

            return view('dashboard3',compact('stock_in','prod','stock_out'));
        }
        else
        {
            \RealRashid\SweetAlert\Facades\Alert::error('Nao Autenticado!','Tente Novamente');

            return back();
        }
    }
}
