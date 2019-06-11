<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('ref');
            $table->integer('qte');
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
        Schema::dropIfExists('perte');
    }
}
