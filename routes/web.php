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

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

});

// for users
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/userprofile', 'App\Http\Controllers\DashboardController@userprofile')->name('dashboard.userprofile');
    Route::get('/dashboard/userpost', 'App\Http\Controllers\DashboardController@userpost')->name('dashboard.userpost');
    
});

// for teacher
Route::group(['middleware' => ['auth', 'role:teacher']], function() { 
    Route::get('/dashboard/teacherprofile', 'App\Http\Controllers\DashboardController@teacherprofile')->name('dashboard.teacherprofile');
    Route::get('/dashboard/teacherpost', 'App\Http\Controllers\DashboardController@teacherpost')->name('dashboard.teacherpost');
});

// for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/adminprofile', 'App\Http\Controllers\DashboardController@adminprofile')->name('dashboard.adminprofile');
    Route::get('/dashboard/adminpost', 'App\Http\Controllers\DashboardController@adminpost')->name('dashboard.adminpost');
    Route::get('/postdetails/index', 'App\Http\Controllers\DashboardController@adminpost')->name('postdetails.index');
});

//resources
Route::resource('postdetails','App\Http\Controllers\PostdetailController');
Route::get('/search','App\Http\Controllers\PostdetailController@search');
require __DIR__.'/auth.php';
