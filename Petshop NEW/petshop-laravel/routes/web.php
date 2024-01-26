<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetshopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventoryController;

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
Route::resource('/', PetshopController::class);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');

Route::get('/create', [DashboardController::class, 'create'])->name('dashboard.create');

Route::resource('/invent', InventoryController::class);
