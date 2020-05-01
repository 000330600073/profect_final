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

//pages of site
Route::get('/', 'SiteController@index');
Route::get('/serial', 'SiteController@serial');
Route::get('/anime', 'SiteController@anime');
Route::get('/mult', 'SiteController@mult');
Route::get('/premier', 'SiteController@premier');
Route::get('/video/yaga', 'SiteController@yaga');
Route::resource('/comments','CommentsController');
Route::resource('/replies','RepliesController');
Route::post('/replies/ajaxDelete','RepliesController@ajaxDelete');


Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/chat', 'HomeController@chat')->name('chat');

    Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
    Route::post('message', 'HomeController@sendMessage');

    Route::delete('/delete/{id}{user_id}', 'CommentsController@delete')->name('comments.delete');
    Route::get('/view', 'SiteController@view')->name('view');
    Route::get('/edit/{id}', 'SiteController@edit')->name('edit');
    Route::post('/update/{id}', 'SiteController@update')->name('update');
    Route::delete('/delete/{id}', 'SiteController@delete')->name('delete');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('/profile', 'HomeController@update_avatar');
    Route::get('/password/change/', 'Auth\AuthChangePasswordController@showChangeForm')->name('password.change');
    Route::post('/password/change/', 'Auth\AuthChangePasswordController@changePassword')->name('password.update');


    Route::post('/logout', function (){
        \Auth::logout();
        return redirect(route('login'));
    })->name('logout');
});

