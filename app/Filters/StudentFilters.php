<?php

namespace App\Filters;

class StudentFilters extends Filters
{
    protected $filters = [
        'grade_id', 'section_id'
    ];


    public function grade_id($grade_id)
    {
        return $this->builder->where('grade_id', '=', $grade_id);
        // dd($this->builder);
    }

     public function section_id($section_id)
    {
        // dd($section_id);
        return $this->builder->where('section_id', '=', $section_id);
        // dd($this->builder);
    }


    
}