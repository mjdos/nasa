<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{ExemploController,
    MuscleContractilityController};


Route::get('/', function () {
    return view('index');
})->name('index');

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
Route::get('/force-data', [MuscleContractilityController::class, 'getForceData'])->name('datagrafic');

Route::get('/simulator', function () {
    return view('simulator');
})->name('simulator');



Route::get('/simulator_radar', function () {
    return view('simulator_radar');
})->name('simulator_radar');

Route::get('/simulator_bar', function () {
    return view('simulator_bar');
})->name('simulator_bar');

Route::get('/simulator_polar', function () {
    return view('simulator_polar');
})->name('simulator_polar');
