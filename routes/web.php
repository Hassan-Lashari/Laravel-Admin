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

Route::get('/','WebsiteController@index')->name('home');
Route::get('/Contact','WebsiteController@contacts')->name('Contact');
Route::get('/Overview','WebsiteController@overview')->name('Overview');
Route::get('/Store','WebsiteController@Store')->name('Store');
Route::get('/upcominggames','WebsiteController@upcominggames')->name('upcominggames');