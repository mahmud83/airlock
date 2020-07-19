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

Auth::routes([
    'register' => false
]);

Route::group(['middleware' => 'auth'], function() {

    Route::get('settings', 'SettingsController@index')->name('settings');
    Route::get('home', 'HomeController@index')->name('home');
    
    Route::get('users/upload', 'UserController@upload')->name('users.upload');
    Route::post('users/upload', 'UserController@import')->name('users.import');
    
    Route::get('users/change-password', 'UserController@changePassword')->name('users.change-password');
    Route::post('users/change-password', 'UserController@storeChangePassword')->name('users.store-change-password');
    Route::resource('users', 'UserController');

    Route::get('students/upload','StudentController@upload')->name('students.upload');
    Route::post('students/upload','StudentController@import')->name('students.import');
    Route::resource('students', 'StudentController');

    Route::resource('apps', 'ApplicationController');
});