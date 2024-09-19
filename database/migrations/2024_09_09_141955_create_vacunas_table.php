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
        Schema::create('vacunas', function (Blueprint $table) {
            $table->id('Id_vacuna');
            $table->string('nombre_de_vacuna');
            $table->string('Descripción')->nullable();;
            $table->boolean('Estado')->default('true');;
            $table->timestamps();
            //add delete_at colum

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacunas');
    }
};
