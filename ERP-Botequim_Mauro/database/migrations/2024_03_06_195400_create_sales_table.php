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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('Product_price');
            $table->string('Quantity');
            $table->string('Amount');

            //*Inicio das chaves estrangeiras
        /*    $table->unsignedBigInteger('Id_stock')->unsigned();
            $table->foreign('Id_stock')->references('id')->on('stocks');

            $table->unsignedBigInteger('Id_payment')->unsigned();
            $table->foreign('Id_payment')->references('id')->on('payments');
        */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
