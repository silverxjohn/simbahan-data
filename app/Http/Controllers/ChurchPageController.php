<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChurchPageController extends Controller
{
    public function churches()
    {
        return view('churches.general');
    }

    public function announcements()
    {
        return view('churches.announcement');
    }

    public function massSchedule()
    {
        return view('churches.massschedule');
    }

    public function confessionSchedule()
    {
        return view('churches.confessionschedule');
    }
}
