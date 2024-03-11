<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRequest extends Model
{
    use HasFactory;

    protected $table='product_requests';

    protected $fillable=['Id_product','Id_request'];

    //*Inicio dos relacionamentos entre as tabelas
    public function products() {
        return $this->belongsTo(Product::class,'Id_product');
    }
    public function requests() {
        return $this->belongsTo(Request::class,'Id_request');
    }
}
