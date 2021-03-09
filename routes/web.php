<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

//Route::get('/video/{video}', [App\Http\Controllers\VideoController::class, 'show'])->name('video.show');


//Route::get('/videos', [App\Http\Controllers\VideoController::class, 'index'])->name('videos');

//Route::post('/videos/store', [App\Http\Controllers\VideoController::class, 'store'])->name('videos.store');

//Route::get('/videos/{video}/edit', [App\Http\Controllers\VideoController::class, 'edit'])->name('videos.edit');

//Route::PUT('/videos/{video}/update', [App\Http\Controllers\VideoController::class, 'update'])->name('videos.update');

//Route::get('/videos/new', [App\Http\Controllers\VideoController::class, 'create'])->name('videos.new');

//Route::get('/videos/{video}/show', [App\Http\Controllers\VideoController::class, 'show'])->name('videos.show');

Route::get('/videos/{video}/score', [App\Http\Controllers\VideoController::class, 'score'])->name('videos.score');

//Route::get('/videos/{video}/delete', [App\Http\Controllers\VideoController::class, 'destroy'])->name('videos.destroy');
Route::get('/videos/{video}/delete', [App\Http\Controllers\VideoController::class, 'destroy'])->name('video.delete');


Route::resources([
    'score' => ScoreController::class,
]);

Route::resources([
    'profile' => ProfileController::class,
]);

Route::resources([
    'home' => HomeController::class,
]);

Route::resources([
    'video' => VideoController::class,
]);

Route::resources([
    'user' => UserController::class,
]);

Route::prefix('guest')->middleware('role:guest')->group(function () {

});

Route::prefix('user')->middleware('role:user')->group(function () {

});

// Matches The "/loader/users" URL
Route::prefix('loader')->middleware('role:loader')->group(function () {
    //Route::get('videos/{video}/score', [App\Http\Controllers\VideoController::class, 'score'])->name('videos.score');
});

Route::prefix('admin')->middleware('role:admin')->group(function () {
    //Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::resources([
        'admin' => AdminController::class,
    ]);
    Route::get('/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');

});

Auth::routes();
