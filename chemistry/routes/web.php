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

Route::get('/', 'WelcomeController@index')->name('welcome.index');

Route::get('auth/facebook', 'SocialFaceBookController@redirectToProvider')->name('auth.facebook');
Route::get('auth/facebook/callback', 'SocialGitHubController@handleProviderCallback');



Route::resource('events', 'EventsController');
Route::resource('positions', 'PositionsController');

Auth::routes();