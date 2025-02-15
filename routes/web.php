<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home']);
Route::get('login',[AuthController::class,'login']);
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'create_user']);
Route::get('verify/{token}',[AuthController::class,'verify']);
Route::get('forgot',[AuthController::class,'forgot']);