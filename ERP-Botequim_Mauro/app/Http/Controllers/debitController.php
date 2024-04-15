<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Request;

class debitController extends Controller
{
    public function getDebit()
    {
        $input= Request::input('Id_product');

        $product=Product::where('id',$input)->first();

        if ($product) {
            // Retorna os detalhes do produto como JSON
            return response()->json($product);
        } else {
            // Retorna uma resposta indicando que o produto não foi encontrado
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }
    }
}
