<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelUploadController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('auth.login');
});

// Route::post('/login', [LoginController::class, 'authenticateAdmin']);
Route::get('/dashboard', function () {
    return view('welcome');
});

Route::post('/upload', [ExcelUploadController::class, 'store']);
Route::get('/showform', [ExcelUploadController::class, 'showForm']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
