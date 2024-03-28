<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('Products', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_category');
            $table->foreign('Id_category')->references('id')->on('categories');
        });
    }

    public function down(): void
    {
        Schema::table('Products', function (Blueprint $table) {
            
        });
    }
};
