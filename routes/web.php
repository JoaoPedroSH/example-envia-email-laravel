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
    return view('welcome');
});

Route::get('envia-email', function(){

    $user = new stdClass();
    $user->name = 'Joao Pedro';
    $user->email = 'joaopedro.shalom27@gmail.com';

    //return new \App\Mail\enviaEmail($user);
    \Illuminate\Support\Facades\Mail::send(new \App\Mail\enviaEmail($user));
});
