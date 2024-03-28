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
            
            Schema::table('clients', function (Blueprint $table) {            
                $table->foreign('Id_client')->references('id')->on('clients');
            });

            Schema::table('paid_credits', function (Blueprint $table) {
                $table->foreign('Id_paid_credit')->references('id')->on('paid_credits');
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
