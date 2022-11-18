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
        Schema::create('photo_contests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('fish_id')->nullable();
            $table->foreign('fish_id')
                ->references('id')
                ->on('fish')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->boolean('is_hidden')->default(0);

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
        Schema::dropIfExists('photo_contests');
    }
};
