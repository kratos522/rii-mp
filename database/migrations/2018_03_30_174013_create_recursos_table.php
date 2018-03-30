<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->unsignedInteger('id_lugar'); //id foranea id_lugar_mp                        
            $table->unsignedInteger('id_expediente'); //id foranea id_expediente
            $table->unsignedInteger('id_fiscalia'); //id foranea id_fiscalia
            $table->text('encabezado')->nullable();
            $table->longText('documento')->nullable();
            $table->morphs('recursable')->nullable();
            $table->boolean('deleted')->default(false);
            $table->timestamps();

            $table->foreign('id_lugar')->references('id')->on('lugares')->onDelete('cascade'); //Foreign Key Constraints id_lugares_mp
            $table->foreign('id_expediente')->references('id')->on('expedientes')->onDelete('cascade'); //Foreign Key Constraints id_expediente
            $table->foreign('id_fiscalia')->references('id')->on('fiscalias')->onDelete('cascade'); //Foreign Key Constraints id_fiscalia
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos');
    }
}
