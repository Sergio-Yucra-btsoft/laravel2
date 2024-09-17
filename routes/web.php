<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');
Route::view('/contact','contact')->name('contact');
Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/about','about')->name('about');
