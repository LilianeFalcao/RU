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
        Schema::create('cardapios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prato_principal');
            $table->string('vegetariana');
            $table->string('vegana');
            $table->string('guarnicao');
            $table->string('arroz');
            $table->string('feijao');
            $table->string('salada1');
            $table->string('salada2');
            $table->string('salada3');
            $table->string('salada4');
            $table->string('sobremesa');
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardapios');
    }
};
