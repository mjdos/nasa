<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{ExemploController,
    MuscleContractilityController};
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/teste', function () {
    return view('welcome');
});

Route::get('/excel', [ExemploController::class, 'index'])->name('index');
Route::post('/importar-excel', [ExemploController::class, 'importarExcel'])->name('importar.excel');

Route::get('/muscleIndex', [MuscleContractilityController::class, 'index'])->name('muscleIndex');
Route::post('/import-csv', [MuscleContractilityController::class, 'import'])->name('import'); 


Route::get('/simulator', function () {
    return view('simulator');
})->name('simulator');

Route::get('/force-data', [MuscleContractilityController::class, 'getForceData']);
