<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosImputadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos_imputados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_recurso'); //id foranea id_auto
            $table->unsignedInteger('id_imputado'); //id foranea id_imputado
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('recursos_imputados');
    }
}
