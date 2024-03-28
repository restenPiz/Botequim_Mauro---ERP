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
        Schema::create('paid__credits', function (Blueprint $table) {
            $table->id();
            $table->string('Credit_value');
            $table->string('Total_balance');
            $table->string('Date');

            //*Inicio da chave estrangeira
            $table->unsignedBigInteger('Id_client')->unsigned();
            $table->foreign('Id_client')->references('id')->on('clients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paid__credits');
    }
};
