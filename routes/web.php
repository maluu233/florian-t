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

Route::get('/', function () {
    if (Auth::check())
    {
        return view('home');
    } else {
        return view('auth.login');
    }
    
});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/add_user', function () {
    return view('auth.register');
});
Route::post('/add_user', 'Auth\RegisterController@register');

Route::get('/object/add', function() {
    return view('object.add');
});
Route::post('/object/add', 'ObjectFlorianController@create');

Route::get('/', 'ObjectFlorianController@show');

Route::get('/object/edit/{id}', 'ObjectFlorianController@edit');
Route::post('/object/update', 'ObjectFlorianController@update');
Route::get('/object/cancel', 'ObjectFlorianController@cancel');
Route::get('/object/remove/{id}', 'ObjectFlorianController@remove');
