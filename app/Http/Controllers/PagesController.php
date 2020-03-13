<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function thirtydaysJSchallange()
    {
        return view('30daysjavascriptchallange');
    }

    public function piano()
    {
        return view('piano.piano');
    }

    public function clock()
    {
        return view('clock.clock');
    }
    

    public function variables()
    {
        return view('variables.variables');
    }

    public function JSArrays()
    {
        return view('JSArrays.JSArrays');
    }

    function imageGalery()
    {
        return view('imageGalery.imageGalery');
    }

    public function typeAheadFeature()
    {
        return view('typeAheadFeature.typeAheadFeature');
    }
    
    public function JSArrays2()
    {
        return view('JSArrays2.JSArrays2');
    }

    public function canvas()
    {
        return view('canvas.canvas');
    }

    public function tricks()
    {
        return view('tricks.tricks');
    }
    
    public function checkBoxes()
    {
        return view('checkBoxes.checkBoxes');
    }

    public function videoPlayer()
    {
        return view('videoPlayer.videoPlayer');
    }

    public function konamiCode()
    {
        return view('konamiCode.konamiCode');
    }

    public function slider()
    {
        return view('slider.slider');
    }

    public function objectandarrays()
    {
        return view('objectandarrays.objectandarrays');
    }

    
    
    
}
