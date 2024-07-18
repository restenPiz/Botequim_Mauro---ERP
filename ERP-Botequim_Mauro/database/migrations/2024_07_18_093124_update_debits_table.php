<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('debits', function (Blueprint $table) {
            // Primeiro, remova a chave estrangeira existente
            $table->dropForeign(['Id_stock']);
            
            // Em seguida, adicione a nova chave estrangeira com CASCADE na deleção
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('debits', function (Blueprint $table) {
            // Reverter a alteração caso a migração seja revertida
            $table->dropForeign(['Id_stock']);
            $table->foreign('Id_stock')
                  ->references('id')
                  ->on('stocks');
        });
    }
};
