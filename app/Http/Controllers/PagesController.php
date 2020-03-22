<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function thirtydaysJSchallange()
    {
        return view('30daysjavascriptchallange');
    }

    public function thirtyDaysOfVue()
    {
        return view('thirtyDaysOfVue');
    }

    public function piano()
    {
        return view('Javascript30.piano.piano');
    }

    public function clock()
    {
        return view('Javascript30.clock.clock');
    }
    

    public function variables()
    {
        return view('Javascript30.variables.variables');
    }

    public function JSArrays()
    {
        return view('JSArrays.JSArrays');
    }

    function imageGalery()
    {
        return view('Javascript30.imageGalery.imageGalery');
    }

    public function typeAheadFeature()
    {
        return view('Javascript30.typeAheadFeature.typeAheadFeature');
    }
    
    public function JSArrays2()
    {
        return view('Javascript30.JSArrays2.JSArrays2');
    }

    public function canvas()
    {
        return view('Javascript30.canvas.canvas');
    }

    public function tricks()
    {
        return view('Javascript30.tricks.tricks');
    }
    
    public function checkBoxes()
    {
        return view('Javascript30.checkBoxes.checkBoxes');
    }

    public function videoPlayer()
    {
        return view('Javascript30.videoPlayer.videoPlayer');
    }

    public function konamiCode()
    {
        return view('Javascript30.konamiCode.konamiCode');
    }

    public function slider()
    {
        return view('Javascript30.slider.slider');
    }

    public function objectandarrays()
    {
        return view('Javascript30.objectandarrays.objectandarrays');
    }


    public function localstorage()
    {
        return view('Javascript30.localstorage.localstorage');
    }

    public function textShadowEffect()
    {
        return view('Javascript30.textShadowEffect.textShadowEffect');
    }
    

    public function sorting()
    {
        return view('Javascript30.sorting.sorting');
    }
    
    public function sumOfAttributes()
    {
        return view('Javascript30.sumOfAttributes.sumOfAttributes');
    }

    public function webcam()
    {
        return view('Javascript30.webcam.webcam');
    }


    /*///////////// Vue.js routing ////////////*/
    public function component1()
    {
        return view('Vue30.component1');
    }
    
    
}
