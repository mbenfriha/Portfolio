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


Route::get('/admin/index', 'AdminController@index');
Route::get('/admin/message', 'AdminController@message');
Route::get('/admin/skill', 'AdminController@skill');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('skill', 'SkillsController');
Route::resource('message', 'MessageController');
