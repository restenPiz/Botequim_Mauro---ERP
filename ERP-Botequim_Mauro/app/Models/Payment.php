<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table='payments';

    protected $fillable=[
        'Name_payment','Code'
    ];
    public function sales()
    {
        return $this->hasMany(Sale_History::class,'Id_payment','id');   
    }
}
