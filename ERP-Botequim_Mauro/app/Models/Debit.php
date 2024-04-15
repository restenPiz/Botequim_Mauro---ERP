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
    
    public function client()
    {
        return $this->belongsTo(Client::class,'Id_client','id');
    }
    public function requests()
    {
        return $this->hasMany(Request::class);   
    }
}
