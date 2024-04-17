<?php

namespace App\Http\Controllers;

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
            return view('dashboard1');
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
