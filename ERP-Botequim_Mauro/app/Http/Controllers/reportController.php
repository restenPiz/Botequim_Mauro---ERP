<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function generatePdf(Request $request)
    {
        $data = $request->all();

        $pdf = Pdf::loadView('pdf.relatorio', compact('data'));

        return $pdf->download('relatorio.pdf');
    }
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
