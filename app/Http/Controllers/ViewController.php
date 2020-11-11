<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    // construct
    public function __construct()
    {
        $this->middleware('auth');
    }

    // view last schedule
    public function scheduleList()
    {
        return view('home.listschedule');
    }

    // view today schedule
    public function todaySchedule()
    {
        return view('home.todayschedule');
    }

    // view profile
    public function profileUser()
    {
        return view('home.profile');
    }
}
