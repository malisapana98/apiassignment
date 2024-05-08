<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/students',[StudentController::class,'index']);

Route::post('/student',[StudentController::class,'store']);

Route::get('/students/{id}',[StudentController::class,'show']);

Route::put('/students/{id}',[StudentController::class,'update']);

Route::delete('/students{id}',[StudentController::class,'delete']);