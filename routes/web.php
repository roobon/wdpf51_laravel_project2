<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\showAge;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthLogin;
use App\Http\Middleware\CheckAge;
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

// Route::get('/admin', function () {
//     return view('auth/login');
// });
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin_home');

Route::resource('products', ProductController::class);

Route::middleware([CheckAge::class])->group(function () {
    Route::get('showmyage', [showAge::class, 'index']);
});

Route::get('/admin', [LoginController::class, 'index']);

Route::middleware([AuthLogin::class])->group(function () {
    Route::post('/login', [LoginController::class, 'login']);
});


Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/reports', [ReportController::class, 'Report1']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/phone', [UserController::class, 'phoneData']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/roles', [UserController::class, 'roleAssign']);
