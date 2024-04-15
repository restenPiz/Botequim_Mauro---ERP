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
        Schema::table('debits', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_product')->unsigned();
            $table->foreign('Id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('debits', function (Blueprint $table) {
            //
        });
    }
};
