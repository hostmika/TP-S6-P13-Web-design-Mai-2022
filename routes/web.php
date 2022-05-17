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

Route::get('/',"App\Http\Controllers\ContenuController@allContenu")->name('contenu');
Route::get('/login',"App\Http\Controllers\UserController@login")->name('login');
Route::post('/connexion',"App\Http\Controllers\UserController@connexion")->name('connexion');
Route::get('/deconnexion',"App\Http\Controllers\UserController@deconnexion")->name('deconnexion');


