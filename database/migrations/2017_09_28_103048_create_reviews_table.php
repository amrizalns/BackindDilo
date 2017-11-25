<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id_review');
            $table->integer('id_menu')->unsigned();
            $table->integer('id_object')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('review');
            $table->string('response');
            $table->integer('rating');
            $table->timestamps();

            $table->foreign('id_menu')->references('id_menu')->on('menus');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
