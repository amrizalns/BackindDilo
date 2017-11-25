<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
  protected $primaryKey='id_city';
  protected $fillable=[
    'city'
  ];

  public function tourism(){
      return $this->hasMany(tourism::class, 'id_city');
  }
  public function homestay(){
      return $this->hasMany(homestay::class, 'id_city');
  }
}
