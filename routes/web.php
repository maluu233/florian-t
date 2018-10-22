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

Route::get('/object/add', function() {
    return view('object.add');
});
Route::post('/object/add', 'ObjectFlorianController@create');
Route::get('/object/add', 'ObjectFlorianController@list');

Route::get('/', 'ObjectFlorianController@show');
function showObjectById($id) {
    $posts = User::find($id)->posts()->get();

    return view('post.list', [
      'posts' => $posts
    ]);
  }

Route::get('/object/edit/{id}', 'ObjectFlorianController@edit');
Route::get('/object/view/{id}', 'ObjectFlorianController@view');
Route::post('/object/update', 'ObjectFlorianController@update');
Route::get('/object/cancel', 'ObjectFlorianController@cancel');
Route::get('/object/remove/{id}', 'ObjectFlorianController@remove');
