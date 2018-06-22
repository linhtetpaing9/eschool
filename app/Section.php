<?php

namespace App;


class Section extends Model
{
    //

    public function grades()
    {
    	return $this->belongsTo('App\Grade');
    }

    
}
