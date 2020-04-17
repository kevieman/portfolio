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

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');

// Skills routes
Route::get('/skills', 'SkillController@index')->name('skills.index');
Route::get('/skills/create', 'SkillController@create')->name('skills.create');
Route::post('/skills', 'SkillController@store')->name('skills.store');

// Projects routes
Route::get('/portfolio', 'ProjectController@index' )->name('portfolio');

// Pages routes
Route::get('/pages', 'PageController@index')->name('pages.index');
Route::get('/pages/{id}', 'PageController@show')->name('pages.show');
Route::get('/pages/create', 'PageController@create')->name('pages.create');
Route::post('/pages', 'PageController@store')->name('pages.store');

Auth::routes([
    'register' => false
]);

Route::get('/admin', 'HomeController@index')->name('home');
