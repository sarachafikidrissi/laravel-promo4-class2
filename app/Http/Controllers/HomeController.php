<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        //* Read


        //^ get all data in the Participant Model
        $participants = Participant::all();


        //^ get the first Participant
        $firstParticipant = Participant::all()->first();

        //^ get a specific participant 
        $thirdParticipant = Participant::where('id', '=', 3)->get();


        //^ cout number of particpants whom their age is less than 20 years old
        $lessTahntwenty = Participant::where('age', '<=', 20)->count();


        //^ sending data to home view using compact('data1', 'data2', .....)
        return view('Home.home', compact('participants', 'thirdParticipant'));
    }
}
