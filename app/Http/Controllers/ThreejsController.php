<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreejsController extends Controller
{
    public function threejs()
    {
        return view('threejs.three');
    }
}
