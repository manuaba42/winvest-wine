<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-process', [AuthController::class, 'login_process']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register-process', [AuthController::class, 'register_process']);

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'user.'], function(){
    Route::get('/dashboard', function () {
        return view('welcome');
    });
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/list-wine', [ProductController::class, 'index']);
    Route::get('/contract', [ContractController::class, 'index']);
    Route::get('/detail-wine', [ProductController::class, 'detailWine']);
    Route::get('/transaction-list', [TransactionController::class, 'index']);
    
    
    Route::get('/register', [AuthController::class, 'register']);
    Route::get('/forgot-password', [AuthController::class, 'forgotPass']);
});
