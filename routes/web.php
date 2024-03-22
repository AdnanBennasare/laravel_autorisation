<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;


// Route::resource('tasks', TaskController::class)->middleware('verified');
// Route::resource('projects', ProjectController::class)->middleware('verified');


Route::resource('tasks', TaskController::class)->middleware('auth');
Route::resource('projects', ProjectController::class)->middleware('auth');

Route::get('task/{id}', [TaskController::class, 'index'])->name('task');
Route::fallback(function () {
    return view('layouts.Error404');
});

Auth::routes(['verify' => true]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


