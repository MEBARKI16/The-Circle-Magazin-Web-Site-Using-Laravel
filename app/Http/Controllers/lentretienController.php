<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lentretienController extends Controller
{
    public function affiche()
    {
        return view('lentretien');
    }

}
