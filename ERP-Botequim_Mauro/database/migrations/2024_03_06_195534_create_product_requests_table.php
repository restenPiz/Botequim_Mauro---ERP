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

        //*Inicio da tabela intermediaria
        Schema::create('product_requests', function (Blueprint $table) {
            $table->id();

            //*Inicio das chaves estrangeiras
        /*    $table->unsignedBigInteger('Id_product')->unsigned();
            $table->foreign('Id_product')->references('id')->on('products');
            
            $table->unsignedBigInteger('Id_request')->unsigned();
            $table->foreign('Id_request')->references('id')->on('requests');
        /*
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_requests');
    }
};
