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

Route::get('admin', function () {
    return view('master');
});
*/

/*Frontend Routes*/
Route::get( '/', 			['as' => '/',     				'uses' => 'FrontController@index']);
Route::get( 'home', 		['as' => 'home',     			'uses' => 'FrontController@index']);
Route::get( 'about', 		['as' => 'about',     			'uses' => 'FrontController@about']);
Route::get( 'contact', 		['as' => 'contact',     		'uses' => 'FrontController@contact']);
Route::get( 'blog', 		['as' => 'blog',     			'uses' => 'FrontController@blog']);
Route::get( 'blog_detail', 	['as' => 'blog_detail',     	'uses' => 'FrontController@blog_detail']);
Route::get( 'member',	 	['as' => 'member',		     	'uses' => 'FrontController@member']);
Route::get( 'member_detail',['as' => 'member_detail',		'uses' => 'FrontController@member_detail']);
Route::get( 'event', 		['as' => 'event',     			'uses' => 'FrontController@event']);
Route::get( 'event_detail', ['as' => 'event_detail',     	'uses' => 'FrontController@event_detail']);
Route::get( 'career', 		['as' => 'career',     			'uses' => 'FrontController@career']);
Route::get( 'career_detail', ['as' => 'career_detail',     	'uses' => 'FrontController@career_detail']);
Route::get( 'album', 		['as' => 'album',     			'uses' => 'FrontController@album']);

/* Default restful route laravel*/
Route::resource('front', 'FrontController');
