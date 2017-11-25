<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\menu;
use App\business_detail;

class tourism extends Model
{
    protected $primaryKey = 'id_tourism';
    protected $fillable = [
      'id_menu',
      'id_business_details',
      'id_city',
      'business_status',
      'id_user'
    ];

    public function menu(){
        return $this->belongsTo('App\menu', 'id_menu','id_menu');
    }

    public function user(){
        return $this->belongsTo('App\User','id_user','id_user');
    }

    public function business_details(){
        return $this->hasOne('App\business_detail','id_business_details','id_business_details');
    }
    public function city(){
        return $this->belongsTo('App\city','id_city','id_city');
    }
}
