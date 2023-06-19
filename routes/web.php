<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs',[BlogController::class,'index']);

Route::get('/blogs/{id}',[BlogController::class,'show']);