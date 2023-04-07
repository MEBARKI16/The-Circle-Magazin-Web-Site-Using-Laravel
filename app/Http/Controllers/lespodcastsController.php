<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lespodcastsController extends Controller
{
    public function affiche()
    {
        return view('lespodcasts');
    }
}
