<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Debit;
use App\Models\Product;
use App\Models\Sale;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Http\Request;

class reportController extends Controller
{
    //*Inicio do metodo responsavel por gerar os relatorios de vendas e de productos
    public function generatePdf(Request $request)
    {
        $data = $request->all();

        $pdf = Pdf::loadView('pdf.relatorio', compact('data'));

        return $pdf->download('relatorio_productos.pdf');
    }
    //?Inicio do metodo para gerar o relatorio de vendas
    public function generateSalePdf(Request $request)
    {
        $data = $request->all();
        
        $pdf = Pdf::loadView('pdf.saleReport', compact('data'));

        return $pdf->download('relatorio_vendas.pdf');
    }
    //?Inicio do metodo responsavel por gerar o pdf de tabelas
    public function exportDebits($client)
    {
        $debits=Debit::with('product')
            ->where('Id_client',$client)
            ->get();

        $clients=client::where('id',$client)
            ->first();

        $pdf = PDF::loadView('pdf.debit', compact('clients', 'debits'));
        return $pdf->download('debits.pdf');
    }
    public function exportProducts()
    {
        $products=Product::with('categoria')->get();

        $pdf = PDF::loadView('pdf.product', compact('products'));
        return $pdf->download('products.pdf');
    }
    public function exportSales()
    {
        $products=Sale::with('stocks.product')->get();

        $pdf = PDF::loadView('pdf.sale', compact('products'));
        return $pdf->download('sale.pdf');   
    }
    //*fim do metodo responsavel por gerar os relatorios em pdf
    public function saleReport()
    {
        $stock_in=DB::table('stocks')
            ->count('id');
        
        $stock_out=DB::table('sale__histories')
            ->count('id');
        
        $users=DB::table('users')
            ->count('id');

        $totalAmount=DB::table('sale__histories')
            ->sum('Total_price');
        $amount=DB::table('sale__histories')
            ->sum('Amount');
        
        $products=DB::table('products')
            ->count('id');

        $clients=DB::table('clients')
            ->count('id');
        
        $debits=DB::table('clients')
            ->where('client_type','debit')
            ->count('id');
        
        $troco = $totalAmount - $amount;

        return view('Admin.saleReport',compact('stock_in','stock_out','users','troco','products','clients','debits'));  
        
    }
    public function productReport()
    {
        $stock_in=DB::table('stocks')
            ->count('id');
        
        $stock_out=DB::table('sale__histories')
            ->count('id');
        
        $users=DB::table('users')
            ->count('id');

        $totalAmount=DB::table('sale__histories')
            ->sum('Total_price');
        $amount=DB::table('sale__histories')
            ->sum('Amount');
        
        $products=DB::table('products')
            ->count('id');

        $clients=DB::table('clients')
            ->count('id');
        
        $debits=DB::table('clients')
            ->where('client_type','debit')
            ->count('id');
        
        $troco = $totalAmount - $amount;

        return view('Admin.productReport',compact('stock_in','stock_out','users','troco','products','clients','debits'));
    }
}
