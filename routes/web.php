<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about',[AboutController::class,'index'])->name('about');

