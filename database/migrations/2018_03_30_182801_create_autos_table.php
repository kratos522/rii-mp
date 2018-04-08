<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->unsignedInteger('id_lugar'); //id foranea id_lugar_mp
            $table->unsignedInteger('id_expediente'); //id foranea id_expediente
            $table->unsignedInteger('id_fiscalia'); //id foranea id_fiscalia
            $table->text('encabezado')->nullable();
            $table->longText('documento')->nullable();            
            $table->morphs('autoable');
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
        Schema::dropIfExists('autos');
    }
}
