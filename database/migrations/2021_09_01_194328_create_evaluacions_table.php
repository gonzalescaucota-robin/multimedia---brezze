<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->date('fecha');
            $table->string('nota_evaluacion',50);

            $table->unsignedBigInteger('id_tema');
            $table->unsignedBigInteger('id_profesor');
            $table->unsignedBigInteger('id_estudiante');

            $table->foreign('id_tema')->references('id')->on('temas');
            $table->foreign('id_profesor')->references('id')->on('usuarios');
            $table->foreign('id_estudiante')->references('id')->on('usuarios');
           

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
        Schema::dropIfExists('evaluacions');
    }
}
