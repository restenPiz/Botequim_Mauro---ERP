<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Sale;
use App\Models\Stock;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
            return view('dashboard2');
        }
        if(Auth::user()->hasRole('accountant'))
        {
            return view('dashboard3');
        }
        else
        {
            Alert::error('Nao Autenticado!','Tente Novamente');

            return back();
        }
    }
}
