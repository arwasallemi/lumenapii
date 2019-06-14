<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeBonSortieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listeBonSortie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref');
            $table->integer('qte');
            $table->unsignedBigInteger('bonSortie_id');
            $table->foreign('bonSortie_id')->references('id')->on('bonSortie');
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
        Schema::dropIfExists('listeBonSortie');
    }
}
