<?php

// use Illuminate\Foundation\Application;
// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;
use App\Http\Controllers\{PageController, NoteController};

Route::view('/', 'index');

Route::get('dashboard', [PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::resource('notes', NoteController::class)
    ->middleware('auth:sanctum');
