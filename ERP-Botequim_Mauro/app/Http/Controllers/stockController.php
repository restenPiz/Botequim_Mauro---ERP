<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class stockController extends Controller
{
    public function allStock()
    {
        $stocks = Stock::all();
        $products=Product::all();
        
        return view('Admin.allStock-in',compact('stocks','products'));
    }
    public function addStock()
    {
        return view('Admin.addStock');
    }
    public function updateStock($id)
    {
        $stock = Stock::find($id);

        $stock->id=Request::input('id');
        $stock->Quantity=Request::input('Quantity');
        $stock->Code=Request::input('Code');
        $stock->Price=Request::input('Price');
        $stock->Entry_date=Request::input('Entry_date');
        $stock->Expiry_date=Request::input('Expiry_date');
        $stock->Id_product=Request::input('Id_product');        

        $stock->save();

        //?Alerta de sucesso
        Alert::success('Actualizado','O producto foi actualizado com sucesso!');

        return back();
    }
    public function storeStock()
    {
        $stock=new Stock();

        $stock->Quantity=Request::input('Quantity');
        $stock->Code=Request::input('Code');
        $stock->Price=Request::input('Price');
        $stock->Entry_date=Request::input('Entry_date');
        $stock->Expiry_date=Request::input('Expiry_date');
        $stock->Id_product=Request::input('Id_product');
        
        $stock->save();

        Alert::success('Adicionado','O producto foi adicionado com sucesso!');

        return back();
    }
    //?Inicio do metodo responsavel por eliminar o producto
    public function deleteStock($id)
    {
        $stock=Stock::find($id);

        $stock->delete();

        Alert::success('Eliminado','O producto foi eliminado com sucesso!');

        return back();
    }
    //?Inicio do metodo que retorna os dados do select
    public function getProductDetails()
    {
        // $input = Request::input('Product_name');

        // $product = Product::where('Product_name', $input)->first();
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
    public function getProduct()
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
}
