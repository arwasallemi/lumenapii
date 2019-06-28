<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocieteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('siege');
            $table->string('MF');
            $table->integer('tel1');
            $table->integer('tel2');
            $table->integer('tel3');
            $table->string('RIB');
            $table->text('alt');

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
        Schema::dropIfExists('societe');
    }
}
