<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesDossiersController extends Controller
{
    public function affiche()
    {
        return view('lesdossiers');
    }
}
