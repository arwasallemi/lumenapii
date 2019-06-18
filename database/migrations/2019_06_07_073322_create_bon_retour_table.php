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
            $table->string('transporteur_nom');
            $table->integer('transporteur_tel');
            $table->string('etat');
            $table->string('note');
            $table->string('matricule');
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
        Schema::dropIfExists('bonRetour');
    }
}
