<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristController extends Controller
{
    public function newInitiatives()
    {
        return view('tourist.new-initiatives');
    }

    public function attraction()
    {
        return view('tourist.attraction');
    }

    public function birdInterpretation()
    {
        return view('tourist.bird-interpretation');
    }

    public function wildCafe()
    {
        return view('tourist.wildcafe');
    }

    public function park()
    {
        return view('tourist.park');
    }

    public function timing()
    {
        return view('tourist.timings');
    }

    public function gateCharges()
    {
        return view('tourist.charges');
    }

    public function displayMap()
    {
        return view('tourist.display-map');
    }

    public function dos()
    {
        return view('tourist.do-donts');
    }

    public function interactiveEvents()
    {
        return view('tourist.interactive-events');
    }

    public function animalAdoption()
    {
        return view('tourist.animal');
    }
}
