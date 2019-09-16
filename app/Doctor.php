<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Doctor;
use App\Profession;
use App\Service;

class Doctor extends Model
{

	public function services(){
        return $this->belongsToMany('App\Service','doctor_services','doctor_id','service_id');
    }  
    
    public function profession(){
    	return $this->belongsTo('App\Profession');
    } 

    public function getImgPathAttribute($value){
    	return $value ? $value : '/photos/NoImage.png';
    }



} // end class Doctor
