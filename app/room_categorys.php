<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room_categorys extends Model
{
    protected $primaryKey = 'id_room_category';
    protected $fillable=[
      'category_name'
    ];
    public function homestay_room(){
        return $this->hasMany(homestay_room::class.'id_room_category');
    }
}
