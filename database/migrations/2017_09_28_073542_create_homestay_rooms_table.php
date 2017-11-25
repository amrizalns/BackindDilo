<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomestayRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestay_rooms', function (Blueprint $table) {
            $table->increments('id_homestay_room');
            $table->integer('id_room_category')->unsigned();
            $table->integer('id_homestay')->unsigned();
            $table->string('room_desc');
            $table->string('room_price');
            $table->string('room_total');
            $table->string('room_capacity');

            $table->timestamps();

            $table->foreign('id_homestay')->references('id_homestay')->on('homestays');
            $table->foreign('id_room_category')->references('id_room_category')->on('room_categorys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homestay_rooms');
    }
}
