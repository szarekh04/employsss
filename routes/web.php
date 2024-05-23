<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('employee', [App\Http\Controllers\EmployeeControl::class, 'index']);
Route::get('employee/create', [App\Http\Controllers\EmployeeControl::class, 'create']);
Route::post('employee/create', [App\Http\Controllers\EmployeeControl::class, 'store']);
Route::get('employee/{id}/edit',[App\Http\Controllers\EmployeeControl::class, 'edit']);
Route::put('employee/{id}/edit',[App\Http\Controllers\EmployeeControl::class, 'update']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\EmployeeControl::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('employee    ', [\App\Http\Controllers\UserController::class, 'index'])->name('employee.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
