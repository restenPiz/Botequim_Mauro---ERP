<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

class clientController extends Controller
{
    public function addClient()
    {
        $clients=Client::all();
        
        return view("Admin.addClient",compact('clients'));
    }
    public function storeClient()
    {
        $client=new Client();

        $client->Name_client=Request::input('Name_client');
        $client->Surname=Request::input('Surname');
        $client->Age=Request::input('Age');
        $client->Household=Request::input('Household');
        $client->client_type=Request::input('client_type');

        $client->save();

        Alert::success('Adicionado!','O cliente foi adicionado com sucesso!');

        return back();
    }
    public function updateClient($id)
    {
        $client=Client::find($id);

        $client->Name_client=Request::input('Name_client');
        $client->Surname=Request::input('Surname');
        $client->Age=Request::input('Age');
        $client->Household=Request::input('Household');
        $client->client_type=Request::input('client_type');

        $client->save();

        Alert::success('Actualizado!','O cliente foi actualizado com sucesso!');

        return back();
    }
    public function deleteClient($id)
    {
        $clients=Client::findOrFail($id);

        $clients->delete();

        Alert::success('Eliminado!','O cliente foi eliminado com sucesso.');

        return back();
    }
    public function showClient($id)
    {
        $clients=DB::table('clients')
            ->where('id',$id)
            ->get();
            
        dd($clients);
    }
}
