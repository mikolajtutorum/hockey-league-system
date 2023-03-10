<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id('fixture_id');
            $table->enum('fixture_type',['general','division_a', 'division_b', 'conference_a', 'conference_b', 'ahl'])->default('general');
            $table->bigInteger('season_id')->unsigned();
            $table->bigInteger('team_home')->unsigned();
            $table->bigInteger('team_away')->unsigned();
            $table->timestamp('scheduled_time');
            $table->bigInteger('score_home')->unsigned()->nullable();
            $table->bigInteger('score_away')->unsigned()->nullable();
            $table->string('referee')->nullable();
            $table->string('recording_1')->nullable();
            $table->string('recording_2')->nullable();
            $table->string('recording_3')->nullable();
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
        Schema::dropIfExists('fixtures');
    }
}
