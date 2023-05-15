<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function adminBody()
    {
        return view('management.body');
    }

    public function animalManagement()
    {
        return view('management.animal-management');
    }

    public function otherActivities()
    {
        return view('management.other-activities');
    }

    public function bear()
    {
        return view('management.bear');
    }

    public function vulture()
    {
        return view('management.vulture');
    }

    public function snake()
    {
        return view('management.snake');
    }

    public function barasingha()
    {
        return view('management.barasingha');
    }

    public function contact()
    {
        return view('management.contact');
    }
}
