<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $title = 'I miei primi passi';
    $my_name = 'Anse';

    return view('home', compact('title', 'my_name'));
});

Route::get('/dove-ci-trovi', function () {

    $title = 'Dove ci trovi';
    $location = 'Via del Borgo 46, Mi';

    return view('dove-ci-trovi', compact('title', 'location'));
});

Route::get('/chi-siamo', function () {

    $title = 'Chi siamo';
    $description = 'Siamo una piccola azienda che si occupa di effettuare boost di FPS per del tuo PC per qualsiasi videogame!';

    return view('chi-siamo', compact('title', 'description'));
});

Route::get('/contattaci', function () {

    $title = 'Contattaci';
    $email = 'boostingFPS@gmail.com';

    return view('contattaci', compact('title', 'email'));
});
