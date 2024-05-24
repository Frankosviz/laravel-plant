<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

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

Route::get('/', [PlantController::class,'indexHome'])->name('home');
Route::get('/plants', [PlantController::class,'index'])->name('plants.index');
Route::get('/plants/{id}', [PlantController::class,'show'])->name('plants.show');
