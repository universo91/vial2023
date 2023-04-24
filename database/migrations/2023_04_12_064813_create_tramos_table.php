<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rutas_id');
            $table->integer('numero_tramo');
            $table->enum('tipo_terreno', ['plano', 'ondulado', 'accidentado', 'escarpado'])->default('plano');
            $table->enum('estado_via', ['bueno', 'regular', 'malo'])->nullable();
            $table->enum('tipo_superficie', ['pavimento asfaltico', 'pavimento de concreto', 'afirmado', 'sin afirmar', 'trocha carrozable'])->nullable();
            //$table->decimal('ancho_plataforma', 8,2);
            $table->string('progresiva');
            $table->decimal('coor_x_inicial', 10, 2)->nullable();
            $table->decimal('coor_y_inicial', 10, 2)->nullable();
            $table->decimal('altitud_inicial', 8,2)->nullable();
            $table->decimal('coor_x_final', 10, 2);
            $table->decimal('coor_y_final', 10, 2);
            $table->decimal('altitud_final', 8, 2);
            $table->string('zona');
            $table->string('descripcion_elementos')->nullable();
            $table->string('codigo_imagen');
            $table->string('tramo_inicio')->nullable(); // kilometraje inicial del tramo o progesiva inicial
            $table->string('tramo_fin'); // kilometraje final del tramo o progresiva final
            //formato plataforma
            $table->integer('numero_carriles');
            $table->decimal('ancho_calzada', 4, 2);
            $table->decimal('ancho_berma_izquierda', 4, 2);
            $table->decimal('ancho_berma_derecha', 4, 2);
            $table->enum('identificacion_calzada', ['CD', 'UC'])->nullable();
            $table->string('observaciones');
            $table->timestamps();

            $table->foreign('rutas_id')->references('id')->on('rutas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramos');
    }
}
