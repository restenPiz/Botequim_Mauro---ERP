<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Atualizar a tabela 'debits'
        Schema::table('debits', function (Blueprint $table) {
            $table->dropForeign(['Id_stock']);
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks')
                  ->onDelete('cascade');
        });

        // Atualizar a tabela 'sale_histories'
        Schema::table('sale__histories', function (Blueprint $table) {
            $table->dropForeign(['Id_stock']);
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks')
                  ->onDelete('cascade');
        });

        // Atualizar a tabela 'sales'
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign(['Id_stock']);
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        // Reverter a alteração na tabela 'debits'
        Schema::table('debits', function (Blueprint $table) {
            $table->dropForeign(['Id_stock']);
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks');
        });

        // Reverter a alteração na tabela 'sale_histories'
        Schema::table('sale__histories', function (Blueprint $table) {
            $table->dropForeign(['Id_stock']);
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks');
        });

        // Reverter a alteração na tabela 'sales'
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign(['Id_stock']);
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks');
        });
    }
};
