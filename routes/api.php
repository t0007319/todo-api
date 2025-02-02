<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\TodoController;

/**
 * I've commented these out but these are working routes for user authentication
 * Time permitted i would add the TODO behind a auth middleware and utilise the userId
 * to add CRUD actions on TODO's
 */
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::controller(RegisterController::class)->group(function() {
//     Route::post('register', 'register');
//     Route::post('login', 'login');
// });

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('todo', TodoController::class);
});
