<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MedicalController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::prefix('medical')->middleware(['auth'])->group(function(){
	Route::get('/mProfile', [App\Http\Controllers\Admin\MedicalController::class, 'mProfile'])->name('medical.mProfile');
	Route::get('/mHistory', [App\Http\Controllers\Admin\MedicalController::class, 'mHistory'])->name('medical.mHistory');
	Route::get('/mProfile/store', [App\Http\Controllers\Admin\MedicalController::class, 'mProfile_store'])->name('medical.mProfile.store');
});


