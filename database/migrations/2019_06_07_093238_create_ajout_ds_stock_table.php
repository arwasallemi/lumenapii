<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjoutDsStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajoutdsstock', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('entrepot_id');
            $table->foreign('entrepot_id')->references('id')->on('entrepot');

            $table->unsignedBigInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stock');
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
        Schema::dropIfExists('ajoutDsStock');
    }
}
