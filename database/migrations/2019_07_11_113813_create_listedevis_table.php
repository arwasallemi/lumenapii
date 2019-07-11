<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListedevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listedevis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('produit');
            $table->integer('qte');
            $table->unsignedBigInteger('devis_id');
            $table->foreign('devis_id')->references('id')->on('devis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listedevis');
    }
}
