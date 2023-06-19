<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('content');
            $table->string('locationtitle');
            $table->string('locationcontent');
            $table->string('emailtitle');
            $table->string('emailcontent');
            $table->string('calltitle');
            $table->string('callcontent');
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
