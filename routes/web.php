<?php

use Inertia\Inertia;
use App\Models\Categories;
use App\Models\SupplierSearch;
use App\Models\LogisticServices;
use App\Models\PendingSuppliers;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\InsurerController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\LogisticsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SearchBarController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GetCategoriesController;
use App\Http\Controllers\SupplierSearchController;

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
   
    
    Route::get('/ServiceProviders', [LogisticsController::class, 'index'])->name('logi.index');

    Route::get('/Insurers', [InsurerController::class, 'index'])->name('insure.index');
    Route::get('/Blogs', [BlogsController::class, 'index'])->name('blog.index');


   
    Route::post('/', [MessagesController::class, 'store'])->name('sms.store');


    Route::get('/RegisterBusiness', [BusinessController::class, 'index'])->name('biz.index');
    Route::get('/RegisterBusiness/{id}', [BusinessController::class, 'show'])->name('biz.show');
    // Route::get('/Business/create', [GetCategoriesController::class, 'create'])->name('biz.create');
    Route::get('/Business/create', [BusinessController::class,  'create'])->name('biz.create');
    
    // Route::get('/RegisterBusiness/create', function(){
    //     dd('hey you');
    //     return Inertia::render('Business');
    // })->name('biz.create');


    Route::post('/RegisterBusiness/store', [BusinessController::class, 'store'])->name('biz.store');
    Route::get('/RegisterBusiness/edit/{id}', [BusinessController::class, 'edit'])->name('biz.edit');
    Route::put('/RegisterBusiness/update/{id}', [BusinessController::class, 'update'])->name('biz.update');
    Route::delete('/RegisterBusiness/delete/{id}', [BusinessController::class, 'delete'])->name('biz.delete');
    // Route::post('/RegisterBusiness', function(){
    //     $data = PendingSuppliers::all();
    //     return Inertia::render('RegisterBusiness', compact('data'));
    // });
    // Route::post('/Business', function(){
    //     return Inertia::render('Business');
    // });

});
Route::get('/Categories', [CategoriesController::class, 'index'])->name('catego.index');
Route::get('/BlogPosts', [BlogPostsController::class, 'index'])->name('blo.index');
Route::get('/SearchBar', [SearchBarController::class, 'index'])->name('sarch.index');

Route::get('/Search/index', [SupplierSearchController::class, 'index'])->name('search.index');

Route::get('/About', function(){
    return Inertia::render('About');
});
// Route::get('/SearchBar', function(){
//     return Inertia::render('SearchBar');
// });
Route::get('/Package', function(){
    return Inertia::render('Package');
});

Route::get('/Portfolio', function(){
    return Inertia::render('Portfolio');
});

// Route::get('/SupplierSearch', function(){
//     return Inertia::render('SupplierSearch');
// });


Route::get('/Review', function(){
    return Inertia::render('Review');
});
