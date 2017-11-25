<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room_picture extends Model
{
    protected $primaryKey ='id_room_pictures';
    protected $fillable = [
      'room_pict_url';
    ];

    public function homestay_room(){
        return $this->belongsTo(homestay_room::class,'id_room');
    }
}
