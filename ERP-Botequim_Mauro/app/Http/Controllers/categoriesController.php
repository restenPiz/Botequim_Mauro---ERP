<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

class categoriesController extends Controller
{
    public function addCategories()
    {
        return view('Admin.addCategory');
    }
    public function allCategories()
    {
        $categories=Category::all();

        return view('Admin.allCategories',compact('categories'));
    }
    public function storeCategories()
    {
        $table=new Category();

        $table->Category_name=Request::input('Category_name');
        $table->Code=Request::input('Code');

        $table->save();

        Alert::success('Adicionado!','A sua categoria foi adicionada com sucesso!');

        return redirect()->route('allCategories');
    }
    public function updateCategories($id)
    {
        $categories=Category::findOrFail($id);

        $categories->Category_name=Request::input('Category_name');
        $categories->Code=Request::input('Code');

        $categories->save();

        Alert::success('Adicionado!','A categoria foi adicionada com sucesso!');

        return back();
    }
    public function deleteCategories($id)
    {
        $categories=Category::findOrFail($id);

        $categories->delete();

        return back();
    }
}
