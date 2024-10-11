<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'index']);


Route::get('/export/users', [ExportController::class, 'exportUsers'])->name('export.users');
Route::get('/export/tasks', [ExportController::class, 'exportTasks'])->name('export.tasks');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/export', [UserController::class, 'export'])->name('users.export');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/export', [TaskController::class, 'exportTasks'])->name('tasks.export');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');




