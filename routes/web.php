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
Auth::routes();
Route::get('/logout', function () {
    Auth::logout();

    return redirect('/login');
});

Route::get('/insert','HomeController@insert');
Route::post('/insert/store','HomeController@store');
Route::get('/dele/{id}','HomeController@delete');
Route::get('/up/{id}','HomeController@edit');
Route::get('/log','AmitController@abc');
Route::get('/post','PostController@index');
Route::post('/post/add','PostController@add');
Route::get('/del/{id}','PostController@delete');
Route::get('/update/{id}','PostController@edit');
Route::get('/amit','AmitController@index');
Route::post('/amit/store','AmitController@store');
Route::get('/edit/{id}','AmitController@edit');
Route::get('/delete/{id}','AmitController@delete');
Route::get('/home', 'HomeController@index')->name('home');
