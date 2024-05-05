<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class debitController extends Controller
{
    public function getDebit()
    {
        $input= Request::input('id');

        $product=Product::where('id',$input)->first();

        if ($product) {
            // Retorna os detalhes do produto como JSON
            return response()->json($product);
        } else {
            // Retorna uma resposta indicando que o produto não foi encontrado
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }
    }
    public function storeDebit()
    {
        $debit=new Debit();

        $debit->Price=Request::input('Price');
        $debit->Id_stock=Request::input('Id_stock');
        $debit->Id_client=Request::input('Id_client');
        $debit->Date_to_pay=Request::input('Date_to_pay');

        $debit->save();

        Alert::success('Adicionado!','Producto adicionado com sucesso na lista de dividas!');

        return back();
    }
    public function updateDebit($id)
    {
        $debit=Debit::findOrFail($id);

        $debit->Price=Request::input('Price');
        $debit->Id_stock=Request::input('Id_stock');
        $debit->Id_client=Request::input('Id_client');
        $debit->Date_to_pay=Request::input('Date_to_pay');

        $debit->save();

        Alert::success('Actualizado!','O producto foi actualizado com sucesso na lista de dividas!');

        return back();
    }
    public function deleteDebit($id)
    {
        $debit=Debit::findOrFail($id);

        $debit->delete();

        Alert::success('Eliminado!','A sua divida foi eliminada com sucesso!');

        return back();
    }
    public function allDebit($id)
    {
        $debits=DB::table('debits')
            ->where('id',$id)
            ->get();
        
        $count=DB::table('debits')
            ->where('Id_client', $id)
            ->sum('Price');
        

        return view('Admin.allDebit',compact('debits','count'));
    }
}
