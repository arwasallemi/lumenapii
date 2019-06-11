<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonSortieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonSortie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('dateSortie');
            $table->date('dateRetour');
            $table->date('dateCreation');
            $table->date('dateEvenement');
            $table->date('dateDebutEvenement');
            $table->date('dateFinEvenement');
            $table->string('rue');
            $table->string('chauffeur_externe_nom');
            $table->integer('chauffeur_externe_tel');
            $table->integer('codePostal');
            $table->string('etat');
            $table->string('evenement');
            $table->boolean('retour');
            $table->string('matricule');
         

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('client');

            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('region');

         
            $table->unsignedBigInteger('entrepot_id');
               $table->foreign('entrepot_id')->references('id')->on('entrepot');


            $table->foreign('employeur_id')->references('id')->on('employeur');
            $table->unsignedBigInteger('employeur_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonSortie');
    }
}
