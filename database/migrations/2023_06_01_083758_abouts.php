<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Abouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table){
           $table->bigIncrements('id');
           $table->string('title')->nullable();
           $table->string('content')->nullable();
           $table->string('content1')->nullable();
           $table->string('content2')->nullable();
           $table->string('content3')->nullable();
           $table->string('step')->nullable();
           $table->string('step1')->nullable();
           $table->string('step2')->nullable();
           $table->string('step3')->nullable();
           $table->string('step4')->nullable();
           $table->string('step5')->nullable();
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
