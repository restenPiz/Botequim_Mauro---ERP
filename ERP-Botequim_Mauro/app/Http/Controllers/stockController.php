<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale_History;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class stockController extends Controller
{
    //*Inicio do metodo para verificar quantidade de producto no stock
    public function checkStock()
    {
        $lowStockProducts = Stock::with('product')
            ->where('Quantity', '<=', 10)
            ->get();

        return response()->json($lowStockProducts);
    }
    //?Inicio do metodo responsavel por fazer a pesquisa dos dados
    public function search(Request $request)
    {
        $query = Request::get('query');
        
        $query = $request->get('query');
        $stocks = Stock::whereHas('product', function($q) use ($query) {
                        $q->where('Product_name', 'LIKE', "%{$query}%");
                    })
                    ->orWhere('Code', 'LIKE', "%{$query}%")
                    ->with('product')
                    ->get();
    
        $data = [];
        foreach ($stocks as $stock) {
            if ($stock->product) {
                $data[] = [
                    'Product_name' => $stock->product->Product_name,
                    'Quantity' => $stock->Quantity,
                    'Code' => $stock->Code,
                    'Price' => number_format($stock->Price, 2, ',', '.',) . ' MZN',
                    'Entry_date' => $stock->Entry_date,
                    'Expiry_date' => $stock->Expiry_date,
                    'id' => $stock->id
                ];
            }
        }
    
        return response()->json($stocks);
    }
    public function allStock()
    {
        $stocks = Stock::with('product')->get();
        $products=Product::all();
        
        return view('Admin.allStock-in',compact('stocks','products'));
    }
    public function addStock()
    {
        return view('Admin.addStock');
    }
    public function updateStock($id)
    {
        $stock = Stock::with('product')->find($id);

        $validatedData = Request::validate([
            'Id_product' => 'required|string|max:255',
        ]);

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

        $validatedData = Request::validate([
            'Id_product' => 'required|string|max:255',
        ]);

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
    public function getRequest()
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
    public function allStockOut()
    {
        $products=Sale_History::Paginate(10);

        return view('Admin.allStockOut',compact('products'));
    }
    //*Inicio do metodo que retorna os productos com as suas quantidades
    public function getStockQuantities()
    {
        $stockQuantities = Stock::with('product')
            ->select('Id_product', \DB::raw('SUM(Quantity) as quantity'))
            ->groupBy('Id_product')
            ->get()
            ->map(function($stock) {
                return [
                    'product_name' => $stock->product->Product_name,
                    'quantity' => $stock->quantity
                ];
            });

        return response()->json($stockQuantities);
    }
}
