<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', PostController::class);

Route::resource('category', CategoryController::class);

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