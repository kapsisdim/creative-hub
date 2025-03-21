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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\HomePageController@index')->name('index');

Route::get('/about-us','App\Http\Controllers\AboutPageController@index')->name('about');

Route::get('/portfolio','App\Http\Controllers\PortfolioPageController@index')->name('portfolio');

Route::get('/our-studio','App\Http\Controllers\StudioPageController@index')->name('studio');
