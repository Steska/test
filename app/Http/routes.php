<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
 * 
 */
Route::get('/', 'BlogController@all');
Route::get('/blog/{id}', 'BlogController@getBlog');
Route::get('/login', function (){
             return view('login');   
        });
Route::post('/login', 'UserController@login')->name('login');


Route::auth();
Route::group(['middleware' => 'auth'], function () {
Route::get('/add', function (){
             return view('add');   
        });
Route::post('/add', 'BlogController@add')->name('add');
Route::get('/edit/{id}', 'BlogController@getForUpdate');
Route::put('/update', 'BlogController@update')->name('update');
        
});