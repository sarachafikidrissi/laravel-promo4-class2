<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Candidat.student_registration');
    }

    public function candidatList() {
        $candidats = Candidat::all();
        // dd($candidats);
        return view('Candidat.student_list', compact('candidats'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "candidat_name" => "required|string",
            "candidat_email" => "required|string|unique:candidats,candidat_email",
            "candidat_age" => "required|integer",
            "candidat_phone" => "required|string",
            "school" => "required|string",
            "gender" => "required|string",
            "english_level" => "required|integer",
            "campus" => "required",
            "terms" => "required"
        ]);

        Candidat::create([
            "candidat_name" => $request->candidat_name,
            "candidat_email" => $request->candidat_email,
            "candidat_age" => $request->candidat_age,
            "candidat_phone" => $request->candidat_phone,
            "school" => $request->school,
            "gender" => $request->gender,
            "english_level" => $request->english_level,
            "campus" => $request->campus,
            "terms" => $request->terms
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidat $candidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidat $candidat)
    {
        //
    }

    public function studentList(){

        $students = Student::all();
        $courses = Course::all();
        return view('Student.school-students', compact('students', 'courses'));
    }

    public function assignCourse(Request $request){
        
        
        $request->validate([
            "courses" => "required"
        ]);

        
       $data = $request->courses;
       foreach ($data as $studentId => $courseId) {
            $student = Student::find($studentId);
           $student->courses()->attach($courseId);
       }

       return back();

    }
}
