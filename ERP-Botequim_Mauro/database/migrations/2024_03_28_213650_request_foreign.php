<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('requests', function (Blueprint $table) {
            //?Inicio da chave estrangeira do id do cliente
            $table->unsignedBigInteger('Id_client');
            $table->foreign('Id_client')->references('id')->on('clients');

            //?Inicio da chave estrangeira do id do producto
            $table->unsignedBigInteger('Id_stock');
            $table->foreign('Id_stock')->references('id')->on('stocks');
        });
    }

    public function down(): void
    {
        Schema::table('requests', function (Blueprint $table) {
            //
        });
    }
};
