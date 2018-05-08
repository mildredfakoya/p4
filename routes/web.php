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
//routes for the antenatal registration
Route::get('/', 'WelcomeController@index');
Route::get('/register', 'RegisterController@index');
Route::post('/saveancreg', 'RegisterController@register');

//routes for the pregnancy registration
Route::get('/pregnancy', 'RegisterController@pregreg');
Route::get('/getform', 'RegisterController@pregregform');
Route::post('/regpreg', 'RegisterController@pregsave');

//routes to get history
Route::get('/history', 'HistoryController@history');

//route for birth registration
Route::get('/birth', 'RegisterController@birth');
Route::get('/getbirthform', 'RegisterController@birthform');
Route::post('/regbirth', 'RegisterController@registerbirth');
Route::get('/allbirths', 'HistoryController@birthhistory');






