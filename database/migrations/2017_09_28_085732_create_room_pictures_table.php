<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_pictures', function (Blueprint $table) {
            $table->increments('id_room_pictures');
            $table->integer('id_room')->unsigned();
            $table->string('room_pict_url');
            $table->timestamps();

            $table->foreign('id_room')->references('id_homestay_room')->on('homestay_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_pictures');
    }
}
