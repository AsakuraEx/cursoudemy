<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
    //$data = ['name' => 'Francisco'];
    //return view('contact', $data);
    return redirect()->route('contact2', 'GET' ,301);
    //return to_route('contact2');
})->name('contact');

Route::get('/contact2', function() {
    return view('contact2');
})->name('contact2');