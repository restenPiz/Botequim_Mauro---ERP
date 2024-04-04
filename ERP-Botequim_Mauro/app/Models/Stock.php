<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table='stocks';

    protected $fillable=[
        'Quantity','Barcode','Price',
        'Expiry_date','Entry_date',
        'Stock_code'
    ];

}
