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
Route::match(['get', 'post'], '/formHandler', 'RegistrationController@formHandler')->name('formHandler');
Route::post('search', 'SearchController@search')->name('search');
Route::get('/sortByNameUp', 'IndexController@sortByNameUp')->name('indexSortByNameUp');
Route::get('/sortByNameDown', 'IndexController@sortByNameDown')->name('indexSortByNameDown');
Route::get('/sortBySurnameUp', 'IndexController@sortBySurnameUp')->name('indexSortBySurnameUp');
Route::get('/sortBySurnameDown', 'IndexController@sortBySurnameDown')->name('indexSortBySurnameDown');
Route::get('/sortByNumberUp', 'IndexController@sortByNumberUp')->name('indexSortByNumberUp');
Route::get('/sortByNumberDown', 'IndexController@sortByNumberDown')->name('indexSortByNumberDown');
Route::get('/sortByScoreUp', 'IndexController@sortByScoreUp')->name('indexSortByScoreUp');
Route::get('/sortByScoreDown', 'IndexController@sortByScoreDown')->name('indexSortByScoreDown');





