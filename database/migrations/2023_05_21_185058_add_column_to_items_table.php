<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('stocks');
            $table->string('company')->comment('会社名');
            $table->string('phone')->comment('電話番号');
            $table->string('address')->comment('住所');
            $table->string('product')->comment('商品名');
            $table->string('zipcode')->comment('郵便番号');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });
    }
}
