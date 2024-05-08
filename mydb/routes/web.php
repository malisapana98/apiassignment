<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/getdata',[StudentController::class,'getData']);