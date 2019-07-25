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
Route::get('/index', function () {
    return view('index');
});
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::resource('profile','ProfileController');

Auth::routes();
Route::get('/home', 'learningController@index')->name('home');
route::resource('e-learning','learningController');
Route::get('/notfound', 'learningController@notfound')->name('notfound');
Route::get('/index', 'learningController@index')->name('index');
Route::get('/gallery', 'learningController@gallery')->name('gallery');
Route::get('/course-detail', 'learningController@coursed')->name('course-detail');
Route::get('/blog-archive', 'learningController@bloga')->name('blog-archive');
Route::get('/contact', 'learningController@contact')->name('contact');
Route::get('/blog-single', 'learningController@blogs')->name('blog-single');
Route::get('/course-archive', 'learningController@coursea')->name('course-archive');
Route::get('/info', 'learningController@show')->name('info');