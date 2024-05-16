<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Stock;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class saleController extends Controller
{
    public function storeSale()
    {
        $sales=new Sale();

        $sales->Product_price=Request::input('Product_price');
        $sales->Quantity=Request::input('Quantity');
        $sales->Id_stock=Request::input('Id_stock');

        $sales->save();

        Alert::success('Adicionado!','Producto adicionado na lista de vendas!');

        return back();
    }
    public function updateSale($id)
    {
        $sales=Sale::findOrFail($id);

        $sales->Product_price=Request::input('Product_price');
        $sales->Quantity=Request::input('Quantity');
        $sales->Id_stock=Request::input('Id_stock');

        $sales->save();

        Alert::success('Actualizado!','Producto actualizado na lista de vendas!');

        return back();
    }
    public function deleteSale($id)
    {
        $sales=Sale::findOrFail($id);

        $sales->delete();

        Alert::success('Eliminado!','O producto foi eliminado com sucesso!');

        return back();
    }
}
