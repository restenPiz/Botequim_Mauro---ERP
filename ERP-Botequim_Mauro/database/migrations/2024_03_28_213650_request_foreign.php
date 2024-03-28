<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_client');
            $table->foreign('Id_client')->references('id')->on('clients');
        
            $table->unsignedBigInteger('Id_paid_credit');
            $table->foreign('Id_paid_credit')->references('id')->on('paid__credits');
        });
    }

    public function down(): void
    {
        Schema::table('requests', function (Blueprint $table) {
            //
        });
    }
};
