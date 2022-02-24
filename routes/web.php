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

// Route PagesController
Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');

// Route Skincare
Route::get('/skincare','SkincareController@index'); //menampilkan daftar produk skincare beserta komposisinya

// Route Brand Skincare
Route::get('/brand-skincare','BrandSkincareController@index'); //menampilkan list brand skincare

Route::get('/brand-skincare/create','BrandSkincareController@create'); //menampilkan form tambah brand skincare

Route::get('/brand-skincare/{brandSkincare}','BrandSkincareController@show'); //menampilkan detail brand skincare
Route::post('/brand-skincare','BrandSkincareController@store'); //menambahkan inputan data brand skincare

Route::delete('/brand-skincare/{brandSkincare}','BrandSkincareController@destroy'); //menghapus data permanen

Route::get('/brand-skincare/{brandSkincare}/edit','BrandSkincareController@edit'); // menampilkan halaman edit
Route::put('/brand-skincare/{brandSkincare}','BrandSkincareController@update'); // mengedit data 

// Route Datatables Server Side
Route::get("users_server_side", "UserController@getAllUser");

Route::get("users_server_side", "UserController@getAllUserServerSide")->name("user.data");
Route::get("index_get_user", "UserController@indexGetUser");

// Route kepribadian 
Route::get("kepribadian", "KepribadianController@index");

Route::get("tambah-kepribadian", "KepribadianController@create");
Route::post("kepribadian", "KepribadianController@store");

Route::get("kepribadian/{ID}", "KepribadianController@show");

Route::get("kepribadian/{ID}/edit", "KepribadianController@edit");
Route::post("kepribadian/{ID}", "KepribadianController@update");

Route::delete("kepribadian/{ID}", "KepribadianController@destroy");