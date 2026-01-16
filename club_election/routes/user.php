<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:user', 'verified'])->group(function () {
    Route::get('/user-dashboard', [MemberController::class,'index'])->name('user.dashboard');

    Route::get('/become-member',[MemberController::class,'member'])->name('become');
    Route::post('/become-member',[MemberController::class,'store'])->name('become.member');

    Route::get('/apply-for-role', [ApplicantController::class, 'index'])->name('apply-for-post');
    

    Route::post('/apply-for-role',[ApplicantController::class,'store'])->name('appy.for.role');
    Route::post('vote-for-candidate/{candidate}',[ApplicantController::class,'vote'])->name('vote');

    Route::post('/become-super-admin',[AdminController::class,'superAdmin'])->name('become.superadmin');

});

