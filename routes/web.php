<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function(){
//     return "Página de Prueba";
// });

Route::get('/test', function(){
    return view('test');
})->name('test');

// Route::get('/crud', function(){
//     return view('crud/index');
// });

// Route::get('/crud', function(){
//     $age = 27;
//     $name = 'Francisco';
//     $data = ['name'=> $name, 'age'=> $age];
//     return view('crud/index', $data);
// });

Route::get('/crud', function(){
    $age = 27;
    $name = 'Francisco';
    return view('crud/index', ['name'=> $name, 'age'=> $age]);
})->name('crud');