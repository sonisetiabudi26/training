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

route::get('/minimal','adv_gal_controller@minimal')->name('minimal');

route::get('/tattoo','adv_gal_controller@tattoo')->name('tattoo');

route::get('/develope','adv_gal_controller@develope')->name('develope');

route::get('/network','adv_gal_controller@network')->name('network');

route::get('/start','adv_gal_controller@start')->name('start');

route::get('/stay','adv_gal_controller@stay')->name('stay');



