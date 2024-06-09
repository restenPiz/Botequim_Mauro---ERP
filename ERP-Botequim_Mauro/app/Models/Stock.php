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
        'Stock_code','Id_product'
    ];
    
    //?Inicio das chaves estrangeiras
    public function product()
    {
        return $this->belongsTo(Product::class,'Id_product','id');
    }
    public function requests()
    {
        return $this->belongsToMany(Request::class,'Id_product','id');
    }
    public function sales()
    {
        return $this->hasMany(Sale::class,'Id_stock','id');   
    }
    public function sale_history()
    {
        return $this->hasMany(Sale::class,'Id_stock','id');   
    }
}

