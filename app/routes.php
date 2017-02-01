<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('login', ['as' => 'login', 'uses' => 'UserController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'UserController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);




Route::get('/seed', 'UserController@seedUser');

Route::get('/gallery', function () {
    return \View::make('admin.pages.gallery');
});




Route::group(array('before' => 'auth'), function()
{

    Route::get('/dashboard', 'BlogController@allDashboard');
    Route::get('/blog', 'BlogController@blogView');


    Route::get('/cover', 'CoverController@index'); 
    Route::post('/cover/{string}', 'CoverController@store');
    Route::get('/cover/delete/{id}', 'CoverController@destroy');



    // User Root
    Route::get('/users', 'UserController@index');
    Route::post('/add/user', 'UserController@store');
    Route::post('/user/edit', 'UserController@update');
    Route::post('/user/delete', 'UserController@store');

    Route::post('add/blog', 'BlogController@store');

//    Route::get('/blog', 'BlogController@index');

    Route::get('/show/blog/{id}', 'BlogController@show');

    Route::post('/update/blog/{id}', 'BlogController@updated');

    Route::get('/delete/blog/{id}', 'BlogController@destroy');




});


Route::get('/', 'BlogController@index');

Route::get('blog/{id}', 'BlogController@webShow');



Route::get('/about', function () {
    return \View::make('website.pages.about');
});

Route::get('/contact', function () {
    return \View::make('website.pages.contact');
});

Route::get('/expertise', function () {
    return \View::make('website.pages.expertise');
});


