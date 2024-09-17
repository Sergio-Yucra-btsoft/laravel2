<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');

Route::get('/project', [ProjectController::class,'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectController::class,'show'])->name('projects.show');


