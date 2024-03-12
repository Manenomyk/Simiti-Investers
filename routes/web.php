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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/Analytics', function(){
    return Inertia::render('Analytics');
});

Route::get('/Portfolio', function(){
    return Inertia::render('Portfolio');
});
Route::get('/Insurers', function(){
    return Inertia::render('Insurers');
});
Route::get('/Review', function(){
    return Inertia::render('Review');
});
Route::get('/ServiceProviders', function(){
    return Inertia::render('ServiceProviders');
});
Route::get('/RegisterBusiness', function(){
    return Inertia::render('RegisterBusiness');
});