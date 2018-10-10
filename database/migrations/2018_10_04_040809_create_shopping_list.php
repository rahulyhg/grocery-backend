<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string("item");
            $table->integer("u_id");
            $table->float("quantity");
            $table->string("unit");
            $table->timestamps();

            $table->foreign('u_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shopping_list');
    }
}
