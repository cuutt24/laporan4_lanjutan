<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;

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

Route::get("/", [DesaController::class,'index']);
Route::get('/create', [DesaController::class,'create']);
Route::post('/store', [DesaController::class,'store']);
Route::get('/show/{id}', [DesaController::class,'show']);
Route::post('/update/{id}', [DesaController::class,'update']);
Route::get('/destroy/{id}', [DesaController::class,'destroy']);
