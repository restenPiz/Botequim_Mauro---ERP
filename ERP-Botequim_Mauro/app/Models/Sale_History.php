<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_History extends Model
{
    use HasFactory;

    protected $table='sale__histories';

    protected $fillable=['Product_price','Quantity','Id_stock','Id_payment','Total_price'];

    //*Inicio da chave estrangeira
    public function stocks()
    {
        return $this->belongsTo(Stock::class,'Id_stock','id');   
    }
    public function payments()
    {
        return $this->belongsTo(Payment::class,'Id_payment','id');   
    }
}
