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

Route::group(['middleware' => ['auth','admin']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/',function (){
            return view('admin.index');
        });
        Route::resource('users', 'AdminUsersController');

        Route::resource('posts', 'PostController');
        Route::patch('/posts/{post}/hide', 'PostController@hide')->name('posts.hide');
        Route::get('/posts/{post}/hide', function () {
            return abort(403);;
        })->name('posts.hide');

        Route::resource('majors', 'MajorController');
    });
});
