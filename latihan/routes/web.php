<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

Route::post('/submit-poster', [ProfileController::class, 'submit']);