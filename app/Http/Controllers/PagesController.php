<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function piano()
    {
        return view('piano.piano');
    }

    public function clock()
    {
        return view('clock.clock');
    }
    
    public function thirtydaysJSchallange()
    {
        return view('30daysjavascriptchallange');
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
    
    
}
