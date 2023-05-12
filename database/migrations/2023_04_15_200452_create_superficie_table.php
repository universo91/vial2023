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
            $table->enum('estado', ['regular', 'malo', 'bueno']);
            $table->enum('tipo_superficie', ['pavimento asfaltico', 'pavimento de concreto', 'afirmado', 'sin afirmar', 'trocha carrozable']);
            $table->decimal('ancho', 5, 2);
            $table->string('progresiva_inicial');
            $table->decimal('coor_inicial_x',10,2, 10, 2);
            $table->decimal('coor_inicial_y',10,2, 10, 2);
            $table->decimal('altitud_inicial');
            $table->string('progresiva_final');
            $table->decimal('coor_final_x', 10, 2);
            $table->decimal('coor_final_y', 10, 2);
            $table->decimal('altitud_final');
            $table->string('imagen', 255)->nullable();
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
