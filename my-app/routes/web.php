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
Route::post('/','App\Http\Controllers\HomePageController@store')->name('index-contact');

Route::get('/about-us','App\Http\Controllers\AboutPageController@index')->name('about');
Route::post('/about-us','App\Http\Controllers\AboutPageController@store')->name('about-contact');

Route::get('/portfolio','App\Http\Controllers\PortfolioPageController@index')->name('portfolio');
Route::post('/portfolio','App\Http\Controllers\PortfolioPageController@store')->name('portfolio-contact');

Route::get('/portfolio/{project}','App\Http\Controllers\PortfolioPageController@project')->name('project');
Route::post('/portfolio/{project}','App\Http\Controllers\PortfolioPageController@store')->name('project-contact');

Route::get('/our-studio','App\Http\Controllers\StudioPageController@index')->name('studio');
Route::post('/our-studio','App\Http\Controllers\StudioPageController@store')->name('studio-contact');
