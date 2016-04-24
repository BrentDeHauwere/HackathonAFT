<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('address', 80);
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6);
            $table->string('type', 30);
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('picture')->nullable();
            $table->integer('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('markers');
    }
}
