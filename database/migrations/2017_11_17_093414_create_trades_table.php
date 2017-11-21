<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->string('symbol');
          $table->string('position');
          $table->string('supplyProximal');
          $table->string('supplyDistal');
          $table->string('demandProximal');
          $table->string('demandDistal');
          $table->string('supplyCurve');
          $table->string('demandCurve');
          $table->string('currentPrice');
          $table->string('exitPrice')->nullable();
          $table->decimal('pl',6,2)->nullable();
          $table->date('tradeDate');
          $table->time('tradeTime');
          $table->text('notes')->nullable();
          $table->string('status')->default('open');
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
        Schema::dropIfExists('trades');
    }
}
