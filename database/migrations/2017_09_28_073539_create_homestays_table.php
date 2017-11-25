<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomestaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestays', function (Blueprint $table) {
            $table->increments('id_homestay');
            $table->integer('id_menu')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('id_city')->unsigned();
            $table->integer('business_status')->default(2);
            $table->integer('id_business_details')->unsigned();

            $table->timestamps();

            $table->foreign('id_menu')->references('id_menu')->on('menus');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_city')->references('id_city')->on('cities');
            $table->foreign('id_business_details')->references('id_business_details')->on('business_details')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homestays');
    }
}
