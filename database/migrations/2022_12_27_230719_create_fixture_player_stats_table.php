<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixturePlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixture_player_stats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fixture_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('player_id')->unsigned();
            $table->bigInteger('goals')->unsigned();
            $table->bigInteger('assists')->unsigned();
            $table->bigInteger('cp')->unsigned();
            $table->bigInteger('seconds_played')->unsigned(); //stored as seconds value
            $table->bigInteger('yellowcards')->unsigned();
            $table->bigInteger('redcards')->unsigned();
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
        Schema::dropIfExists('fixture_player_stats');
    }
}
