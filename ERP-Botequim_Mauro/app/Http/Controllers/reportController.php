<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function addReport()
    {
        return view("Admin.addReport");
    }
}
