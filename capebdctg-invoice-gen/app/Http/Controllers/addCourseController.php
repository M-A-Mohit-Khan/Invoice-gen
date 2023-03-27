<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\enrolled_course;



class addCourseController extends Controller
{
    //
    public function index($id)
    {
        return view('addCourse')->with('id',$id);
    }

    public function storeCourse(Request $request,$id)
    {
        $enrolled_course=new enrolled_course;
        $enrolled_course->name=$request->input('courses');
        $enrolled_course->participant_id=$id;
        $enrolled_course->save();
        //dd($request->all());

        return redirect('participant');
        //return $request->input();
    }
    
}
