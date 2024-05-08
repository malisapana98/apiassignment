<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/getdata',[PostController::class,'getData']);