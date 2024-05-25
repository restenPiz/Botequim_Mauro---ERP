<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function saleReport()
    {
        return view('Admin.saleReport');
    }
    public function productReport()
    {
        return view('Admin.productReport');
    }
}
