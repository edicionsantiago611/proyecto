<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EditorialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource("/books", BookController::class);
Route::apiResource("/autors", AutorController::class);
Route::apiResource("/editoriles", EditorialController::class);