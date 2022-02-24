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

Route::get('user/login', 'Auth\AdminAuthController@getLogin')->name('user.login');
Route::post('user/login', 'Auth\AdminAuthController@postLogin');

Route::get("users_server_side", "UserController@getAllUser");

Route::get("users_server_side", "UserController@getAllUserServerSide")->name("user.data");
Route::get("index_get_user", "UserController@indexGetUser");
Route::group(['middleware' => 'prevent-back-history','auth'],function(){

	Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

});