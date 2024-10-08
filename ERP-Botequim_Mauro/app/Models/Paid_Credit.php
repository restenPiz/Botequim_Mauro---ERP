<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid_Credit extends Model
{
    use HasFactory;

    protected $table='paid__credits';

    protected $fillable=[
        'Credit_value','Total_balance','Date','Id_client'
    ];

    //*Inicio dos links de chave estrangeira
    public function client()
    {
        return $this->belongsTo(Client::class,'Id_client','id');
    }
    public function name($id)
    {
        return Client::find($id)->Name_client;
    }
}
