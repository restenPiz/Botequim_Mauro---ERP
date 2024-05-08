<?php

namespace App\Models;

use App\Models\ProductRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    //*Nome da tabela 
    protected $table ='clients';

    //*Inicio das colunas da tabela cliente
    protected $fillable =[
        'Name_client','Surname','Age','Household','client_type'
    ];
    public function debit()
    {
        return $this->hasMany(Debit::class);   
    }
    public function paid_credit()
    {
        return $this->hasMany(Paid_Credit::class);   
    }
    public function request()
    {
        return $this->hasMany(Request::class);   
    }
    public function requests()
    {
        return $this->hasMany(ProductRequest::class);   
    }
}
