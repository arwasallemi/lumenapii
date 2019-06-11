<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonRetourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonRetour', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dateRetour');
            $table->date('dateCreation');
            $table->string('chauffeur_externe_nom');
            $table->integer('chauffeur_externe_tel');
            $table->string('etat');
            $table->string('note');
            $table->string('matricule');
            $table->timestamps();
            $table->unsignedBigInteger('employeur_id');
            $table->foreign('employeur_id')->references('id')->on('employeur');

            $table->unsignedBigInteger('bonSortie_id');

            $table->foreign('bonSortie_id')->references('id')->on('bonSortie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonRetour');
    }
}
