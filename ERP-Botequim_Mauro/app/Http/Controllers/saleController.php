<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\ProductRequest;
use App\Models\Sale;
use App\Models\Sale_History;
use App\Models\Stock;
use Auth;
use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Request;

class saleController extends Controller
{
    //*Inicio do metodo responsavel por eliminar um producto da tabela de vendas
    public function deleteSaleHistory($saleId)
    {
        $sale = Sale_History::findOrFail($saleId);
        $productId = $sale->Id_stock;
        $quantitySold = $sale->Quantity;

        $stock = Stock::where('id', $productId)->first();
        if ($stock) {
            $stock->Quantity += $quantitySold;
            $stock->save();
        }

        $sale->delete();

        Alert::success('Eliminado!','Producto eliminado com sucesso da lista de vendas!');
        
        return redirect()->back();
    }
    public function storeSale()
    {
        $rules = [
            'Id_stock' => 'required|exists:stocks,id',
            'Quantity' => 'required|integer|min:1',
        ];

        // Mensagens de erro personalizadas
        $messages = [
            'Id_stock.required' => 'Por favor, selecione um produto.',
            'Id_stock.exists' => 'O produto selecionado é inválido.',
            'Quantity.required' => 'A quantidade é obrigatória.',
            'Quantity.integer' => 'A quantidade deve ser um número inteiro.',
            'Quantity.min' => 'A quantidade deve ser pelo menos 1.',
        ];

        $validator = Validator::make(Request::all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $sales = new Sale();

        // Verificar a quantidade no estoque
        $stock = Stock::find(Request::input('Id_stock'));

        if ($stock) {
            if ($stock->Quantity < Request::input('Quantity')) {
                Alert::error('Erro', 'Quantidade insuficiente no estoque para o produto selecionado!');
                return back();
            }
        } else {
            Alert::error('Erro', 'Produto não encontrado no estoque!');
            return back();
        }

        $sales->Product_price = Request::input('Product_price');
        $sales->Quantity = Request::input('Quantity');
        $sales->Id_stock = Request::input('Id_stock');
        $sales->Amount = $sales->Product_price * $sales->Quantity;

        $sales->save();

        // Atualizar a quantidade no estoque
        $stock->Quantity -= $sales->Quantity;
        $stock->save();

        // Alert::success('Adicionado!', 'Produto adicionado na lista de vendas!');

        // return back();
        return response()->json([
            'status' => 'success',
            'message' => 'Produto adicionado na lista de vendas!',
            'sale' => $sales
        ], 200);
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
        
        //*Inicio do metodo responsavel por verificar a quantidade dos producto
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
        
        $last= null;

        foreach ($sales as $sale) {

            Log::info('Product_price: ' . $sale->Product_price);
            Log::info('Quantity: ' . $sale->Quantity);
            Log::info('Id_stock: ' . $sale->Id_stock);
            Log::info('Amount: ' . ($sale->Product_price * $sale->Quantity));
            Log::info('Total_price: ' . $valorPago);
            Log::info('IVA: ' . $iva);
            Log::info('Troco: ' . $troco);
            Log::info('Id_payment: ' . Request::input('Id_payment'));
            $last=Sale_History::create([
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

        return redirect()->route('showReceipt', ['id' => $last->id]);
    }
    //?Fim dos metodos de conclusao de venda

    public function showReceipt($id)
    {
        // $sales = Sale_History::with('stocks.product')
        $sale = Sale_History::with('stocks')
            ->get();

        $lastSaleDate = Sale_History::max('created_at');

        // Selecionar todas as vendas efetuadas na mesma data de criação
        $sales = Sale_History::with('stocks')
            ->where('created_at', $lastSaleDate)
            ->get();

        $total=DB::table('sale__histories')
            ->where('created_at', $lastSaleDate)
            ->sum('Amount');
        
        $lastSale = Sale_History::max('Total_price');

        $tro=DB::table('sale__histories')
            ->where('id', $id)
            ->sum('Total_price');

        $troco=$tro - $total;

        $valor = Sale_History::where('id', $id)->value('Total_price');

        return view('receipt', compact('sales','troco','total','valor'));
    }

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
            $total_Price = DB::table('Product_requests')
                ->where('Id_client',$id)
                ->sum('Amount');

            //* Calcular o preço total da venda com base nos produtos vendidos
            // $totalPrice = Sale::sum('Product_price');
            $totalPrice = Sale::sum('Amount');

            //* Obter o valor pago pelo cliente (Total_price)
            $valorPago = Request::input('Total_price');

            $iva = $totalPrice * 0.17;

            $troco = $valorPago - ($totalPrice + $iva);

            $sales = DB::table('Product_requests')
                ->where('Id_client',$id)
                ->get();

            //* Verificar se o valor pago é suficiente
            if ($valorPago < $total_Price) {
                Alert::error('Erro','O valor pago é insuficiente para a venda!');
                return back();
            }
            
            //*Inicio do metodo responsavel por verificar a quantidade dos producto
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
            
            $last= null;

            foreach ($sales as $sale) {
                $last=Sale_History::create([
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

            // Debit::truncate();
            DB::table('Product_requests')
                ->where('Id_client', $id)
                ->delete();
            
            DB::table('clients')
                ->where('id',$id)
                ->delete();

            return redirect()->route('showReceipt', ['id' => $last->id]);
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            //* Calcular o preço total da venda com base nos produtos vendidos
            // $totalPrice = Sale::sum('Product_price');
            $total_Price = DB::table('debits')
                ->where('Id_client',$id)
                ->sum('Amount');

            //* Calcular o preço total da venda com base nos produtos vendidos
            // $totalPrice = Sale::sum('Product_price');
            $totalPrice = Sale::sum('Amount');

            //* Obter o valor pago pelo cliente (Total_price)
            $valorPago = Request::input('Total_price');

            $iva = $totalPrice * 0.17;

            $troco = $valorPago - ($totalPrice + $iva);

            $sales = DB::table('debits')
                ->where('Id_client',$id)
                ->get();

            //* Verificar se o valor pago é suficiente
            if ($valorPago < $total_Price) {
                Alert::error('Erro','O valor pago é insuficiente para a venda!');
                return back();
            }
            
            //*Inicio do metodo responsavel por verificar a quantidade dos producto
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
            
            $last= null;

            foreach ($sales as $sale) {
                $last=Sale_History::create([
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

            //?Inicio dos metodos responsaveis por eliminar o producto e o cliente
            // Debit::truncate();
            DB::table('debits')
                ->where('Id_client', $id)
                ->delete();

            DB::table('clients')
                ->where('id',$id)
                ->delete();

            return redirect()->route('showReceipt', ['id' => $last->id]);
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
            \Log::error('Error fetching sales data: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    //*Inicio do metodo que retorna os productos mais vendidos
    public function getTopSellingProducts(\Request $request)
    {   
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
    //*Inicio do metodo responsavel pelo recibo da parte de vendas
    
}
