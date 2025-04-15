<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/about', function (){
    return view('about');
})->name('about');

