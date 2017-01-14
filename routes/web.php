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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('index2', 'AccountantController@index');
Route::post('/insert', 'AccountantController@insert');
Route::put('/update/{id}', 'AccountantController@update');
Route::delete('/delete/{id}', 'AccountantController@delete');


