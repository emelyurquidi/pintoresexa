<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pintores extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function davinci(){
        return view('davinci');
    }

    public function frida(){
        return view('frida');
    }

    public function pablo(){
        return view('pablo');
    }

    public function vincent(){
        return view('vincent');
    }

    public function miguel(){
        return view('miguel');
    }
}
