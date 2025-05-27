<?php

use App\Http\Controllers\Api\V1\TasksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/api/v1.php';
require __DIR__ . '/api/v2.php';




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function (){
    Route::post('/login', \App\Http\Controllers\Api\Auth\logincontroller::class);
    Route::post('/logout', \App\Http\Controllers\Api\Auth\logoutcontroller::class);
    Route::post('/register', \App\Http\Controllers\Api\Auth\registercontroller::class);
});
