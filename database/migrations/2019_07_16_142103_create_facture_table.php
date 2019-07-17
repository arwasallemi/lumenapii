<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref');
            $table->string('societe');
            $table->string('type');
            $table->string('remise');
            $table->date('date');
            $table->string('condition_regl');
            $table->date('date_limite_reglement');
            $table->string('mode_regl');
            $table->string('cpte_bancaire');
            $table->string('montant_Ht');
            $table->string('montant_tva');
            $table->string('montant_ttc');
            $table->string('etat');
            $table->string('projet');
            $table->string('incoterms');
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
        Schema::dropIfExists('facture');
    }
}
