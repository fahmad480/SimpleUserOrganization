<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FirstOrganizationSetupController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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

Route::get('/', function () { // ceritanya bisa jadi landingpage
    return redirect()->route('dashboard');
});

Route::get('/home', function () { // ceritanya bisa jadi landingpage
    return redirect()->route('dashboard');
});

Route::middleware(['guest'])->group(function () {
    Route::prefix('/signin')->controller(AuthController::class)->name('auth.')->group(function () {
        Route::get('/', 'signin')->name('signin');
        Route::post('/', 'signin_action')->name('signin_action');
    });
    Route::prefix('/signup')->controller(AuthController::class)->name('auth.')->group(function () {
        Route::get('/', 'signup')->name('signup');
        Route::post('/', 'signup_action')->name('signup_action');
    });
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/signout', [AuthController::class, 'signout'])->name('auth.signout');

    Route::get('/verifyemail', [AuthController::class, 'verifyEmail'])->name('verification.notice');

    Route::middleware(['verified'])->group(function () {
        Route::get('/createorganization', [FirstOrganizationSetupController::class, 'firstCreate'])->name('organization.create.first');

        Route::name('organization.')->prefix('organization')->group(function() {
            Route::post('/create', [OrganizationController::class, 'store'])->name('create');
            Route::post('/join', [OrganizationController::class, 'join'])->name('join');
        });
    });

    Route::middleware(['verified', 'check_organization'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/switch/{organization}', [OrganizationController::class, 'switch'])->name('dashboard.switch');
    });

    // Route::prefix('/car')->controller(CarController::class)->name('car.')->group(function () {
    //     Route::get('/', 'index')->name('index');
    //     Route::get('/add', 'add')->name('store');
    //     Route::get('/update/{car?}', 'update')->name('update');
    //     Route::get('/delete/{car?}', 'delete')->name('delete');
    // });
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return response()->json([
        'success' => true,
        'message' => 'Verification link sent!',
    ], 200);
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');