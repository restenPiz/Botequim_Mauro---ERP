<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_stock')->unsigned();
            $table->foreign('Id_stock')->references('id')->on('stocks');
        });
    }

    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            //
        });
    }
};
