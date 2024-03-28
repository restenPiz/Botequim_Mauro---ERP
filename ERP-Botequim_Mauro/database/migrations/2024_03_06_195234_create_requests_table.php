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
            Schema::table('clients', function (Blueprint $table) {
                $table->foreignId('Id_client')->constrained(
                    table: 'clients', indexName: 'id'
                );
            });
            Schema::table('paid_credits', function (Blueprint $table) {
                $table->foreignId('Id_paid_credit')->constrained(
                    table: 'paid_credits', indexName: 'id'
                );
            });

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
