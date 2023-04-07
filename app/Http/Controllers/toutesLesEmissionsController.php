<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class toutesLesEmissionsController extends Controller
{
    public function affiche()
    {
        return view('toutes-les-emissions');
    }

}
