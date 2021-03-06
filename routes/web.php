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
    //主页
    Route::get('/', 'StaticPagesController@home')->name('home');
    // 帮助
    Route::get('/help', 'StaticPagesController@help')->name('help');
    // 关于
    Route::get('/about', 'StaticPagesController@about')->name('about');
    //注册
    Route::get('/signup','UsersController@create')->name('signup');
    //会员
    Route::resource('users','UsersController');
    /*
     * Sessions 会话控制
    */
    Route::get('login', 'SessionsController@create')->name('login');
    Route::post('login', 'SessionsController@store')->name('login');
    Route::delete('logout', 'SessionsController@destroy')->name('logout');