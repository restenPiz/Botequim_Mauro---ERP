<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_out extends Model
{
    use HasFactory;

    protected $table='stock_outs';

    protected $fillable = [
        'Quantity','Date','Id_product'
    ];

    //?Inicio das chaves estrangeiras
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    //*Inicio do relacionamento de muito para muitos com a tabela de Pedidos
    public function request()
    {
        return $this->belongsToMany(Request::class, 'Id_product','Id_request');
    }
}
