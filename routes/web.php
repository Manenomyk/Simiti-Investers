<?php

use App\Http\Controllers\BlogsController;
use Inertia\Inertia;
use App\Models\Categories;
use App\Models\LogisticServices;
use App\Models\PendingSuppliers;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\InsurerController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\LogisticsController;
use App\Http\Controllers\CategoriesController;

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
    Route::get('/Categories', [CategoriesController::class, 'index'])->name('catego.index');
    
    Route::get('/ServiceProviders', [LogisticsController::class, 'index'])->name('logi.index');

    Route::get('/Insurers', [InsurerController::class, 'index'])->name('insure.index');
    Route::get('/Blogs', [BlogsController::class, 'index'])->name('blog.index');


   
    Route::post('/', [MessagesController::class, 'store'])->name('sms.store');

    Route::post('/RegisterBusiness', [BusinessController::class, 'store'])->name('biz.store');
    
    // Route::post('/RegisterBusiness', function(){
    //     $data = PendingSuppliers::all();
    //     return Inertia::render('RegisterBusiness', compact('data'));
    // });


});

Route::get('/About', function(){
    return Inertia::render('About');
});
Route::get('/Portfolio', function(){
    return Inertia::render('Portfolio');
});

Route::get('/SupplierSearch', function(){
    return Inertia::render('SupplierSearch');
});

Route::get('/Review', function(){
    return Inertia::render('Review');
});

Route::get('/BlogPosts', function(){
    return Inertia::render('BlogPosts');
});
