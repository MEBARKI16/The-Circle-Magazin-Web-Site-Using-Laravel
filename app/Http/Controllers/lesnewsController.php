<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesnewsController extends Controller
{
    public function affiche()
    {
        return view('lesnews');
    }
}
