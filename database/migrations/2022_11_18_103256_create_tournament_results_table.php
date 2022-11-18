<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournament_id')->nullable();
            $table->foreign('tournament_id')
                ->references('id')
                ->on('tournaments')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->unsignedBigInteger('first_rank_player_id')->nullable();
            $table->foreign('first_rank_player_id')
                ->references('id')
                ->on('tournament_winners');

            $table->unsignedBigInteger('second_rank_player_id')->nullable();
            $table->foreign('second_rank_player_id')
                ->references('id')
                ->on('tournament_winners');

            $table->unsignedBigInteger('third_rank_player_id')->nullable();
            $table->foreign('third_rank_player_id')
                ->references('id')
                ->on('tournament_winners');

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
        Schema::dropIfExists('tournament_results');
    }
};
