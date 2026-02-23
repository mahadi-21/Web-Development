<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogController::class,'index']);


Route::post('/create-post',[BlogController::class,'create_blog'])->name('create-blog');