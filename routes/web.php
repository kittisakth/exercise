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

Route::get('/', 'AlphabetController@index')->name('home');
Route::post('/', 'AlphabetController@count');
Route::get('/history', 'AlphabetController@history')->name('history');
route::view('/test', 'child');
route::get('/{id}', 'AlphabetController@detail_history')->name('show');

