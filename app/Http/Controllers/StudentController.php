<?php

namespace App\Http\Controllers;

use App\Student;
use App\Grade;
use App\Section;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()){
        $students = Student::all();
        return view('students.index', compact('students'));
    }else{
        echo 'You have to login first';
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grade = Grade::pluck("name", "id");
        
        return view('students.create', compact('grade'));
    }

    // public function jsonData()
    // {
    //      $grade = Grade::pluck('name', 'id');

    //      return response()->json($grade);
    // }

    public function getSection($id)
    {
        $section = Section::where('grade_id', $id)->pluck('name', 'id');
        return json_encode($section);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required'
        ]);
        



        Student::create([
            'name' => $request->name,
            'student_code' => $request->name . uniqid(),
            'address' => $request->address,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'grade_id' => $request->grade_id,
            'section_id' => $request->section_id,
  

        ]);

        return Redirect::route('student.index');
    }

    public function datatable(Request $request)
    {

        if($request->ajax()){

            $model = Student::query();
            
            return Datatables::of($model)
            
            ->addColumn("edit", function($model){
                $data = "<a class='btn btn-primary' href=" . route("student.edit", $model->student_code) . ">Edit</a>";
                return $data;
            })
            ->addColumn("delete", function($model){
                $data = '<form action="' . route('student.destroy', $model->student_code). '" method="post">'
                . csrf_field() .
                method_field("delete") .
                '<button class="btn btn-danger">Delete</button>
                </form>';
                return $data;
            })
            ->rawColumns(['edit', 'delete'])
            ->toJson();
        }
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        
        $grade = Grade::pluck('name', 'id');

        $old_grade = Grade::where('id', $student->grade_id)->get();
        // dd($old_grade);
        $old_section = Section::where('id', $student->section_id)->get();
       
        return view('students.edit', compact('student','grade', 'old_section', 'old_grade'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required'
        ]);



        $student->update([
            'name' => $request->name,
            'student_code' => $request->name . uniqid(),
            'address' => $request->address,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'grade_id' => $request->grade_id,
            'section_id' => $request->section_id,


        ]);

        return Redirect::route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
         $student = Student::where('id', '=' , $student->id)->delete();
        return redirect()->route('student.index');
    }

   
}
