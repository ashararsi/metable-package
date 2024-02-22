<?php

use Illuminate\Support\Facades\Route;
use anlutro\LaravelSettings\Facade as Settings;
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

Route::get('/test', function () {



    $settings = Setting::all();


    dd($settings);
});
Route::get('/associate', [App\Http\Controllers\AssginContoller::class, 'assgin'])->name('assgin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UserController::class, 'users'])->name('users');





