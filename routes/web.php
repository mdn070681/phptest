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

Route::get('/', 'IndexController@show')->name('index');
Route::match(['get', 'post'], '/registration', 'RegistrationController@show')->name('registration');
Route::post('search', 'SearchController@search')->name('search');
Route::get('/sortByName', 'IndexController@sortByName')->name('indexSortByName');
Route::get('/sortBySurname', 'IndexController@sortBySurname')->name('indexSortBySurname');
Route::get('/sortByNumber', 'IndexController@sortByNumber')->name('indexSortByNumber');
Route::get('/sortByScore', 'IndexController@sortByScore')->name('indexSortByScore');



