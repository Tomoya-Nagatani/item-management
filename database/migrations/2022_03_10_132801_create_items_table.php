<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('ユーザーID');
            $table->string('status', 100)->default('active');
            $table->string('name', 100)->comment('名前');
            $table->string('zipcode', 10)->comment('郵便番号');
            $table->string('address')->comment('住所');
            $table->string('content')->comment('内容');
            $table->string('memo')->comment('メモ')->nullable();
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
        Schema::dropIfExists('items');
    }
}
