<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('symbol');
            $table->string('increment');
            $table->string('value');
            $table->string('format');
            $table->string('months');
            $table->timestamps();
        });
    }
// Maximum Account Risk (in dollars) / (Trade Risk (in ticks) x Tick Value) = Position Size


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('futures');
    }
}
