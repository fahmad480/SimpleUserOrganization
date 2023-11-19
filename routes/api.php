<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrganizationController;

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
    // Route::name('organization.')->prefix('organization')->group(function() {
    //     Route::post('/create', [OrganizationController::class, 'store'])->name('create');
    // });
});
