<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('qte');
            $table->date('dateMouvement');
            $table->string('motifMouvement');
            $table->unsignedBigInteger('entrepotDestin_id');
            $table->foreign('entrepotDestin_id')->references('id')->on('entrepotDestin');

            $table->unsignedBigInteger('entrepotOrigin_id');
            $table->foreign('entrepotOrigin_id')->references('id')->on('entrepotOrigin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation');
    }
}
