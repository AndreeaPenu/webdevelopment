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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::resource('/users', 'UserController',['names'=>[
    'index'=>'users.index',
    'destroy'=>'users.destroy'
]]);

Route::post('/users', 'UserController@store');
Route::get('/users/{id}/edit','UserController@edit')->name('users.edit');
Route::patch('/users/{id}', 'UserController@update')->name('users.update');

Route::resource('participations', 'ParticipationsController',['names'=>[
    'index'=>'participations.index',
    'create'=>'participations.create',
    'store'=>'participations.store',
    'edit'=>'participations.edit'
]]);


Route::get('participation/{id}/islikedbyme', 'ParticipationsController@isLikedByMe');
Route::post('participation/like', 'ParticipationsController@like');


Route::get('sendmail','HomeController@sendMail');



