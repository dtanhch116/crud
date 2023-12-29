<?php

use App\Http\Controllers\flightController;
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

Route::get('/', [flightController::class, 'index'])->name('home');
Route::get('flight/add', [flightController::class, 'create'])->name('add');
Route::post('flight/store', [flightController::class, 'store'])->name('store');
Route::get('flight/edit/{id}', [flightController::class, 'edit'])->name('edit');
Route::post('flight/update/{id}', [flightController::class, 'update'])->name('update');
Route::get('flight/destroy/{id}', [flightController::class, 'destroy'])->name('destroy');
//Route::resource('/', flightController::class);
