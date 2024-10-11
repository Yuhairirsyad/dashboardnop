<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('admin.main');
// });

//  dashboard ADMIN
Route::get('/', [adminController::class, 'index'])->name('index');

// admin
Route::get('/quotes', [adminController::class, 'quotes'])->name('quotes');

Route::get('/grouping', [adminController::class, 'grouping'])->name('grouping');