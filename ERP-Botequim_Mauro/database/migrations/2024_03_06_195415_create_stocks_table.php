<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('Quantity');
            $table->string('Barcode');
            $table->string('Price');
            $table->string('Expiry_date');
            $table->string('Entry_date');
            $table->string('Stock_code');

            //*Inicio da chave 
            $table->unsignedBigInteger('Id_product')->unsigned();
            $table->foreign('Id_product')->references('id')->on('products');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
