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
            $table->date('dateEvenement');
            $table->string('adresse_livraison');
            $table->string('transporteur_nom');
            $table->integer('transporteur_tel');
            $table->string('etat');
            $table->string('matricule');
            $table->string('evenement');
            $table->string('nom_client');
          
          

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
