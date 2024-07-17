<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", length:100);
            $table->string("email", length:100);
            $table->string("telefono", length:100);
            $table->string("nombre_mascota", length:100);
            $table->string("raza", length:100);
            $table->string("clase_mascota");
            $table->date("fecha_cita");
            $table->Time("hora_cita");
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
