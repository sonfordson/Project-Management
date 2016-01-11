<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('clients', function (Blueprint $table) {
        $table->increments('id')->unsigned();
        $table->integer('project_id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->string('name');
        $table->timestamps();

        $table->foreign('project_id')
            ->references('id')->on('projects')
            ->onUpdate('cascade')
            ->onDelete('cascade');

        $table->foreign('user_id')
            ->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
