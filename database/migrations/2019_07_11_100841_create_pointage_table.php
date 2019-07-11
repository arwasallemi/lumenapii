<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_pointage');
            $table->time('heure_debut_matin');
            $table->time('heure_fin_matin');
            $table->time('heure_debut_soir');
            $table->time('heure_fin_soir');
            $table->timestamps();
            $table->unsignedBigInteger('employeur_id');
            $table->foreign('employeur_id')->references('id')->on('employeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointage');
    }
}
