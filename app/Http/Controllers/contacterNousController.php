<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contacterNousController extends Controller
{
    public function affiche()
    {
        return view('contacterNous');
    }
}
