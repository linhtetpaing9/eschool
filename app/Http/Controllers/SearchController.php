<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Section;
use App\Student;
use Illuminate\Http\Request;
use App\Filters\StudentFilters;

class SearchController extends Controller
{
    public function search(Request $request, StudentFilters $studentfilters)
    {
        
        $students = Student::filter($studentfilters)->get();
        
        // dd($students);



        $numOfResults = 0;
        foreach ($students as $result) {
            $numOfResults++;
        }
        
        
        $grade = Grade::pluck("name", "id");
       return view('students.student-lists', compact('students', 'grade'));
    
        
       
    }
    public function main()
    {

    $grade = Grade::pluck("name", "id");
    return view('students.student-lists', compact('grade'));

    }

    
}
