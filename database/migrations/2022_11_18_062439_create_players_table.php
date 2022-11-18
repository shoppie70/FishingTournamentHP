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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('氏名');
            $table->string('kana')->comment('ふりがな');
            $table->string('postal_code')->comment('郵便番号')->nullable();
            $table->string('address1')->comment('住所1')->nullable();
            $table->string('address2')->comment('住所2')->nullable();
            $table->string('email')->comment('メールアドレス')->nullable();
            $table->string('phone_number')->comment('電話番号')->nullable();
            $table->boolean('is_hidden')->comment('表示設定')->default(0);
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
        Schema::dropIfExists('players');
    }
};
