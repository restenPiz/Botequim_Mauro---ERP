<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid_Credit extends Model
{
    use HasFactory;

    protected $table='Paid_credits';

    protected $fillable=[
        'Credit_value','Total_balance','Date','Id_client'
    ];
}
