<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Contact;

class Contact extends Model
{
     public function getImgPathAttribute($value){
    	return $value ? $value : '/photos/NoImage.png';
    }



} // end class Contact
