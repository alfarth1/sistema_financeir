<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CapacitacaoController;
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


Route::get('/', [CapacitacaoController::class, 'index'])->middleware(['auth'])->name('inicio3');;
Route::get('/dashboard', [CapacitacaoController::class, 'index'])->middleware(['auth'])->name('inicio');;
Route::get('/inicio', [CapacitacaoController::class, 'index'])->middleware(['auth'])->name('inicio2');;
Route::get('/congregacao', [CapacitacaoController::class, 'congregacao'])->middleware(['auth'])->name('congregacao');;
Route::get('/pessoas', [CapacitacaoController::class, 'pessoas'])->middleware(['auth'])->name('pessoas');;

require __DIR__.'/auth.php';
