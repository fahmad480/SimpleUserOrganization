<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::name('api.')->middleware(['auth:sanctum'])->group(function () {
    // Route::name('car.')->prefix('car')->group(function() {
    //     Route::get('/', [CarController::class, 'index'])->name('index');
    //     Route::get('/{id?}', [CarController::class, 'show'])->name('show');
    //     Route::post('/', [CarController::class, 'store'])->name('store');
    //     Route::put('/{id?}', [CarController::class, 'update'])->name('update');
    //     Route::delete('/{id?}', [CarController::class, 'destroy'])->name('destroy');
    // });
});
