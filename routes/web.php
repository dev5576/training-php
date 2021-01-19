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

/*Route::get('/', function () {
    return view('welcome');
});*/


//Route::get('/','Web\ChecklistController@index');

//Route::get('/','Web\ChecklistController@index');

Route::get('/checklists','Web\ChecklistController@index');

Route::get('/checklists/create', 'Web\ChecklistController@create');

Route::post('/checklists', 'Web\ChecklistController@store');

Route::get('/checklists/{id}', 'Web\ChecklistController@show')->where(['id' => '[0-9]+']);

Route::get('/checklists/{id}/edit', 'Web\ChecklistController@edit')->where(['id' => '[0-9]+']);

Route::put('/checklists/{id}/update', 'Web\ChecklistController@update')->where(['id' => '[0-9]+']);



Route::delete('/checklists/{id}', 'Web\ChecklistController@destroy')->where(['id' => '[0-9]+']);
