<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a1', function () {
    return view('test');
});



// Route::get('/user/form', [UserController::class, 'showRegistrationForm'])->name('user.form');
// Route::post('/user/store', [UserController::class, 'register'])->name('user.store');

Route::get('/user/form', [UserController::class, 'showUsers'])->name('user.form');
Route::post('/user/store', [UserController::class, 'storeUser'])->name('user.store');
Route::get('/user/dashboard', [UserController::class, 'showData']);
Route::get('/user/show', [UserController::class, 'showall'])->name('user.show');
Route::get('/user/show/{id}', [UserController::class, 'showbyID']);

