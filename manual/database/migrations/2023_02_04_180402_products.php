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
        Schema::create('products', function (Blueprint $table){
            $table->bigIncrements('productsId');
            $table->string('model',256);
            $table->text('description');
            $table->string('brand',100);
            $table->float('engine_capacity')->default(0);
            $table->string('transmission', 256)->nullable(true);
            $table->float('price');
            $table->integer('stock');
            $table->text('image');
            $table->integer('likes');
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
