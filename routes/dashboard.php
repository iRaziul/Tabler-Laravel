<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return redirect()->route('verification.notice');
    return view('dashboard.overview.index');
})->name('index')->middleware(['auth']);
