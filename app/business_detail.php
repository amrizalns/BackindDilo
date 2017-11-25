<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class business_detail extends Model
{
    protected $primaryKey = 'id_business_details';
    protected $fillable = [
      'business_name',
      'business_email',
      'business_address',
      'business_lat',
      'business_lang',
      'business_phone',
      'business_open_time',
      'business_close_time',
      'business_price',
      'business_desc',
      'business_profile_pict',
      'condition'
    ];

    public function tourism(){
        return $this->belongsTo(tourism::class, 'id_business_details');
    }
    public function homestay(){
        return $this->belongsTo(homestay::class, 'id_business_details');
    }
    public function pictures(){
        return $this->hasMany(business_picture::class, 'id_business_details');
    }
}
