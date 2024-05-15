<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table='sales';

    protected $fillable = [
        'Product_type','Total_price','Id_payment','Id_stock'
    ];

    //*Inicio das chaves estrangeiras
    public function stocks()
    {
        return $this->belongsTo(Stock::class,'Id_stock','id');   
    }
    public function payments()
    {
        return $this->belongsTo(Payment::class,'Id_payment','id');
    }
}
