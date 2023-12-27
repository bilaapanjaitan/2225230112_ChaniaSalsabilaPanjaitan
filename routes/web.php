<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

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

Route::get('/peserta', [PesertaController::class,'index']);
Route::get('/peserta/create', [PesertaController::class,'create']);
Route::post('/peserta/store', [PesertaController::class,'store']);
Route::get('/peserta/{id}/edit', [PesertaController::class,'edit']);
Route::put('/peserta/{id}', [PesertaController::class,'update']);
Route::delete('/peserta/{id}', [PesertaController::class,'destroy']);
