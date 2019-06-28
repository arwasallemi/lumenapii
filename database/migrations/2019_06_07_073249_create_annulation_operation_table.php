<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnulationOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    // {
    //     Schema::create('annulationOperation', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->unsignedInteger('operation_id');
    //         $table->timestamps();
    //         $table->foreign('operation_id')
    //         ->references('id')
    //         ->on('operation')
          
    //     });
    // }
    {
        Schema::create('annulationOperation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dateAnnulation');
            $table->timestamps();
            $table->unsignedBigInteger('operation_id');
            $table->foreign('operation_id')->references('id')->on('operation');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annulationOperation');
    }
}
