<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lemissionController extends Controller
{
    public function affiche()
    {
        return view('lemission');
    }

}
