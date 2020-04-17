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

route::get('/profile', 'ProfileController@show')->name('profile');
route::post('/profile', 'ProfileController@update')->name('update_profile');
route::get('/profile/{id}', 'ProfileController@detail')->name('profile_detail');
route::get('users', 'UsersController@all')->name('users');
Route::get('/history', 'AlphabetController@history')->name('history');
Route::get('/', function () {
  return redirect()->route('history');
});
route::get('/count/{id}', 'AlphabetController@detail_history')->name('show')->where('id', '[0-9]+');
Route::get('/count', 'AlphabetController@insert')->name('home');
route::post('/count', 'AlphabetController@count');