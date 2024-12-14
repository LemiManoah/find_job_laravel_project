<?php


use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

// Correct usage:
Route::resource('jobs', JobController::class);


Route::get('/', function () {
    return view('home');
})->name('home');




Route::get('contact', function () {
    return view('contact');
})->name('contact');