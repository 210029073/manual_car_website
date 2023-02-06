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
        Schema::create('user', function (Blueprint $table){
            $table->bigIncrements('userId');
            $table->string('firstName',256);
            $table->string('lastName',256);
            $table->string('email',256);
            $table->string('address',256);
            $table->string('mobile',13);
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
