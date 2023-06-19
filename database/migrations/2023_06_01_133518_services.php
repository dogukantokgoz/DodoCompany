<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function(Blueprint $table){
        $table->bigIncrements('id');
        $table->string('title')->nullable();
        $table->string('content')->nullable();
        $table->string('datatitle')->nullable();
        $table->string('datacontent')->nullable();
        $table->string('dataicon')->nullable();
        $table->string('calltitle')->nullable();
        $table->string('callcontent')->nullable();
        $table->string('featurestitle')->nullable();
        $table->string('featurescontent')->nullable();
        $table->string('featuresicon')->nullable();
        $table->string('foto')->nullable();
        $table->string('countstitle')->nullable();
        $table->string('countscontent')->nullable();
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
