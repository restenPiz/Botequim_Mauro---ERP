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

    //*Metodo responsavel por retornar o codigo do stock
    public function name($id)
    {
        return Stock::find($id)->Stock_code;
    }
}
