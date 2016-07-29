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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','pagesController@home');
Route::get('/RegisterDoctor', 'pagesController@create_doc');
Route::get('/doctors','pagesController@doctors');
Route::get('/UploadImage', 'pagesController@images');

Route::post('/SaveDoctor','pagesController@save_doc');
Route::post('/SaveImage', 'pagesController@ImageSave');


/*news controllers routing*/
Route::get('/UploadNews','NewsController@upload_news');
Route::post('/createNews','NewsController@saveNews');
