<?php

namespace App;


class Grade extends Model
{
   
    public function section()
    {
    	return $this->hasMany('App\Section');
    }

    
}
