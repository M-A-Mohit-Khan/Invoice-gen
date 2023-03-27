<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\participant;

use App\Models\enrolled_course;

class participantController extends Controller
{
    //
    public function index()
    {
        $participants=participant::all();
        //dd($participant);
        return view('participant',[
            'participants' => $participants
        ]);

    }


    public function viewCreateProfile()
    {


        return view('createProfile');
    }


    public function storeParticipant(Request $request)
    {
        $participant= new participant;
        $participant->name=$request->input('name');
        $participant->email=$request->input('email');
        $participant->phone=$request->input('phone');
        $participant->save();
        // dd($request->all);

        return redirect('participant');
        //return $request->input();
    }

    public function showProfile($id)
    {
        //dd($id);
        $profile=participant::find($id);
        $enrolled_courses=enrolled_course::where('participant_id','=',$id)->get();
        //dd($profile->name);
        //dd($enrolled_courses);
        return view('profile')->with('profile',$profile)->with('enrolled_courses',$enrolled_courses);
    }
}
