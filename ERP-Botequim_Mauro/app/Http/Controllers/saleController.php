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
        $products=Sale_History::Paginate(8);

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
    public function getTopSellingProducts(\Request $request)
    {   
        // try{
        //     $topSellingProducts = Sale_History::select(
        //         'products.Product_name as name',
        //         DB::raw('SUM(sale__histories.Quantity) as total_quantity')
        //     )
        //     ->join('stocks', 'sale__histories.Id_stock', '=', 'stocks.id')
        //     ->join('products', 'stocks.Id_product', '=', 'products.id')
        //     ->groupBy('products.Product_name')
        //     ->orderBy('total_quantity', 'desc')
        //     ->get();

        //     return response()->json($topSellingProducts);
        // } catch (\Exception $e) {
        //     \Log::error('Error fetching sales data: ' . $e->getMessage());
        //     return response()->json(['error' => 'Internal Server Error'], 500);
        // }
        $period = Request::query('period', 'current');

        switch ($period) {
            case 'week':
                $startDate = now()->subWeek();
                break;
            case 'month':
                $startDate = now()->subMonth();
                break;
            case 'current':
            default:
                $startDate = now()->startOfYear(); // Exemplo para dados atuais do ano
                break;
        }

        $topSellingProducts = Sale_History::join('stocks', 'sale__histories.Id_stock', '=', 'stocks.id')
            ->join('products', 'stocks.Id_product', '=', 'products.id')
            ->where('sale__histories.created_at', '>=', $startDate)
            ->select('products.Product_name as name', DB::raw('SUM(sale__histories.Quantity) as total_quantity'))
            ->groupBy('products.Product_name')
            ->orderByDesc('total_quantity')
            ->get();

        return response()->json($topSellingProducts);
    }
    public function getBestSellingProducts()
    {
        $bestSellingProducts = Sale_History::with('stocks.product')
            ->select('Id_stock', \DB::raw('SUM(Quantity) as quantity_sold'))
            ->groupBy('Id_stock')
            ->orderBy('quantity_sold', 'desc')
            ->get()
            ->map(function($sale) {
                return [
                    'product_name' => $sale->stocks->product->Product_name,
                    'quantity_sold' => $sale->quantity_sold
                ];
            });

        return response()->json($bestSellingProducts);
    }
    public function getMonthlySales()
    {
        try {
            $monthlySales = Sale_History::select(
                DB::raw('MONTH(created_at) as month_num'),
                DB::raw('MONTHNAME(created_at) as month'),
                DB::raw('COUNT(id) as total_sales')
            )
            ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('MONTHNAME(created_at)'))
            ->orderBy('month_num', 'asc')
            ->get();

            return response()->json($monthlySales);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    //*Inicio do metodo responsavel por fazer a pesquisa de todas vendas
    public function searchSales()
    {
        $query = Request::get('query');
        $sales = Sale_History::with(['stocks', 'payment']) // Adapte os relacionamentos conforme necessário
                    ->whereHas('product', function ($q) use ($query) {
                        $q->where('Product_name', 'like', "%{$query}%");
                    })
                    ->orWhere('id', 'like', "%{$query}%") // Adapte conforme os campos da sua tabela
                    ->get();

        return response()->json($sales);
    }
}
