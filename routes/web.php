<?php

use App\Task;
use Illuminate\Http\Request;
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
    return view('beranda');
})->name('task');

Route::post('/',function(Request $request) {
    
    $request->validate([
       'task_name' => 'required',
       'cost' => 'required'
    ]);
    
    $count = count($request->task_name);

    for ($i=0; $i < $count; $i++) { 
	  $task = new Task();
	  $task->task_name = $request->task_name[$i];
	  $task->cost = $request->cost[$i];
	  $task->save();
    }

    return redirect()->back();
});

Route::get('user/login', 'Auth\AdminAuthController@getLogin')->name('user.login');
Route::post('user/login', 'Auth\AdminAuthController@postLogin');

Route::get("users_server_side", "UserController@getAllUser");

Route::get("users_server_side", "UserController@getAllUserServerSide")->name("user.data");
Route::get("index_get_user", "UserController@indexGetUser");
Route::group(['middleware' => 'prevent-back-history','auth'],function(){

	Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    //Warung Rindu
    Route::get('/list-menu', 'WarungRinduController@index');

    Route::get('/create-menu', 'WarungRinduController@create');

    Route::get('/list-pesanan', 'WarungRinduController@pesanan');

    Route::get('/create-pesanan', 'WarungRinduController@createpesanan');

});

