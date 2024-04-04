<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class stockController extends Controller
{
    public function allStock()
    {
        $stocks = Stock::all();
        
        return view('Admin.allStock-in',compact('stocks'));
    }
    public function addStock()
    {
        return view('Admin.addStock');
    }
    public function updateStock($id)
    {
        $stock = Stock::find($id);

        $stock->Product_name=Request::input('Product_name');
        $stock->Sale=Request::input('Sale');
        $stock->Quantity=Request::input('Quantity');
        $stock->Barcode=Request::input('Barcode');
        $stock->Price=Request::input('Price');
        $stock->Entry_date=Request::input('Entry_date');
        $stock->Expiry_date=Request::input('Expiry_date');
        $stock->Invoice_number=Request::input('Invoice_number');

        $stock->save();

        Alert::success('Actualizado','O producto foi actualizado com sucesso!');

        return back();
    }
    public function storeStock()
    {
        $stock=new Stock();

        $stock->Product_name=Request::input('Product_name');
        $stock->Sale=Request::input('Sale');
        $stock->Quantity=Request::input('Quantity');
        $stock->Barcode=Request::input('Barcode');
        $stock->Price=Request::input('Price');
        $stock->Entry_date=Request::input('Entry_date');
        $stock->Expiry_date=Request::input('Expiry_date');
        $stock->Invoice_number=Request::input('Invoice_number');

        $stock->save();

        Alert::success('Adicionado','O producto foi adicionado com sucesso!');

        return back();
    }
    public function delete($id)
    {
        $stock=Stock::find($id);

        $stock::delete();

        Alert::success('Eliminado','O producto foi eliminado com sucesso!');

        return back();
    }
}
