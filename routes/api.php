<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SceduleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentDetailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticationController;
use App\Http\Controllers\BookController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('/jadwal', JadwalController::class);
Route::apiResource('/scedule', SceduleController::class);
Route::apiResource('/payment', PaymentController::class);
Route::apiResource('/payment_detail', PaymentDetailController::class);

//autentikasi
Route::post('register', [AutenticationController::class, 'register']);
Route::post('login', [AutenticationController::class, 'login']);
Route::get('book', [BookController::class, 'book']);
Route::get('bookall', [BookController::class, 'bookAuth'])->middleware('jwt.verify');
Route::get('user', [AutenticationController::class, 'getAuthenticatedUser'])->middleware('jwt.verify');

