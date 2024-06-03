<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ====== Project 
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'project'])->name('project');
Route::post('/project/add', [App\Http\Controllers\ProjectController::class, 'addproject'])->name('addproject');
