<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    Auth\RegistrationController,
    Auth\AuthenticationController,
    QuizzesController
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

    Route::prefix('quizzes')->group( function() {
        Route::get('/', [QuizzesController::class, 'getIndexView'])->name('quizzes.index');
        Route::get('create', [QuizzesController::class, 'getCreateView'])->name('quizzes.create');
        Route::post('create', [QuizzesController::class, 'createQuiz'])->name('quizzes.store');
    });

});

