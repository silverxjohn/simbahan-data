<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationPageController extends Controller
{
    public function announcements()
    {
        return view('organizations.announcement');
    }

    public function massSchedule()
    {
        return view('organizations.massschedule');
    }

    public function worshipSchedule()
    {
        return view('organizations.worshipschedule');
    }

    public function bibleSchedule()
    {
        return view('organizations.bibleschedule');
    }
}
