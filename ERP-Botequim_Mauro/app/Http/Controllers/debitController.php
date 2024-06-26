<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\Product;
use App\Models\Stock;
use Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class debitController extends Controller
{
    public function getDebit()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $input= Request::input('Id_product');

            $product=Stock::where('Id_product',$input)->first();

            if ($product) {
                // Retorna os detalhes do produto como JSON
                return response()->json($product);
            } else {
                // Retorna uma resposta indicando que o produto não foi encontrado
                return response()->json(['error' => 'Produto não encontrado'], 404);
            }
        }
        elseif(Auth::user()->hasRole('attendant'))
        {
            $input= Request::input('id');

            $product=Stock::where('Id_product',$input)->first();

            if ($product) {
                // Retorna os detalhes do produto como JSON
                return response()->json($product);
            } else {
                // Retorna uma resposta indicando que o produto não foi encontrado
                return response()->json(['error' => 'Produto não encontrado'], 404);
            }
        }
    }
    public function storeDebit()
    {
        $debit=new Debit();

        //*Inicio do metodo responsavel por verificar a quantidade dos producto

        $sales=DB::table('sales')->get();
        
        $insufficientStock = false;

        foreach ($sales as $sale) {
            $stock = Stock::find($sale->Id_stock);

            if ($stock) {
                if ($stock->Quantity < $sale->Quantity) {
                    $insufficientStock = true;
                    break;
                }
            } else {
                Alert::error('Erro', 'Produto não encontrado no estoque!');
                return back();
            }
        }

        if ($insufficientStock) {
            Alert::error('Erro', 'Quantidade insuficiente no estoque para um ou mais produtos!');
            return back();
        }

        $debit->Product_price=Request::input('Product_price');
        $debit->Id_stock=Request::input('Id_stock');
        $debit->Id_client=Request::input('Id_client');
        $debit->Quantity=Request::input('Quantity');
        $debit->Amount=$debit->Product_price * $debit->Quantity;;
        $debit->Date_to_pay=Request::input('Date_to_pay');

        $debit->save();

        Alert::success('Adicionado!','Producto adicionado com sucesso na lista de dividas!');

        return back();
    }
    public function updateDebit($id)
    {
        $debit=Debit::findOrFail($id);

        $debit->Product_price=Request::input('Product_price');
        $debit->Id_stock=Request::input('Id_stock');
        $debit->Id_client=Request::input('Id_client');
        $debit->Quantity=Request::input('Quantity');
        $debit->Amount=$debit->Product_price * $debit->Quantity;;
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

    //*Inicio do metodo que elimina todos os productos da tabela de dividas
    public function deleteAllDebit()
    {
        Debit::truncate();

        Alert::success('Eliminados','Os productos foram eliminados com sucesso!');

        return back();
    }
    public function allDebit($id)
    {
        $debits=DB::table('debits')
            ->where('id',$id)
            ->get();
        
        $count=DB::table('debits')
            ->where('Id_client', $id)
            ->sum('Amount');

        $amount=DB::table('debits')
            ->where('Id_client',$id)
            ->sum('Amount');
        
        return view('Admin.allDebit',compact('debits','count'));
    }
    public function allDebitAccountant()
    {
        $debits=Debit::all();
        
        $count=DB::table('debits')
            ->sum('Amount');
        

        return view('Accountant.allDebit',compact('debits','count'));
    }
}
