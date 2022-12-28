<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_agents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('player_id')->unsigned();
            $table->enum('primary_position',['any','goalkeeper','defender','midfielder','striker'])->default('any');
            $table->enum('secondary_position',['any','goalkeeper','defender','midfielder','striker'])->default('any');
            $table->timestamp('searching_since');
            $table->string('more_info');
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
        Schema::dropIfExists('free_agents');
    }
}
