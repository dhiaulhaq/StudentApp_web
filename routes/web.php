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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('view-data', 'App\Http\Controllers\AuthorizationController@viewData');
Route::get('create-data', 'App\Http\Controllers\AuthorizationController@createData');
Route::get('edit-data/{user}', 'App\Http\Controllers\AuthorizationController@editData')->name('edit_user');
Route::put('update-data/{user}', 'App\Http\Controllers\AuthorizationController@updateData')->name('update_user');
Route::delete('delete-data/{user}', 'App\Http\Controllers\AuthorizationController@deleteData')->name('delete_user');
