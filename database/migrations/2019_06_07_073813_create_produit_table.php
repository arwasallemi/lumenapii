<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->bigIncrements('id');
          
            $table->string('libelle');
            $table->string('ref');
            $table->string('note');
            $table->float('prix');
            $table->unsignedBigInteger('qrCode_id');
            $table->foreign('qrCode_id')->references('id')->on('qrCode');

            $table->unsignedBigInteger('codeBarre_id');
            $table->foreign('codeBarre_id')->references('id')->on('codeBarre');

            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('image');

            
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
        Schema::dropIfExists('produit');
    }
}
