<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::get('/create',[TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks',[TaskController::class,'store'])->name('tasks.store');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::POST('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');