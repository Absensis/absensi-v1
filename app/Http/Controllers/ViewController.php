<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
