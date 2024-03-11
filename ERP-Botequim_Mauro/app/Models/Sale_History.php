<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_History extends Model
{
    use HasFactory;

    protected $table='sale__histories';

    protected $fillable=['Product_price','Id_stock'];

    //*Inicio da chave estrangeira
    public function stocks()
    {
        return $this->hasMany(Stock::class);   
    }
}
