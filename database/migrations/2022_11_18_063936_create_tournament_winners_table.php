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
        Schema::create('tournament_winners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('tackle_description');

            $table->unsignedBigInteger('tournament_id')->nullable();
            $table->foreign('tournament_id')
                ->references('id')
                ->on('tournaments');

            $table->integer('place_number')->nullable();

            $table->string('image')->nullable();
            $table->string('fish_image')->nullable();



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
        Schema::dropIfExists('tournament_winners');
    }
};
