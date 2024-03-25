<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    use HasFactory;

    protected $table = 'debits';

    protected $fillable = [
        'Client_name',
        'Surname',
        'Value',
        'Bi_number',
        'Date_to_pay',
        'Description',
        'Id_client',
        'Id_request',
    ];

    //*Inicio dos relacionamentos das chaves estrangeiras
    public function clients()
    {
        return $this->hasMany(Client::class);   
    }
    //*Metodo responsavel por encontrar o nome da categoria
    public function name($id)
    {
        return Client::find($id)->Name_client;
    }
}
