<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureMilestoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_milestone', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('feature_id')->unsigned();
            $table->integer('milestone_id')->unsigned();
            $table->timestamps();

            $table->foreign('feature_id')
                ->references('id')->on('features')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('milestone_id')
                ->references('id')->on('milestones')
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
        Schema::drop('feature_milestone');
    }
}