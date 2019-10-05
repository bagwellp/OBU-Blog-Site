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


use App\Http\Controllers\HomeController;

//set homepage to posts page
Route::get('/', function() {
    return redirect('/posts');
});

Route::get('/posts', 'PostController@index');


//{post} is a wild card that passes the number given to the post object
//todo make this not show unless there is an article
Route::get('/posts/{post}','PostController@show');


Route::post('/posts', "PostController@store");

Route::get('/create-post', 'PostController@create');


