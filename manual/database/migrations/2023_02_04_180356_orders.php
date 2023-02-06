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
        //
        Schema::create('orders', function (Blueprint $table){
            $table->bigIncrements('ordersId');
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('userId')->on('user')->onDelete('cascade');
            $table->unsignedBigInteger('productsId');
            $table->foreign('productsId')->references('productsId')->on('products')->onDelete('cascade');
            $table->float('price');
            $table->datetime('deliveryDate');
            $table->datetime('orderDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
