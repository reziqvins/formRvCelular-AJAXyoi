<?php

use App\Http\Controllers\DatahpController;
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


Route::get('/', [DatahpController::class, 'index']);
Route::get('/read', [DatahpController::class, 'read']);
Route::get('/create', [DatahpController::class, 'create']);
Route::get('/store', [DatahpController::class, 'store']);
Route::get('/show/{id}', [DatahpController::class, 'show']);
Route::get('/update/{id}', [DatahpController::class, 'update']);
Route::get('/destroy/{id}', [DatahpController::class, 'destroy']);