<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs',[BlogController::class,'index']);
Route::get('/create',[BlogController::class,'create']);
Route::get('/blogs/{id}',[BlogController::class,'show']);
Route::post('/blogs',[BlogController::class,'store']);
Route::delete('/blogs/{id}',[BlogController::class,'destroy']);