<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosRequerimientosInvestigativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos_requerimientos_investigativos', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('diligencias_practicarse')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->boolean('deleted')->default(false);
            $table->unsignedInteger('id_denuncia'); //id foranea id_denuncia
            $table->timestamps();

            $table->foreign('id_denuncia')->references('id')->on('denuncias')->onDelete('cascade'); //Foreign Key Constraints id_denuncia_mp
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos_requerimientos_investigativos');
    }
}
