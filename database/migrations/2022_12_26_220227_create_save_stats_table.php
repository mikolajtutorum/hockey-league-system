<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_stats', function (Blueprint $table) {
            $table->id();
            $table->text('text')->nullable();
            $table->string('guid')->nullable();
            $table->string('time')->nullable();
            $table->string('redname')->nullable();
            $table->string('bluename')->nullable();
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
        Schema::dropIfExists('save_stats');
    }
}
