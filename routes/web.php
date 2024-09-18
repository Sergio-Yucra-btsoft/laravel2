<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');

Route::get('/project', [ProjectController::class,'index'])->name('projects.index');
Route::get('/project/create', [ProjectController::class,'create'])->name('projects.create');
Route::get('/project/{project}', [ProjectController::class,'show'])->name('projects.show');
Route::patch('/project/{project}', [ProjectController::class,'update'])->name('projects.update');
Route::get('/project/{project}/edit', [ProjectController::class,'edit'])->name('projects.edit');
Route::post('/project', [ProjectController::class,'store'])->name('projects.store');



