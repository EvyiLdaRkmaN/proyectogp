<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('atributos');
            $table->string('descripcion');
            $table->string('tipo');
            $table->string('rango');
            $table->string('excepciones');
            $table->unsignedInteger('idArtefacto');
            $table->foreign('idArtefacto')->references('id')->on('artefactos')->onDelete('cascade');
            $table->unsignedInteger('idProyecto');
            $table->foreign('idProyecto')->references('id')->on('projects')->onDelete('cascade');
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
        Schema::dropIfExists('plantillas');
    }
};
