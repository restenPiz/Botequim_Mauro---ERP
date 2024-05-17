<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Sale_History;
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

    //?Inicio dos metodos de conclusao de vendas

    public function storeSaleHistory()
    {
        // $sales = Sale::all();

        // // Iterar sobre as vendas e mover os dados para a tabela sale_histories
        // foreach ($sales as $sale) {
        //     Sale_History::create([
        //         'Product_price' => $sale->Product_price, // calcular o total_price
        //         'Quantity' => $sale->Quantity,
        //         'Id_stock' => $sale->Id_stock,
        //         'Amount'=> $sale->Product_price * $sale->Quantity,
        //         'Total_price'=>Request::input('Total_price'),
        //         'Id_payment'=>Request::input('Id_payment'),
        //     ]);
        // }

        // // Deletar os dados da tabela sales
        // Sale::truncate();

        // Alert::success('Vendido','O producto foi vendido com sucesso!');

        // return back();

        // Calcular o preço total da venda com base nos produtos vendidos
        $totalPrice = Sale::sum('Product_price');

        // Obter o valor pago pelo cliente (Total_price)
        $valorPago = Request::input('Total_price');

        // Calcular o valor do IVA (por exemplo, 20%)
        $iva = $totalPrice * 0.20;

        // Calcular o troco
        $troco = $valorPago - ($totalPrice + $iva);

        // Iterar sobre as vendas e mover os dados para a tabela sale_histories
        $sales = Sale::all();
        foreach ($sales as $sale) {
            Sale_History::create([
                'Product_price' => $sale->Product_price,
                'Quantity' => $sale->Quantity,
                'Id_stock' => $sale->Id_stock,
                'Amount'=> $sale->Product_price * $sale->Quantity,
                'Total_price'=> $totalPrice,
                'IVA' => $iva,
                'Troco' => $troco,
                'Id_payment'=>Request::input('Id_payment'),
            ]);
        }

        // Deletar os dados da tabela sales
        Sale::truncate();

        Alert::success('Vendido','O produto foi vendido com sucesso!');

        return back();

    }
    //?Fim dos metodos de conclusao de venda

    public function allSale()
    {
        $sales=Sale_History::all();

        return view('Attendant.allSale',compact('sales'));
    }
}
