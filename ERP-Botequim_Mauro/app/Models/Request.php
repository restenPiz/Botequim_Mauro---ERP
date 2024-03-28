<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table='requests';

    protected $fillable=['Product_name','Product_price','Quantity','Request_time',
    'Request_date','Id_client','Id_paid_credit'];

    //*Inicio dos relacionamentos das chaves estrangeiras
    public function clients()
    {
        return $this->belongsTo(Client::class, 'Id_client', 'id');
    }
    public function paid_credits()
    {
        return $this->belongsTo(Paid_Credit::class, 'Id_paid_credit', 'id');
    }

    //*Inicio do metodo responsavel por retornar o nome do cliente
    public function name($id)
    {
        return Client::find($id)->Name_client;
    }
}