<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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
/*Route::get('/home/functions/index','App\Http\Controllers\page@index');
Route::get('/home/functions/show_task','App\Http\Controllers\page@show_task');
Route::get('/home/functions/insert_task','App\Http\Controllers\page@insert_task');
Route::get('/home/functions/update_task','App\Http\Controllers\page@update_task');
Route::get('/home/functions/delete_task','App\Http\Controllers\page@delete_task');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/functions/index','App\Http\Controllers\page@index');
Route::get('/home/functions/show_task','App\Http\Controllers\page@show_task')->middleware('auth')->name('password.confirm');
Route::get('/home/functions/insert_task','App\Http\Controllers\page@insert_task')->middleware('auth')->name('password.confirm');
Route::get('/home/functions/update_task','App\Http\Controllers\page@update_task')->middleware('auth')->name('password.confirm');
Route::get('/home/functions/update_task_0','App\Http\Controllers\page@update_task_0')->middleware('auth')->name('password.confirm');
Route::get('/home/functions/delete_task','App\Http\Controllers\page@delete_task')->middleware('auth')->name('passsword.confirm');
