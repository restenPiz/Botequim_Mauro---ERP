<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRequest extends Model
{
    use HasFactory;

    protected $table='product_requests';

    //?Inicio da tabela intermediaria
    protected $fillable=['Id_stock','Id_request'];

    //*Inicio dos relacionamentos entre as tabelas
    public function products() {
        return $this->belongsTo(Stock::class,'Id_stock','id');
    }
    public function requests() {
        return $this->belongsTo(Request::class,'Id_request','id');
    }
}
