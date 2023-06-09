<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rutas_id');
            $table->string('progresiva', 15)->nullable();
            $table->string('coordenada_x', 10, 2)->nullable();
            $table->string('coordenada_y', 10, 2)->nullable();
            $table->string('altitud')->nullable();
            $table->unsignedBigInteger('tipos_id');
            $table->smallInteger('numero_vias')->nullable();
            $table->enum('tablero_rodadura', ['concreto', 'acero', 'madera'])->nullable();
            $table->decimal('longitud', 5, 2)->nullable();
            $table->decimal('ancho_calzada', 5, 2)->nullable();
            $table->enum('condicion_funcional', ['buena', 'regular', 'mala'])->nullable();
            $table->enum('hidrografia', ['rio', 'quebrada'])->nullable();
            $table->string('codigo_imagen', 255)->nullable();

            $table->foreign('rutas_id')->references('id')->on('rutas')->onDelete('cascade');
            $table->foreign('tipos_id')->references('id')->on('tipos')->onDelete('cascade');
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
        Schema::dropIfExists('puentes');
    }
}
