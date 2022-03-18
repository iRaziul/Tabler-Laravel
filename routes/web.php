<?php

use App\Http\Controllers\Auth\AccountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/dashboard')->name('home');

// User Account 
Route::middleware('auth')->controller(AccountController::class)->group(function () {
    Route::get('/account/edit', 'edit')->name('account.edit');
    Route::patch('/account', 'update')->name('account.update');
});
