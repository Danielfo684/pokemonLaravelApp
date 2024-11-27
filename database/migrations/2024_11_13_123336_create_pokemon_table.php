<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatepokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id(); // Auto-increment y clave primaria
            $table->string('nombre', 50)->unique();
            $table->decimal('peso', 6, 3);
            $table->decimal('altura', 5, 3);
            $table->string('tipo', 50);
            $table->integer('nivel'); // Sin longitud, solo tipo
            $table->integer('evolucion'); // Sin longitud, solo tipo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}