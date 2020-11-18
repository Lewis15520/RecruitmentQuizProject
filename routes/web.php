<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    Auth\RegistrationController,
    Auth\AuthenticationController
};


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

Route::middleware('guest')->group( function() {

    Route::redirect('/', 'login');

    Route::prefix('register')->group( function() {
        Route::get('/', [RegistrationController::class, 'getView'])->name('register.get');
        Route::post('/', [RegistrationController::class, 'registerUser'])->name('register.post');
    });

    Route::prefix('login')->group( function() {
        Route::get('/', [AuthenticationController::class, 'getView'])->name('login.get');
        Route::post('/', [AuthenticationController::class, 'authenticateUser'])->name('login.post');
    });

});

Route::middleware('auth')->group( function() {

    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        echo "Hello there!";
    })->name('home');

});

