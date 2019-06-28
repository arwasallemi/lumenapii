<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {if(!Schema::hasTable('employeur')){
        Schema::create('employeur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sexe');
            $table->integer('cin');
            $table->string('email');
            $table->integer('tel');
            $table->string('adresse');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeur');
    }
}
