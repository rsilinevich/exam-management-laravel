<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProfessorController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    // Exams - accessible to all authenticated users
    Route::resource('exams', ExamController::class)->except(['show']);

    // Professors - admin only
    Route::middleware(['can:admin'])->group(function () {
        Route::resource('professors', ProfessorController::class)->except(['show']);
    });
});

require __DIR__.'/auth.php';
