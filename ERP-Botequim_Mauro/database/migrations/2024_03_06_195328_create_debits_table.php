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
        Schema::create('debits', function (Blueprint $table) {
            $table->id();
            $table->string('Client_name');
            $table->string('Surname');
            $table->string('Value');
            $table->string('Bi_number');
            $table->string('Date_to_pay');
            $table->string('Description');

            //*Inicio das chaves estrangeiras
        /*    $table->unsignedBigInteger('Id_client')->unsigned();
            $table->foreign('Id_client')->references('id')->on('clients');

            $table->unsignedBigInteger('Id_request')->unsigned();
            $table->foreign('Id_request')->references('id')->on('requests');
        */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debits');
    }
};
