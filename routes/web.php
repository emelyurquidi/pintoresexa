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

Route::get('/inicio', 'Pintores@inicio');

Route::get('/davinci', 'Pintores@davinci');

Route::get('/frida', 'Pintores@frida');

Route::get('/pablo', 'Pintores@pablo');

Route::get('/vincent', 'Pintores@vincent');

Route::get('/miguel', 'Pintores@miguel');



