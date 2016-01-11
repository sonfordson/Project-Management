<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->string('title');
            $table->longText('description');
            $table->string('project_status')->default('Upcoming');
            $table->string('architecture');
            $table->string('non_functional_requirements');
            $table->string('platforms');
            $table->integer('user_id')->unsigned();
            $table->date('due_date');
            $table->timestamps();

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
        Schema::drop('projects');
    }
}
