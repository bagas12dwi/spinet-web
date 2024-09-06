<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.screens.dashboard.index');
});

Route::get('/modul', function () {
    return view('users.screens.modul.index');
})->name('modul');

Route::get('/materi', function () {
    return view('users.screens.materi.index');
})->name('materi');
Route::get('/media', function () {
    return view('users.screens.media.index');
})->name('media');
