<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pricings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function(Blueprint $table){
        $table->bigIncrements('id');
        $table->string('title')->nullable();
        $table->string('content')->nullable();
        $table->string('pricetitle')->nullable();
        $table->string('price')->nullable();
        $table->string('pricetime')->nullable();
        $table->string('madde1')->nullable();
        $table->string('madde2')->nullable();
        $table->string('madde3')->nullable();
        $table->string('madde4')->nullable();
        $table->string('madde5')->nullable();
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
        //
    }
}
