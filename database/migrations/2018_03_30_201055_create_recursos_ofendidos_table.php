<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosOfendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos_ofendidos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_recurso'); //id foranea id_recurso
            $table->unsignedInteger('id_ofendido'); //id foranea id_ofendido
            $table->boolean('deleted')->default(false);
            $table->timestamps();

            $table->foreign('id_recurso')->references('id')->on('recursos'); //Foreign Key Constraints id_ofendido
            $table->foreign('id_ofendido')->references('id')->on('ofendidos'); //Foreign Key Constraints id_ofendido
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos_ofendidos');
    }
}
