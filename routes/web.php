<?php

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
use App\Http\Controllers\VotaController;

Route::get('/', [VotaController::class, 'index']);
Route::get('/candidatos/create', [VotaController::class, 'create']);
Route::get('/candidatos/{id}', [VotaController::class, 'show']);
Route::post('/candidatos', [VotaController::class, 'store']);

