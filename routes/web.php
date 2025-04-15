<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\ServicesController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/about',[AboutController::class,'index'])->name('about');

