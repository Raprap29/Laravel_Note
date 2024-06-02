<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;


// Register Page
Route::get('/register', [AuthController::class, 'registerPage'])->name("register.index");

// Main Page to show all the data
Route::get('/', [NoteController::class, 'index'])->name("main.index");
// Create note data
Route::get('/create', [NoteController::class, 'createPage'])->name('create.index');
Route::post('/note', [NoteController::class, 'store'])->name("createnote.index");
Route::get('/note/{note}', [NoteController::class, 'show'])->name("updatenote.index");
Route::delete('/note/{note}', [NoteController::class, 'destroy'])->name("destroynote.index");