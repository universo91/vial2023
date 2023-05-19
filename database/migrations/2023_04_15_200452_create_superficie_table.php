<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperficieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superficie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tramos_id');
            $table->enum('estado', ['regular', 'malo', 'bueno'])->nullable();
            $table->enum('tipo_superficie', ['pavimento asfaltico', 'pavimento de concreto', 'afirmado', 'sin afirmar', 'trocha carrozable'])->nullable();
            $table->decimal('ancho', 5, 2)->nullable();
            $table->string('progresiva_inicial')->nullable();
            $table->decimal('coor_inicial_x',10,2)->nullable();
            $table->decimal('coor_inicial_y',10,2)->nullable();
            $table->decimal('altitud_inicial')->nullable();
            $table->string('progresiva_final')->nullable();
            $table->decimal('coor_final_x', 10, 2)->nullable();
            $table->decimal('coor_final_y', 10, 2)->nullable();
            $table->decimal('altitud_final')->nullable();
            $table->string('codigo_imagen', 255)->nullable();
            $table->timestamps();

            $table->foreign('tramos_id')->references('id')->on('tramos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superficie');
    }
}
