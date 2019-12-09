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

// do not return a view from a route instead create a controller and 
// set the route to go to a certain controller function to return the view
// to do this we user 'artisan'
// terminal: php artisan make:controller 'controller name'

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// what this does is we dont need to put the path name in front of the controller
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::resource('/users', 'UsersController');
});