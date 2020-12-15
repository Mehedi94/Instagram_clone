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

Route::post('/follow/{user}','App\Http\Controllers\FollowsController@store');

Route::get('/', 'App\Http\Controllers\postscontroller@index');

Route::get('/p/create','App\Http\Controllers\postscontroller@create');

Route::post('/p','App\Http\Controllers\postscontroller@store');

Route::get('/p/{post}','App\Http\Controllers\postscontroller@show');

Route::get('/profile/{user}', [App\Http\Controllers\profilescontroller::class, 'index'])->name('profile.show');

Route::get('/profile/{user}/edit', [App\Http\Controllers\profilescontroller::class, 'edit'])->name('profile.edit');

Route::Patch('/profile/{user}', [App\Http\Controllers\profilescontroller::class, 'update'])->name('profile.update');