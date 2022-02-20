<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TKIT1Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Yayasan
Route::get('/', function () {
    return view('user_view.pages.tkit1.home');
  })->name('home');

// PPDB Form
Route::resource('ppdb_tkit1', TKIT1Controller::class);

// Admin
// Route::prefix('admin')
// ->namespace('Admin')
// ->middleware(['auth', 'admin'])
// ->group(function() {

//   // Dashboard
//   Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//   // Table

//   Route::get('/smait', [AdminController::class, 'smait'])->name('smait');
// });

// Auth::routes();
