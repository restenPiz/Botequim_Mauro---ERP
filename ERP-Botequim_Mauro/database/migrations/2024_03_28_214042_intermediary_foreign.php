<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('Product_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_stock')->unsigned();
            $table->foreign('Id_stock')->references('id')->on('stocks');
            
            $table->unsignedBigInteger('Id_request')->unsigned();
            $table->foreign('Id_request')->references('id')->on('requests');
            
            $table->unsignedBigInteger('Id_client')->unsigned();
            $table->foreign('Id_client')->references('id')->on('clients');

            //?Inicio das colunas alternativas
            $table->string('Quantity');
            $table->string('Product_price');
            $table->string('Amount');
        });
    }
    
    public function down(): void
    {
        Schema::table('Product_requests', function (Blueprint $table) {
            //
        });
    }
};
