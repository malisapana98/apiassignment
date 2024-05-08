<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


route::get('/posts',[PostController::class,'index']);

route::post('/post',[PostController::class,'store']);

route::get('/posts/{id}',[PostController::class,'show']);

route::put('/posts/{id}',[PostController::class,'update']);

route::delete('/posts/{id}',[PostController::class,'destroy']);


