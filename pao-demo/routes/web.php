<?php

use GrahamCampbell\GitHub\Facades\GitHub;

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

Route::get('/', function () {
    // dd(GitHub::getDefaultConnection());
    // dd(GitHub::me()->emails()->all());
    // dd(GitHub::issues()->all('from2day', 'fullstack-party'));
    // from2day/fullstack-party

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('login.github');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');