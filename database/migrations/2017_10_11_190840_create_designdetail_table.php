<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesigndetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designdetail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color');
            $table->string('scene');
            $table->string('price');
            $table->string('time');
            $table->string('point');
            $table->string('comment');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
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
        Schema::drop('designdetail');
    }
}
