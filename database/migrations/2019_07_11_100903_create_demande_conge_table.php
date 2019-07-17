<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeCongeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeconge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref');
            $table->string('duree');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('etat');
            $table->timestamps();
            $table->string('approbateur');
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
        Schema::dropIfExists('demandeconge');
    }
}
