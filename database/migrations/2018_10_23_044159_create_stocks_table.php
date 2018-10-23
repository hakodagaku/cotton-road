<?php

/**
 * 在庫テーブル
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('stock_id')->comment('在庫ID');
            $table->unsignedInteger('stock_number')->comment('在庫数');
            $table->unsignedInteger('safety_stock_number')->comment('安全在庫数');
            $table->unsignedInteger('product_id')->comment('商品ID');
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
