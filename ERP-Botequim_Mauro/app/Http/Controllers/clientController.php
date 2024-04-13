<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class clientController extends Controller
{
    public function addClient()
    {
        $clients=Client::all();
        
        return view("Admin.addClient",compact('clients'));
    }
    public function deleteClient($id)
    {
        $clients=Client::findOrFail($id);

        $clients->delete();

        Alert::success('Eliminado!','O cliente foi eliminado com sucesso.');

        return back();
    }
}
