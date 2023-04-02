<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesdossiersController extends Controller
{
    public function affiche()
    {
        return view('lesdossiers');
    }
}
