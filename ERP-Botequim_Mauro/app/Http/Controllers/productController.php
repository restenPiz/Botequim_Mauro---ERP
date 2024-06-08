<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

class productController extends Controller
{
    public function allProduct()
    {
        $products = Product::paginate(6);
        $categories=Category::all();

        return view('Admin.allProduct', compact('products','categories'));
    }
    public function addProduct()
    {
        $categories=Category::all();

        return view('Admin.addProduct',compact('categories'));
    }
    public function storeProduct()
    {
        $products = new Product();

        $validatedData = Request::validate([
            'Product_name' => 'required|string|max:255',
            'Quantity' => 'required|integer|min:1',
            'Code' => 'required|string|max:255|unique:products,Code',
            'Price' => 'required|numeric|min:1',
            'Sale_price' => 'required|numeric|min:1',
            'Entry_date' => 'required|date|after_or_equal:today',
            'Expiry_date' => 'required|date|after:Entry_date',
            'Id_category' => 'required|exists:categories,id'
        ]);

        $products->Product_name=Request::input('Product_name');
        $products->Quantity=Request::input('Quantity');
        $products->Code=Request::input('Code');
        $products->Price=Request::input('Price');
        $products->Sale_price=Request::input('Sale_price');
        $products->Entry_date=Request::input('Entry_date');
        $products->Expiry_date=Request::input('Expiry_date');
        $products->Id_category=Request::input('Id_category');

        $products->save();

        //?Alerta de sucesso
        Alert::success('Adicionado!','O producto foi adicionado com sucesso!');

        return back();
    }
    public function updateProduct($id)
    {
        $products = Product::findOrFail($id);

        $validatedData = Request::validate([
            'Product_name' => 'required|string|max:255',
            'Quantity' => 'required|integer|min:1',
            'Code' => 'required|string|max:255|unique:products,Code',
            'Price' => 'required|numeric|min:1',
            'Sale_price' => 'required|numeric|min:1',
            'Entry_date' => 'required|date|after_or_equal:today',
            'Expiry_date' => 'required|date|after:Entry_date',
            'Id_category' => 'required|exists:categories,id'
        ]);

        $products->Product_name=Request::input('Product_name');
        $products->Quantity=Request::input('Quantity');
        $products->Code=Request::input('Code');
        $products->Sale_price=Request::input('Sale_price');
        $products->Price=Request::input('Price');
        $products->Entry_date=Request::input('Entry_date');
        $products->Expiry_date=Request::input('Expiry_date');
        $products->Id_category=Request::input('Id_category');

        $products->save();

        //?Alerta de sucesso
        Alert::success('Actualizado!','O producto foi actualizado com sucesso!');

        return back();    
    }
    public function deleteProduct($id)
    {
        $products = Product::findOrFail($id);

        $products->delete();

        Alert::success('Eliminado!','O producto foi eliminado com sucesso!');

        return back();
    }
    //*Inicio do metodo responsavel por fazer a pesquisa dos dados
    public function search()
    {
        $query = Request::get('query');
        $products = Product::with('categoria') // Ensure the category relationship is loaded
                            ->where('Product_name', 'like', "%{$query}%")
                            ->orWhere('Code', 'like', "%{$query}%")
                            ->get();

        return response()->json($products);
    }

    //*Inicio do metodo responsavel por fazer acrescimo na quantidade de um producto existente
    public function addProductQuantity()
    {
        $validatedData = Request::validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);
    
        $productName = Request::input('Product_name');
        $quantityToAdd = Request::input('Quantity');
    
        // Verificar se o produto já existe no estoque
        $product = Product::where('Product_name', $productName)->first();
    
        if ($product) {
            // Produto já existe, atualizar a quantidade
            $product->quantity += $quantityToAdd;
            $product->save();
    
            return response()->json([
                'message' => 'Quantidade do produto atualizada com sucesso!',
                'product' => $product
            ]);
        } else {
            // Produto não existe, criar um novo registro
            $newProduct = Product::create([
                'name' => $productName,
                'quantity' => $quantityToAdd
            ]);
    
            Alert::sucess('Actualizado!','Os dados do producto existente foram actualizados!');

            return back();
        }
    }
}
