<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class stockController extends Controller
{
    public function allStock()
    {
        $stocks = Stock::all();
        
        return view('Admin.allStock-in',compact('stocks'));
    }
}
