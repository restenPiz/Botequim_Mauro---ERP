<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\ProductRequest;
use App\Models\Sale;
use App\Models\Sale_History;
use App\Models\Stock;
use Auth;
use DB;
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
        $sales->Amount= $sales->Product_price * $sales->Quantity;

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
        $sales->Amount= $sales->Product_price * $sales->Quantity;

        $sales->save();

        Alert::success('Actualizado!','Producto actualizado com sucesso!');

        return back();
    }
    public function deleteSale($id)
    {
        $sales=Sale::findOrFail($id);

        foreach ($sales as $sale) {
            
            $sale->delete();

            //*metodo responsavel por acrescentar a quantidade de productos no stock
            $stock = Stock::find($sale->Id_stock);
            if ($stock) {
                $stock->Quantity += $sale->Quantity;
                $stock->save();
            }
        }

        Alert::success('Eliminado!','O producto foi eliminado com sucesso!');

        return back();
    }

    //?Inicio dos metodos de conclusao de vendas

    public function storeSaleHistory()
    {
        //* Calcular o preço total da venda com base nos produtos vendidos
        // $totalPrice = Sale::sum('Product_price');
        $totalPrice = Sale::sum('Amount');

        //* Obter o valor pago pelo cliente (Total_price)
        $valorPago = Request::input('Total_price');

        $iva = $totalPrice * 0.17;

        $troco = $valorPago - ($totalPrice + $iva);

        $sales = Sale::all();

        //* Verificar se o valor pago é suficiente
        if ($valorPago < $totalPrice) {
            Alert::error('Erro','O valor pago é insuficiente para a venda!');
            return back();
        }
        
        foreach ($sales as $sale) {
            Sale_History::create([
                'Product_price' => $sale->Product_price,
                'Quantity' => $sale->Quantity,
                'Id_stock' => $sale->Id_stock,
                'Amount'=> $sale->Product_price * $sale->Quantity,
                'Total_price'=> $valorPago,
                'IVA' => $iva,
                'Troco' => $troco,
                'Id_payment'=>Request::input('Id_payment'),
            ]);

            //*metodo responsavel por reduzir a quantidade de productos no stock
            $stock = Stock::find($sale->Id_stock);
            if ($stock) {
                $stock->Quantity -= $sale->Quantity;
                $stock->save();
            }
        }

        Sale::truncate();

        Alert::success('Vendido','O produto foi vendido com sucesso!');

        return back();
    }
    //?Fim dos metodos de conclusao de venda

    public function allSale()
    {
        $products=Sale_History::all();

        $totalPrice = Sale::sum('Product_price');
        $iva = $totalPrice * 0.17;

        // $troco=$products->Total_price - ($totalPrice + $iva);

        return view('Attendant.allSale',compact('products','totalPrice','iva'));
    }
    public function deleteAllSale()
    {
        Sale::truncate();

        Alert::success('Eliminado','Productos eliminados com sucesso!');

        return back();
    }

    //?Inicio do metodo que salva as vendas dos pedidos do cliente
    public function storeSaleRequest($id)
    {
        if(Auth::user()->hasRole('attendant'))
        {
            //* Calcular o preço total da venda com base nos produtos vendidos
            // $totalPrice = Sale::sum('Product_price');
            $totalPrice = DB::table('Product_requests')
                ->where('Id_client',$id)
                ->sum('Amount');

            //* Obter o valor pago pelo cliente (Total_price)
            $valorPago = Request::input('Total_price');

            $iva = $totalPrice * 0.17;

            $troco = $valorPago - ($totalPrice + $iva);

            $sales = ProductRequest::all();

            //* Verificar se o valor pago é suficiente
            if ($valorPago < $totalPrice) {
                Alert::error('Erro','O valor pago é insuficiente para a venda!');
                return back();
            }
            
            foreach ($sales as $sale) {
                Sale_History::create([
                    'Product_price' => $sale->Product_price,
                    'Quantity' => $sale->Quantity,
                    'Id_stock' => $sale->Id_stock,
                    'Amount'=> $sale->Product_price * $sale->Quantity,
                    'Total_price'=> $valorPago,
                    'IVA' => $iva,
                    'Troco' => $troco,
                    'Id_payment'=>Request::input('Id_payment'),
                ]);

                //*metodo responsavel por reduzir a quantidade de productos no stock
                $stock = Stock::find($sale->Id_stock);
                if ($stock) {
                    $stock->Quantity -= $sale->Quantity;
                    $stock->save();
                }
            }

            ProductRequest::truncate();

            Alert::success('Vendido','O produto foi vendido com sucesso!');

            return back();
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            //* Calcular o preço total da venda com base nos produtos vendidos
            // $totalPrice = Sale::sum('Product_price');
            $totalPrice = DB::table('debits')
                ->where('Id_client',$id)
                ->sum('Amount');

            //* Obter o valor pago pelo cliente (Total_price)
            $valorPago = Request::input('Total_price');

            $iva = $totalPrice * 0.17;

            $troco = $valorPago - ($totalPrice + $iva);

            $sales = Debit::all();

            //* Verificar se o valor pago é suficiente
            if ($valorPago < $totalPrice) {
                Alert::error('Erro','O valor pago é insuficiente para a venda!');
                return back();
            }
            
            foreach ($sales as $sale) {
                Sale_History::create([
                    'Product_price' => $sale->Product_price,
                    'Quantity' => $sale->Quantity,
                    'Id_stock' => $sale->Id_stock,
                    'Amount'=> $sale->Product_price * $sale->Quantity,
                    'Total_price'=> $valorPago,
                    'IVA' => $iva,
                    'Troco' => $troco,
                    'Id_payment'=>Request::input('Id_payment'),
                ]);

                //*metodo responsavel por reduzir a quantidade de productos no stock
                $stock = Stock::find($sale->Id_stock);
                if ($stock) {
                    $stock->Quantity -= $sale->Quantity;
                    $stock->save();
                }
            }

            Debit::truncate();

            Alert::success('Vendido','O produto foi vendido com sucesso!');

            return back();
        }
    }

    //*Inicio do metodo que retorna dados de vendas para os graficos
    public function getSalesDates()
    {
        //* Obtendo os dados de vendas agrupados por data
        try {
            // \Log::info('Fetching sales data');
            // $sales = Sale_History::select(
            //     DB::raw('DATE(created_at) as date'),
            //     DB::raw('SUM(Quantity) as total')
            //     // DB::raw('SUM(Quantity) as total')
            // )->groupBy('date')->get();
            // \Log::info('Sales data fetched: ' . $sales);

            $sales = DB::table('sale__histories')
                ->select(DB::raw('DATE(created_at) as date'), 'Quantity as total')
                ->get();

            return response()->json($sales);
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Error fetching sales data: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    //*Inicio do metodo que retorna os productos mais vendidos
    public function getTopSellingProducts()
    {   
        try{
            $topSellingProducts = Sale_History::select(
                'products.Product_name as name',
                DB::raw('SUM(sale__histories.Quantity) as total_quantity')
            )
            ->join('stocks', 'sale__histories.Id_stock', '=', 'stocks.id')
            ->join('products', 'stocks.Id_product', '=', 'products.id')
            ->groupBy('products.Product_name')
            ->orderBy('total_quantity', 'desc')
            ->get();

            return response()->json($topSellingProducts);
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Error fetching sales data: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
