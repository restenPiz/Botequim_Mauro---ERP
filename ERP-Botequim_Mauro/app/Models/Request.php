<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table='requests';

    protected $fillable=['Product_price','Quantity'
    ,'Id_client','Id_stock'];

    //*Inicio dos relacionamentos das chaves estrangeiras
    public function clients()
    {
        return $this->belongsTo(Client::class, 'Id_client', 'id');
    }
     
    //*Inicio do metodo do relacionamento de muito para muitos
    public function product()
    {
        return $this->belongsToMany(Stock::class, 'Id_product','Id_request');
    }
}