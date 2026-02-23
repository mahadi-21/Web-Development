<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:student'])
->prefix('student')
->group(function () {
    
    Route::get('/registration', [StudentController::class, 'create'])->name('student.registration');

    Route::post('/registration', [StudentController::class,'registration'])->name('student.registration.store');
     
    Route::get('/profile', [StudentController::class,'index'])->name('student.profile');

    Route::get('/edit-profile', function () {
        return view('student.edit-profile');
    })->name('student.edit-profile');


    Route::post('/update-profile', function () {
        return "update code here";
    })->name('student.update-profile');

    Route::get('/change-password', function () {
        return view('student.change-password');
    })->name('student.change-password');

    Route::get('/update-password', function () {
        return view('profile.edit');
    })->name('student.update-password');    

    Route::get('/results', function () {
        return view('student.results');
    })->name('student.results');

    Route::get('/apply', function () {
        return view('student.apply');
    })->name('student.apply');

    Route::get('/contact', function () {
        return view('student.contact');
    })->name('student.contact');


});
