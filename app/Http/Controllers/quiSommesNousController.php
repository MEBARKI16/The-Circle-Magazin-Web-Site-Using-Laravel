<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quiSommesNousController extends Controller
{
    public function affiche()
    {
        return view('quiSommesNous');
    }
}
