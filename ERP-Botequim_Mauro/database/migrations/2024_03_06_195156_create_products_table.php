<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Product_name');
            $table->string('Price');
            $table->string('Quantity');
            $table->string('Barcode');
            $table->string('Sale_price');
            $table->date('Expiry_date');
            $table->date('Entry_date');

            //*Inicio da coluna contendo a chave estrangeiraa
            $table->integer('Id_category')->unsigned();
            $table->foreign('Id_category')->references('id')->on('categories');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
