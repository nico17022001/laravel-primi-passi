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

Route::get('/', function () {
    $data = [
        'name'    => 'Nicolas',
        'surname' => 'Di Mauro'
    ];
    return view('home',$data);
})->name('home');

Route::get('/iscritti', function () {

    $studenti = [
        'studenti' => [
            [
                'name'    => 'Nicolas',
                'surname' => 'Di Mauro'
            ],
            [
                'name'    => 'Franco',
                'surname' => 'Gialli'
            ],
            [
                'name'    => 'Nicola',
                'surname' => 'Freddi'
            ],
            [
                'name'    => 'Giuseppe',
                'surname' => 'Orlando'
            ],
            [
                'name'    => 'Mattia',
                'surname' => 'Leopardi'
            ],
        ]
    ];
    //dd($studenti);
    return view('iscritti', $studenti);
})->name('iscritti');


