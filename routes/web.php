<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/archive', function () {
    return view('archive');
})->name('archive');

Route::get('/giving', function () {
    return view('giving');
})->name('giving');