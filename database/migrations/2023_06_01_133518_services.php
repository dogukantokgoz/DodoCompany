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
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->string('data_title')->nullable();
            $table->string('data_content')->nullable();
            $table->string('data_icon')->nullable();
            $table->string('call_title')->nullable();
            $table->string('call_content')->nullable();
            $table->string('features_title')->nullable();
            $table->string('features_content')->nullable();
            $table->string('features_icon')->nullable();
            $table->string('foto')->nullable();
            $table->string('counts_title')->nullable();
            $table->string('counts_content')->nullable();
            $table->string('counts1')->nullable();
            $table->string('counts2')->nullable();
            $table->string('counts3')->nullable();
            $table->string('counts4')->nullable();
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
