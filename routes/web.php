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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');
Route::get('/book','HomeController@index');
Route::get('/book/{BookID}','BookController@show');

Route::resource('home','HomeController');
Route::resource('book','HomeController');

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/trade', function () {
    return view('trade');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/contact','UserController@showContact');

Route::get('/category', function () {
   return 'Category';
});

Route::group(['prefix' => 'category'], function(){
    Route::get('tinhcam', function(){
        echo 'Tình cảm';
    });
    Route::get('langman', function(){
        echo 'Lãng mạn';
    });
    Route::get('traigai', function(){
        echo 'Trai gái';
    });
});

Route::post('login','LoginController@postLogin');
Route::post('contact','UserController@postContact');