<?php

use App\Http\Controllers\PrepareController;
use App\Http\Controllers\PublishController;
use App\Http\Controllers\QueueStatusController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [QueueStatusController::class, 'status']);

Route::get('/prepare', [PrepareController::class, 'prepare']);
Route::get('/publish', [PublishController::class, 'publish']);
