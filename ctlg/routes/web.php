<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BumbuController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SelaiController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

// Auth::routes();

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index']);
// Route::get('index', function () {
//     return view('index');
// });
Route::get('create', function () {
    return view('admin.create');
});
Route::get('edit', function () {
    return view('admin.edit');
});

Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/datacontent', IndexController::class)->middleware('auth');
Route::resource('/detailproduk', DetailProdukController::class)->middleware('auth');
Route::resource('/selai', SelaiController::class)->middleware('auth');
Route::resource('/bumbu', BumbuController::class)->middleware('auth');
// Route::delete('/dashboard', [DashboardController::class, 'destroy'])->middleware('auth');


// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('');

require __DIR__ . '/auth.php';