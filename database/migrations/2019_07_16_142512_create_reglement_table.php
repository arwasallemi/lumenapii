<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReglementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('societe');
            $table->date('date');
            $table->string('mode_regl');
            $table->string('cpte_aCrediter');
            $table->integer('num_cheque');
            $table->string('emetteur');
            $table->string('banque');
            $table->string('commentaire');
            $table->string('refFacture');
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
        Schema::dropIfExists('reglement');
    }
}
