<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpAllTablesForApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Category_Id')->unsigned();
            $table->integer('User_Id')->unsigned();
            $table->foreign('User_Id')->references('id')->on('users');
            $table->string('Name');
            $table->string('Description');
        });

        Schema::create('SubCategory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('SubCategory_Id')->unsigned();
            $table->foreign('SubCategory_Id')->references('id')->on('Category');
            $table->integer('User_Id')->unsigned();
            $table->foreign('User_Id')->references('id')->on('users');
            $table->string('Name');
            $table->string('Description');
        });

        Schema::create('Question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Question_Id')->unsigned();
            $table->foreign('Question_Id')->references('id')->on('SubCategory');
            $table->integer('User_Id')->unsigned();
            $table->foreign('User_Id')->references('id')->on('users');
            $table->string('Description');
        });

        Schema::create('Answer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Answer_Id')->unsigned();
            $table->foreign('Answer_Id')->references('id')->on('Question');
            $table->integer('User_Id')->unsigned();
            $table->foreign('User_Id')->references('id')->on('users');
            $table->string('Description', 4000);
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
