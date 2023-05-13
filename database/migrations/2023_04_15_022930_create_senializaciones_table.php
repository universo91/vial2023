<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenializacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senializaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rutas_id');
            //Aqui falta un campo llamado cod_provi ......
            $table->enum('senial', ['señal', 'hito'])->nullable();
            $table->enum('clasificacion', ['informativa', 'preventiva'])->nullable();
            $table->string('progresiva', 15);
            $table->string('codigo_imagen',255);
            $table->enum('lado', ['izquierda', 'derecha']);
            $table->enum('soporte', ['poste']);
            $table->enum('material', ['acero', 'concreto']);
            $table->enum('zona',['17', '18', '19'])->nullable();
            $table->decimal('coordenada_x', 10, 2)->nullable();
            $table->decimal('coordenada_y', 10, 2)->nullable();
            $table->decimal('altitud', 8, 4)->nullable();
            $table->timestamps();

            $table->foreign('rutas_id')->references('id')->on('rutas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senializaciones');
    }
}
