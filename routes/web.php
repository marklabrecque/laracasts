<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	$people = ['Taylor', 'Matt', 'Jeffrey'];

    return view('pages.welcome', ['people' => $people]);
    //return view('pages.welcome')->with('people', $people);
    //return view('welcome')->withPeople($people);
});

Route::get('home', 'PagesController@home');

Route::get('about', 'PagesController@about');