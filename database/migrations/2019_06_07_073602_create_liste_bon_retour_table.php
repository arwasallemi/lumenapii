<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeBonRetourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listebonretour', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('qte');
            $table->string('ref');
            $table->unsignedBigInteger('bonRetour_id');
            $table->foreign('bonRetour_id')->references('id')->on('bonRetour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listeBonRetour');
    }
}
