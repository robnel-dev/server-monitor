<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\AntivirusController;
use App\Http\Controllers\LogController;

Route::get('/', function () {
    return view('welcome');
});

// Override Breeze's default dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])->name('dashboard');

    // Disk Routes
Route::get('/disks', [DiskController::class, 'index'])
->middleware(['auth'])->name('disks');

    //Antivirus Route
Route::get('/antivirus', [AntivirusController::class, 'index'])->middleware(['auth'])->name('antivirus');

    //Logs Route
Route::get('/logs', [LogController::class, 'index'])->middleware(['auth'])->name('logs');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
