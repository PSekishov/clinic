<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Service;
use App\Doctor;

class Service extends Model
{
     public function doctors(){
        return $this->belongsToMany('App\Doctor','doctor_services','service_id','doctor_id');
    }


      public function getImgPathAttribute($value){
    	return $value ? $value : '/photos/NoImage.png';
    }



} // end class Service
