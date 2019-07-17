<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListFactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listfact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produit');
            $table->integer('qte');
            $table->string('facture_id');
            $table->float('prix_unitaire_HT');
            $table->float('prix_unitaire_TTC');


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
        Schema::dropIfExists('listFact');
    }
}
