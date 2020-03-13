<?php

use Illuminate\Support\Facades\Route;

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


Route::get('admin-new-challenge', function () {
    return view('admin-new-challenge');
});

Route::get('admin-edit-challenge', function () {
    return view('admin-edit-challenge');
});


Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('user-dashboard', function () {
    return view('user-dashboard');
});

Route::get('admin-dashboard', function () {
    return view('admin-dashboard');
});


Route::get('users', function () {
    return view('users');
});

Route::get('guest', function () {
    return view('guest');
});
Auth::routes();


Route::get('/user-dashboard', 'ChallengeController@ShowChallengeslist')->name('user-dashboard');


// user protected routes
Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('user-dashboard', 'ChallengeController@ShowChallengeslist')->name('user-dashboard');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin-dashboard', 'HomeController@welcomeadmin')->name('admin-dashboard');
});


Route::get('/create','ChallengeController@create')->name('admin-new-challenge');
Route::post('/create','ChallengeController@store')->name('challenges.store');

Route::get('/challenges/{id}/delete','ChallengeController@destroy')->name('challenges.destroy');

Route::get('/challenges/{id}/edit','ChallengeController@edit')->name('challenges.edit');
Route::post('/challenges/{id}/edit','ChallengeController@update')->name('challenges.update');

Route::get('/challenges/{id}/details','ChallengeController@details')->name('challenges.details');
Route::post('/challenges/{id}/details', 'ChallengeController@fileUploadPost')->name('challenges.upload.post');





Route::get('/users','UserController@users')->name('users');
Route::get('/users/{id}/edit','UserController@edit')->name('users.edit');
Route::post('/users/{id}/edit','UserController@update')->name('users.update');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
