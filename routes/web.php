<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
  Auth\RegistrationController
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

    Route::prefix('register')->group( function() {
        Route::get('/', [RegistrationController::class, 'getView'])->name('register.get');
        Route::post('/', [RegistrationController::class, 'registerUser'])->name('register.post');
    });

});

Route::middleware('auth')->group( function() {

});

