<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';

    //*Inicio das colunas da tabela de productos
    protected $fillable =[
        'Product_name','Price','Quantity','Sale_price','Expiry_date','Entry_date','Id_category'
    ];  

    //*Inicio dos relacionamentos entre as tabelas
    public function categoria()
    {
        return $this->belongsTo(Category::class, 'Id_category', 'id');
    }
    //*Metodo responsavel por encontrar o nome da categoria
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
