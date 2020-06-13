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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

//Oauthログイン
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/mypage', 'MypageController@index')->name('mypage');

    Route::get('/users/delete/{id}', 'UserController@delete');

    //パスワード変更
    Route::get('changepassword', 'HomeController@showChangePasswordForm');
    Route::post('changepassword', 'HomeController@changePassword')->name('changepassword');

    // メールアドレス確認メールを送信
    Route::get('/changeEmail', 'ChangeEmailController@index')->name('changeEmail');
    Route::get('/reset/{token}', 'ChangeEmailController@reset');
    Route::post('/email', 'ChangeEmailController@sendChangeEmailLink');
});
