<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/users/register', [UserController::class, 'register']);
Route::post('/users/login', [UserController::class, 'login']);

Route::get('/videos/search', [VideoController::class, 'search']);   // must be above {video}
Route::get('/videos/{video}/play', [VideoController::class, 'play']);
Route::put('/videos/{video}/playback_count', [VideoController::class, 'incrementPlayback']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users/logout', [UserController::class, 'logout']);
    Route::post('/videos', [VideoController::class, 'store']);
    Route::delete('/videos/{video}', [VideoController::class, 'destroy']);
});
