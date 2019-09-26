<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('ic_no');
            $table->string('phone_no');
            $table->string('email');
            $table->string('address');
            $table->string('poscode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->mediumText('image');
            $table->string('password');
            $table->boolean('status')->default(true);
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
        //
    }
}
