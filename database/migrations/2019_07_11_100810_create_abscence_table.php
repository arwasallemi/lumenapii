<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbscenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abscence', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('nbrJour');
            $table->date('date_abscence');
            $table->date('date_debut_abscence');
            $table->date('date_fin_abscence');
            $table->string('motif_abscence');
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
        Schema::dropIfExists('abscence');
    }
}
