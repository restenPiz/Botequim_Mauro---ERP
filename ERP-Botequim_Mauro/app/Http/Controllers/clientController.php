<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Debit;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductRequest;
use App\Models\Stock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

class clientController extends Controller
{
    public function addClient()
    {
        $clients=DB::table('clients')
            ->where('client_type','debit')
            ->paginate(5);
        
        return view("Admin.addClient",compact('clients'));
    }
    public function storeClient()
    {
        if (Auth::check()) {
            $client=new Client();

            $validatedData = Request::validate([
                'Name_client' => 'required|string|max:255',
                'Surname' => 'required|string|max:255',
                'Age' => 'required|integer|min:21',
                'Household' => 'required|string|max:255',
            ]);

            $client->Name_client=Request::input('Name_client');
            $client->Surname=Request::input('Surname');
            $client->Age=Request::input('Age');
            $client->Household=Request::input('Household');
            $client->client_type=Request::input('client_type');

            $client->save();

            $message=$client->Name_client;
            Alert::success('Adicionado!',$message.' foi adicionado com sucesso!');

            return back();
       } 
       else
       {
            Alert::error('Nao Autenticado!','Faca o login para poder ter acesso!');

            return redirect()->route('login');
       }
    }
    public function updateClient($id)
    {
        $client=Client::find($id);

        $validatedData = Request::validate([
            'Name_client' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'Age' => 'required|integer|min:21',
            'Household' => 'required|string|max:255',
        ]);

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
        $products=Stock::all();
        
        $debits=Debit::where('Id_client',$id)->get();

        $count=DB::table('debits')
            ->where('Id_client', $id)
            ->sum('Amount');
        
        $payments=Payment::all();

        return view('Admin.allDebit', [
            'client' => Client::findOrFail($id)
        ],compact('products','debits','count','payments'));
    }
    //?Inicio do metodo de adicionar os pedidos de clientes
    public function addClientRequest()
    {
        if(Auth::user()->hasRole('attendant'))
        {
            //?metodo de retorno de todos os dados incluindo o tipo de cliente pedidos
            $clients=DB::table('clients')
                ->where('client_type','request')
                ->get();

            return view('Attendant.addClientRequest',compact('clients'));
        }
        else
        {
            Alert::error('Nao Autenticado!','Faca o login para poder ter acesso!');

            return redirect()->route('login');
        }
    }
    //?Inicio da rota responsavel por fazer o show dos pedidos do clientes
    public function showClientRequest($id)
    {
        if(Auth::user()->hasRole('attendant'))
        {
            $client=Client::where('id',$id)->first();
            
            $stocks=Stock::orderBy('Id_product','asc')->get();

            //?(Acessando a tabela intermediaria)
            $requests=ProductRequest::where('Id_client',$id)->get();

            $product_price=Stock::first();

            $payments=Payment::all();

            // $amount=$product_price->Product_price * $product_price->Quantity;
            $amount=DB::table('product_requests')
            ->sum('Amount');

            $count=DB::table('product_requests')
                ->where('Id_client', $id)
                ->sum('Amount');

            return view('Attendant.showClientRequest',compact('client','stocks','requests','count','amount','payments'));
        }
        else
        {
            Alert::error('Nao Autenticado','Faca login para poder entrar no sistema!');
        
            return back();
         }
    }
    public function updateClientRequest($id)
    {
        if(Auth::user()->hasRole('attendant')){
            $clients=Client::findOrFail($id);

            $clients->Name_client=Request::input('Name_client');
            $clients->Surname=Request::input('Surname');
            $clients->Age=Request::input('Age');
            $clients->Household=Request::input('Household');
            $clients->client_type=Request::input('client_type');

            return back();

        }
    }
    public function storeClientRequest()
    {
        $productRequest = new ProductRequest();

        $rules = [
            'Id_client' => 'required|exists:clients,id',
            'Id_stock' => 'required|exists:stocks,id',
            'Quantity' => 'required|integer|min:1',
        ];

        // Mensagens de erro personalizadas
        $messages = [
            'Id_client.required' => 'Por favor, selecione um cliente.',
            'Id_client.exists' => 'O cliente selecionado é inválido.',
            'Id_stock.required' => 'Por favor, selecione um produto.',
            'Id_stock.exists' => 'O produto selecionado é inválido.',
            'Quantity.required' => 'A quantidade é obrigatória.',
            'Quantity.integer' => 'A quantidade deve ser um número inteiro.',
            'Quantity.min' => 'A quantidade deve ser pelo menos 1.',
        ];

        // Executa a validação
        $validator = Validator::make(Request::all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $productRequest->Id_client = Request::input('Id_client');
        $productRequest->Id_stock = Request::input('Id_stock');
        $productRequest->Product_price = Request::input('Product_price');
        $productRequest->Quantity = Request::input('Quantity');
        $productRequest->Amount = $productRequest->Product_price * $productRequest->Quantity;

        $productRequest->save();
        
        Alert::success('Adicionado!', 'O produto foi adicionado na lista de pedidos!');

        return redirect()->back();
    }
    public function invoiceRequest($id)
    {
        $clients=Client::where('id',$id)->first();
            
        $stocks=Stock::orderBy('Id_product','asc')->get();

        //?(Acessando a tabela intermediaria)
        $requests=ProductRequest::where('Id_client',$id)->get();

        $payments=Payment::all();

        $count=DB::table('product_requests')
        ->where('Id_client', $id)
        ->sum('Product_price');

        return view('Attendant.invoiceRequest',compact('requests','clients','stocks','count','payments'));
    }
}

