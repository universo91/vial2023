<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 20);
            $table->unsignedBigInteger('distritos_id');
            $table->string('punto_inicio', 100)->nullable();
            $table->string('codigo_imagen', 255)->nullable();
            $table->decimal('coordenada_x_inicio', 10, 2)->nullable();
            $table->decimal('coordenada_y_inicio', 10, 2)->nullable();
            $table->string('punto_final', 100)->nullable();
            $table->decimal('coordenada_x_final', 10, 2)->nullable();
            $table->decimal('coordenada_y_final', 10, 2)->nullable();
            $table->decimal('altitud_punto_inicial', 8, 2)->nullable();
            $table->decimal('altitud_punto_final', 8, 2)->nullable();
            $table->string('progresiva_punto_inicial', 20)->nullable();
            $table->string('progresiva_punto_final', 20)->nullable();
            $table->timestamps();

            $table->foreign('distritos_id')->references('id')->on('distritos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
}
