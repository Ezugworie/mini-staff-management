<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/tasks', function () {
    return Inertia::render('Tasks');
})->name('tasks');

Route::middleware(['auth:sanctum', 'verified'])->get('/employees', function () {
    return Inertia::render('Employees');
})->name('employees');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects', function () {
    return Inertia::render('Projects');
})->name('projects');

Route::middleware(['auth:sanctum', 'verified'])->get('/appointments', function () {
    return Inertia::render('Appointments');
})->name('appointments');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
