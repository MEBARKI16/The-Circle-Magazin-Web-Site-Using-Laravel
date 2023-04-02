<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\quiSommesNousController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\contacterNousController;
use App\Http\Controllers\lemissionController;
use App\Http\Controllers\lesDossiersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */


route::get('/', [welcomeController::class, 'affiche'])->name('welcome');
route::get('/quiSommesNous', [quiSommesNousController::class, 'affiche'])->name('quiSommesNous');
route::get('/contacterNous', [contacterNousController::class, 'affiche'])->name('contacterNous');
route::get('/lemission', [lemissionController::class, 'affiche'])->name('lemission');
route::get('/lesDossiers', [lesdossiersController::class, 'affiche'])->name('lesdossiers');
route::get('languageConverter/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('languageConverter');
