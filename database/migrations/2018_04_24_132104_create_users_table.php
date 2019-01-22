<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('pec',4);
            $table->primary('pec');
            $table->string('name');
            $table->string('firstname');
            $table->string('service')->unsigned()->index();
            $table->foreign('service')->references('name')->on('services');
            $table->string('bureau')->unsigned()->index();
            $table->foreign('bureau')->references('name')->on('bureaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
