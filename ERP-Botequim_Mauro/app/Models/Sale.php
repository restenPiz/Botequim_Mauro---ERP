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
        return $this->hasMany(Stock::class);   
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function name($id)
    {
        return Payment::find($id)->Name_payment;
    }
}
