<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/lecturers', [LecturerController::class, 'index'])->name('lecturers.index');

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/lectures', function () {
    return view('Lectures');
});

Route::post('/lecturers', [LecturerController::class, 'store'])->name('lecturers.store');
Route::get('/lecturers/create', [LecturerController::class, 'create'])->name('lecturers.create');