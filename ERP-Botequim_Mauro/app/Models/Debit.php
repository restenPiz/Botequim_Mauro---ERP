<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    use HasFactory;

    protected $table = 'debits';

    protected $fillable = [
        'Price',
        'Date_to_pay',
        'Id_client',
        'Id_product',
    ];

    //*Inicio dos relacionamentos das chaves estrangeiras
    
    public function client()
    {
        return $this->belongsTo(Client::class,'Id_client','id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'Id_product','id');
    }
}
