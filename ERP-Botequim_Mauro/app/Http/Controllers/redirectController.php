<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Stock;
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

            $stocks=Stock::all();

            return view('dashboard1',compact('payments','stocks'));
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
