<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

// ユーザ登録
Route::get('user/signup', 'Auth\AuthController@getRegister')->name('usersignup.get');
Route::post('user/signup', 'Auth\AuthController@postRegister')->name('usersignup.post');

// MCユーザ登録
Route::get('mc/register', 'mcAuth\AuthController@getRegister')->name('mcsignup.get');
Route::post('mc/register', 'mcAuth\AuthController@postRegister')->name('mcsignup.post');


// ユーザーログイン認証
Route::get('user/login', 'Auth\AuthController@getLogin')->name('userlogin.get');
Route::post('user/login', 'Auth\AuthController@postLogin')->name('userlogin.post');
Route::get('user/logout', 'Auth\AuthController@getLogout')->name('userlogout.get');

// MCログイン認証
Route::get('mc/login', 'mcAuth\AuthController@getLogin')->name('mclogin.get');
Route::post('mc/login', 'mcAuth\AuthController@postLogin')->name('mclogin.post');;
Route::get('mc/logout', 'mcAuth\AuthController@getLogout')->name('mclogout.get');


Route::get('ranking/like', 'RankingController@like')->name('ranking.like');


Route::group(['middleware'=>'user'],function(){
    Route::get('users/{id}', 'UsersController@show');
    Route::resource('mcs','McController',['only'=>['index','show']]);
    Route::get('mail/{id}','MailController@show')->name('mail');  
    Route::post('mail','MailController@sendMail')->name('sendmail.post');
    Route::group(['prefix' => 'mcs/{id}'], function () {  
        Route::post('like', 'FavoritesController@store')->name('user.like');
        Route::delete('unlike', 'FavoritesController@destroy')->name('user.unlike');
    });
});
    


Route::group(['middleware'=>'mc'],function(){
    Route::resource('photos','PhotosController',['only'=>['create','store']]);
    Route::get('mypage/{id}','MypageController@show')->name('mypage.show');
});