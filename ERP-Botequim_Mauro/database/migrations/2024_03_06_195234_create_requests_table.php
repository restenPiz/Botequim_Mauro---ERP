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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('Product_name');
            $table->string('Product_price');
            $table->string('Quantity');
            $table->time('Request_time');
            $table->date('Request_date');
            
            //*Inicio das chaves estrangeiras
            $table->unsignedBigInteger('Id_client')->unsigned();
            $table->foreign('Id_client')->references('id')->on('clients');

            $table->unsignedBigInteger('Id_paid_credit')->unsigned();
            $table->foreign('Id_paid_credit')->references('id')->on('paid_credits');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
