<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_out extends Model
{
    use HasFactory;

    protected $table='stock_outs';

    protected $fillable = [
        'Product_name','Quantity','Date','Id_product'
    ];

    //?Inicio das chaves estrangeiras
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function name($id)
    {
        return Product::find($id)->Product_name;
    }
}
