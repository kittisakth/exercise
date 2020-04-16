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
Auth::routes();
Route::get('/', 'AlphabetController@history')->name('history');
route::get('/count/{id}', 'AlphabetController@detail_history')->name('show')->where('id', '[0-9]+');
Route::get('/count', 'AlphabetController@insert')->name('home');
route::post('/count', 'AlphabetController@count');