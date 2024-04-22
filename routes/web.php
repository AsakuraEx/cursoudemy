<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('post', PostController::class);
// Route::resource('category', CategoryController::class);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
    ]);

    Route::get('/testing', function(){
        return view('dashboard.testing');
    })->name('testing');
});

// Route::get('/contact', function() {
//     $users = ['Francisco Escobar', 'Diego Escobar', 'Sara Mancia'];
//     $name = 'Francisco';
//     return view('contact', compact('name', 'users'));
//     //return redirect()->route('contact2', 'GET' ,301);
//     //return to_route('contact2');
// })->name('contact');

// Route::get('/contact2', function() {
//     return view('contact2');
// })->name('contact2');

// Route::get('/test',[PrimerControlador::class, 'index']);
// Route::resource('/test', PrimerControlador::class);

require __DIR__.'/auth.php';
