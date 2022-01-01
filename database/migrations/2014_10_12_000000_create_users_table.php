<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nombre');
            $table->string('apeliido');
            $table->integer('cedula')->unique();
            $table->bigInteger('departamento_id')->unsigned();
            $table->bigInteger('ciudad_id')->unsigned();
            $table->bigInteger('celular')->nullable();
            $table->string('email')->unique()->nullable();
            $table->foreign('departamento_id')
            ->references('id')->on('departamentos');
            $table->foreign('ciudad_id')
            ->references('id')->on('ciudads');
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
        Schema::dropIfExists('users');
    }
}
