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

Route::get('/', [
    'uses'=>'BlogController@index',
    'as' => 'blog'
]);


Route::get('/blog/{post}', [
    'uses' => 'BlogController@show',
    'as' => 'blog.show'
]);

Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as'=> 'category'
]);

/*Route::get('/tag/{tag}', [
    'uses' => 'BlogController@category',
    'as'=> 'category'
]);*/

Route::auth();

//Route::get('/home', 'HomeController@index');

Route::get('/home', 'Backend\HomeController@index');

Route::resource('/backend/blog', 'Backend\BlogController');

Route::resource('/backend/categories', 'Backend\CategoriesController');

Route::resource('/backend/users', 'Backend\UsersController');

Route::get('/profil', 'BlogController@profil');

Route::get('/gallery', 'BlogController@gallery');

Route::get('/video', 'BlogController@video');


