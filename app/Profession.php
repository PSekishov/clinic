<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function getImgPathAttribute($value){
    	return $value ? $value : '/photos/NoImage.png';
    }
}
