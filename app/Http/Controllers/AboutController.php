<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function introduction()
    {
        return view('about.introduction');
    }

    public function history()
    {
        return view('about.history');
    }

    public function timeline()
    {
        return view('about.timeline');
    }

    public function visionMission()
    {
        return view('about.vision-mission');
    }

    public function significance()
    {
        return view('about.significance');
    }

    public function forest()
    {
        return view('about.forest');
    }

    public function biodiversity()
    {
        return view('about.biodiversity');
    }
}
