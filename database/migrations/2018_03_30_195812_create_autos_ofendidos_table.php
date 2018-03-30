<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosOfendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos_ofendidos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_auto'); //id foranea id_auto
            $table->unsignedInteger('id_ofendido'); //id foranea id_ofendido
            $table->boolean('deleted')->default(false);
            $table->timestamps();

            $table->foreign('id_auto')->references('id')->on('autos')->onDelete('cascade'); //Foreign Key Constraints id_ofendido
            $table->foreign('id_ofendido')->references('id')->on('ofendidos')->onDelete('cascade'); //Foreign Key Constraints id_ofendido
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos_ofendidos');
    }
}
