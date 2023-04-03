<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view("home");
});

Route::get('/films', function() {

    $films = [
    'Forrest Gump',
    "L'attimo fuggente",
    'Il Padrino',
    'The Truman Show',
    'Rocky',
    "Schindler's List",
    "Qualcuno volò sul nido del cuculo",
    ];
    return view("films.list", compact('films'));
});