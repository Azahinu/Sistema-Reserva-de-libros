<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LoginController;
use App\Http\Controller\RegisterController;
use App\Http\Controller\HomeController;
use App\Http\Controller\LogoutController;

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

//Se creo la pagina /register para que un usuario se pueda registrar
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'show']);

Route::post('/register',[App\Http\Controllers\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'show']);

Route::post('/login',[App\Http\Controllers\LoginController::class, 'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout']);

