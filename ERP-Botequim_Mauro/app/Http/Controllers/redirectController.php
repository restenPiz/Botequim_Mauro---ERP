<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class redirectController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole("admin"))
        {
            return view('dashboard');   
        }
        elseif(Auth::user()->hasRole('Attendant'))
        {
            return view('dashboard1');
        }
        elseif(Auth::user()->hasRole('Stock_manager'))
        {
            return view('dashboard2');
        }
        else
        {
            return view('dashboard3');
        }
    }
}
