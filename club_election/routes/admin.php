<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\CommitteePositionsController;
use App\Http\Controllers\PositionController;


Route::middleware(['auth', 'verified','is.admin'])->group(function () 
{
    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard');

    Route::get('/positions',[PositionController::class,'index'])->name('positions');
    Route::post('/positions',[PositionController::class,'store'])->name('positions.store');


    Route::get('/committees',[CommitteeController::class,'index'])->name('committees');
    Route::post('/committees',[CommitteeController::class,'store'])->name('committees.store');
    Route::get('/committees/edit/{committee}',[CommitteeController::class,'edit'])->name('committees.edit');

    Route::post('/committee-positions',[CommitteePositionsController::class,'store'])->name('committee.positions.store');


    Route::post('/applicant/approve/{application}',[AdminController::class,'approve'])->name('application.approve');
    Route::get('/applicant/{applicant}',[ApplicantController::class,'show'])->name('applicant.show');
    Route::get('/applicant/reject/{application}',[AdminController::class,'reject'])->name('application.reject');

    Route::get('/make/admin', [AdminController::class,'makeAdmin'])->name('make.admin');
    Route::post('/make/admin', [AdminController::class,'Admin'])->name('make1.admin'); 

    Route::get('/result',[AdminController::class,'result'])->name('election.result');
    
});
