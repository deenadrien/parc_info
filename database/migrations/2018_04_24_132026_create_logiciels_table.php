<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogicielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logiciels', function (Blueprint $table) {
            $table->string('name');
            $table->boolean('office');
            $table->boolean('salvia');
            $table->boolean('cegid');
            $table->boolean('leon');
            $table->boolean('crypto');
            $table->boolean('ifc');
            $table->boolean('pih');
            $table->boolean('pcb');
            $table->primary('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logiciels');
    }
}
