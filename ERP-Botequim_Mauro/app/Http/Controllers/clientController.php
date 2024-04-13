<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function addClient()
    {
        $clients=Client::all();
        
        return view("Admin.addClient",compact('clients'));
    }
}
