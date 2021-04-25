<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resources([
        'home' => HomeController::class,
    ]);
    Route::resources([
        'video' => VideoController::class,
    ]);
    Route::get('/videos/{video}/score', [App\Http\Controllers\VideoController::class, 'score'])->name('videos.score');
    Route::get('/videos/{video}/delete', [App\Http\Controllers\VideoController::class, 'destroy'])->name('video.delete');
    Route::resources([
        'profile' => ProfileController::class,
    ]);
    Route::resources([
        'score' => ScoreController::class,
    ]);
    Route::group(['middleware' => 'role:admin', 'prefix' => 'Admin'], function () {
        Route::resources([
            'admin' => AdminController::class,
        ]);
        Route::resources([
            'user' => UserController::class,
        ]);
        Route::get('/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
    });
});

Auth::routes();
