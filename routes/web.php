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

// LOGIN
Route::get('/login', [adminController::class, 'adminlogin'])->name('login');
Route::post('/login-proses', [adminController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');


// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    //  DASHBOARD ADMIN
Route::get('/admindashboard', [adminController::class, 'index'])->name('index');
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

// INPUT GROUP
Route::get('/inputgroup', [adminController::class, 'inputgroup'])->name('inputgroup');
Route::post('/input/store', [adminController::class, 'store'])->name('input.store');
Route::get('/input/edit/{id}', [adminController::class, 'edit'])->name('input.edit');
Route::post('/input/update/{id}', [adminController::class, 'update'])->name('input.update');
Route::delete('/input/destroy/{id}', [adminController::class, 'destroy'])->name('input.destroy');

// INPUT PAGE (nama rute diubah untuk menghindari duplikasi)
Route::get('/input', [adminController::class, 'inputPage'])->name('input');

Route::get('/admin/export-users', [AdminController::class, 'exportUsers'])->name('admin.export-users');

// GRUP CHALLENGES
Route::get('/challenges', [adminController::class, 'grupchallenges'])->name('challenges');
Route::post('/crtchallenges', [adminController::class, 'crtchallenges'])->name('crtchallenges');
Route::get('/editchallenges/{id}', [adminController::class, 'editchallenges'])->name('editchallenges');
Route::post('/updatechallenges/{id}', [adminController::class, 'updatechallenges'])->name('updatechallenges');
Route::delete('/deletechalenges/{id}', [adminController::class, 'deletechalenges'])->name('deletechalenges');



// GROUPING
Route::get('/grouping', [adminController::class, 'grouping'])->name('grouping');
Route::post('/update-athletes-group', [adminController::class, 'updateAthletesGroup'])->name('update.athletes.group');
Route::post('/reset-athletes-group', [adminController::class, 'resetAthletesGroup'])->name('reset.athletes.group');


});