<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table='stocks';

    protected $fillable=[
        'Quantity','Code','Price',
        'Expiry_date','Entry_date',
        'Stock_code','Product_name','Id_product'
    ];
    
    //?Inicio das chaves estrangeiras
    public function productos()
    {
        return $this->belongsTo(Product::class,'Id_product','id');
    }
    public function name($id)
    {
        return Product::find($id)->Product_name;
    }
}
