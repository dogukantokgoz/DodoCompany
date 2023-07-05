<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Faqs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->string('question1');
            $table->longText('answer1');
            $table->string('question2');
            $table->longText('answer2');
            $table->string('question3');
            $table->longText('answer3');
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
