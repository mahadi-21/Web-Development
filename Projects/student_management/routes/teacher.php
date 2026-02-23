<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:teacher'])
    ->prefix('teacher')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('teacher.dashboard');
        })->name('teacher.dashboard');


        Route::get('/students', function () {
            return view('teacher.students');
        })->name('teacher.students');

        Route::get('/students/manage', function () {
            return view('teacher.manage_students');
        })->name('teacher.students.manage');

        Route::get('/students/classs-wise', function () {
            return view('teacher.classwise_students');
        })->name('teacher.students.classwise');

        Route::get('/students/admission', function () {
            return view('teacher.admission_students');
        })->name('teacher.students.admission');

    
       Route::get('/students/admission/results', function () {
            return view('teacher.admission_results');
        })->name('teacher.students.admission.results');

        Route::get('/students/add', function () {
            return view('teacher.add_student');
        })->name('teacher.students.add');

        Route::get('/students/results/manage', function () {
            return view('teacher.manage_results');
        })->name('teacher.students.results.manage');

        Route::get('/students/results/send', function () {
            return view('teacher.send_results');
        })->name('teacher.students.results.send');
        


    });

