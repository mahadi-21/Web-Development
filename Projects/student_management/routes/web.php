<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/students', function () {
    return view('admin.students');
})->name('admin.students.index');

Route::get('/admin/students/manage', function () {
    return view('admin.manage_students');
})->name('admin.students.manage');
Route::get('/admin/students/classwise', function () {
    return view('admin.student_classwise');
})->name('admin.students.classwise');
Route::get('/admin/students/add', function () {
    return view('admin.add_student');
})->name('admin.students.add');
Route::get('/admin/students/admission', function () {
    return view('admin.student_admission');
})->name('admin.students.admission');

Route::get('/admin/students/admission/result', function () {
    return view('admin.admission_result');
})->name('admin.students.admission.result');

Route::get('/admin/students/results/manage', function () {
    return view('admin.student_results_manage');
})->name('admin.students.results.manage');

Route::get('/admin/students/results/send', function () {
    return view('admin.send_student_results');
})->name('admin.students.results.send');

Route::get('/student', function () {
    return view('student.profile');
})->name('student.profile');

Route::get('/student/results', function () {
    return view('student.results');
})->name('student.results');

Route::get('/student/apply', function () {
    return view('student.apply');
})->name('student.apply');

Route::get('/student/contact', function () {
    return view('student.contact');
})->name('student.contact');