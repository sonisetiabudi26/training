<?php

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

Route::get('/', 'home_controller@index')->name('home');

Route::get('/gallery','gallery_controller@index')->name('gallery');

route::get('/robot','adv_gal_controller@robot')->name('robot');

route::get('/rock','adv_gal_controller@rock')->name('rock');


