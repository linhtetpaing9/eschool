<?php

namespace App;


class Student extends Model
{
	
    
    

    public function getRouteKeyName()
    {
    	return 'student_code';
    }

    public function scopeFilter($query, $filters)
    {
        // dd($query);
        $filters->apply($query);
    }
}
