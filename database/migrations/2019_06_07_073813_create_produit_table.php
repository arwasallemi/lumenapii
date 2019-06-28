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
            $table->string('categorie');
            $table->string('note');
            $table->float('prix_location');
            $table->float('prix_location_minimale');
            $table->text('qrCode');
       

            $table->text('codeBarre');
     

            $table->text('image');
        

            
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
