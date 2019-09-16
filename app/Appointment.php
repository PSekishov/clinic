<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Appointment;
use App\Doctor;

class Appointment extends Model
{
   
public function apointments(){
	return $this->belongsTo('App\Doctor');
}






} // end class Appointment
