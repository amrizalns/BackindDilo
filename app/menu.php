<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $primaryKey = 'id_menu';
    protected $fillable=[
      'status'
    ];

    public function tourism(){
        return $this->hasMany(tourism::class, 'id_menu');
    }
    public function homestay(){
        return $this->hasMany(homestay::class, 'id_menu');
    }
    public function review(){
        return $this->hasMany(review::class, 'id_menu');
    }
    public function business_picture(){
        return $this->hasMany(business_picture::class, 'id_menu');
    }
}
