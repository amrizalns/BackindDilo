<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homestay_room extends Model
{
    protected $primaryKey = 'id_homestay_room';
    protected $fillable = [
      'room_desc',
      'room_price',
      'room_total',
      'room_capacity'
    ];
    public function homestay(){
        return $this->belongsTo(homestay::class,'id_homestay');
    }
    public function room_category(){
        return $this->belongsTo(room_categorys::class,'id_room_category');
    }
    public function room_picture(){
        return $this->hasMany(room_picture::class,'id_room');
    }
}
