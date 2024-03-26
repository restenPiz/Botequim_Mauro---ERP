<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //*Nome da tabela 
    protected $table ='products';

    //*Inicio das colunas da tabela de productos
    protected $fillable =[
        'Product_name','Price','Quantity','Barcode','Sale_price','Expiry_date','Entry_date','Id_category'
    ];

    //*Inicio dos relacionamentos entre as tabelas
    public function categories()
    {
        return $this->belongsTo(Category::class);   
    }
    //*Metodo responsavel por encontrar o nome da categoria
    public function name($id)
    {
        return Category::find($id)->Category_name;
    }
}
