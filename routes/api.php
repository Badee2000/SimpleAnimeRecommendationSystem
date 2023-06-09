<?php

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
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\RegisterController::class, 'login']);



Route::middleware('auth:api')->group(function (){


    /*
  |--------------------------------------------------------------------------
  |CRUD FOR THE RATING TABLE
  |--------------------------------------------------------------------------
   */
    Route::apiResource('rating',\App\Http\Controllers\RatingController::class);

     /*
    |--------------------------------------------------------------------------
    |CRUD FOR THE ANIME TABLE
    |--------------------------------------------------------------------------
     */
    Route::apiResource('anime',\App\Http\Controllers\AnimeController::class);

    // _______________________SHOW THE DETAILS OF CERTAIN ANIME____________________

    Route::get('details/{id}',[\App\Http\Controllers\AnimeController::class,'details']);


});
