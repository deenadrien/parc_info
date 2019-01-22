<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('os');
            $table->string('serial');
            $table->string('brand');
            $table->string('model');
            $table->string('numcot');
            $table->string('user',4)->unsigned()->index();
            $table->foreign('user')->references('pec')->on('users');
            $table->string('soft')->unsigned()->index();
            $table->foreign('soft')->references('name')->on('logiciels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiels');
    }
}
