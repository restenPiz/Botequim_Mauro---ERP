<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //*Nome da tabela 
    protected $table ='Products';

    //*Inicio das colunas da tabela de productos
    protected $fillable =[
        'Product_name','Price','Quantity','Barcode','Sale_price','Empty_date','Id_category'
    ];

    //*Inicio dos relacionamentos entre as tabelas
    public function users()
    {
        return $this->hasMany(User::class);   
    }
}
