<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.body');
});
Route::get('/academy', function () {
    return view('pages.academybody');
});

Route::get('/navabr', function () {
    return view('pages.navbarab');
});
