<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ThreeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
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
Route::get('/Newpage', [PageController::class, 'newPage'])->name('Newpage');
Route::get('/testThree', [ThreeController::class, 'testThree']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/googleLogin', [GoogleController::class, 'redirect'])->name('googleLogin');
Route::get('/googleLogin/callbackgoogle', [GoogleController::class, 'callbackgoogle']);
