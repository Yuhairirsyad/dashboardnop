<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

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

// ADMIN
//  DASHBOARD ADMIN
Route::get('/', [adminController::class, 'index'])->name('index');
Route::post('/crtuser', [adminController::class, 'crtuser'])->name('crtuser');
Route::get('/editusr/{id}', [adminController::class, 'editusr'])->name('editusr');
Route::post('/updateusr/{id}', [adminController::class, 'updateusr'])->name('updateusr');
Route::delete('/deleteusr/{id}', [adminController::class, 'deleteusr'])->name('deleteusr');



// QUOTES
Route::get('/quotes', [adminController::class, 'quotes'])->name('quotes');
Route::post('/crtquotes', [adminController::class, 'crtquotes'])->name('crtquotes');
Route::get('/editqts/{id}', [adminController::class, 'editqts'])->name('editqts');
Route::post('/updateqts/{id}', [adminController::class, 'updateqts'])->name('updateqts');
Route::delete('/deletequotes/{id}', [adminController::class, 'deletequotes'])->name('deletequotes');



Route::get('/input', [adminController::class, 'inputgroup'])->name('input');
Route::get('/grouping', [adminController::class, 'grouping'])->name('grouping');
Route::get('/admin/export-users', [AdminController::class, 'exportUsers'])->name('admin.export-users');
 

