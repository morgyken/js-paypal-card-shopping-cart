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

Route::get('/', ['uses'=>'PostItemController@getIndex', 'as'=>'get-index']);

Route::get('/get-item', function () {
    return view('get-item');

});
 
Route::post('/post-total', ['uses'=>'PostItemController@getTotal', 'as'=>'post-total']);
Route::post('/post-item', ['uses'=>'PostItemController@PostItem', 'as'=>'post-item']);

