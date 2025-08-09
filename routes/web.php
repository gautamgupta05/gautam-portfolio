<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/resume', [PortfolioController::class, 'resume'])->name('resume');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/rakhi-greeting', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

