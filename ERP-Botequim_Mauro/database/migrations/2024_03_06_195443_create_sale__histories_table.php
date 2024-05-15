<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sale__histories', function (Blueprint $table) {
            $table->id();
            $table->string('Product_price');
            $table->string('Total_price');
            $table->string('Quantity');

            //*Inicio da chave estrangeira
        /*    $table->unsignedBigInteger('Id_stock')->unsigned();
            $table->foreign('Id_stock')->references('id')->on('stocks');
*/
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sale__histories');
    }
};
