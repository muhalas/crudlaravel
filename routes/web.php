<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArankaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/arankas', [ArankaController::class, 'index'])->name('arankas');
Route::get('/tambahData', [ArankaController::class, 'tambahdata'])->name('tambahData');
Route::post('/insert', [ArankaController::class, 'insert'])->name('insert');
Route::get('/tampildata/{id}', [ArankaController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [ArankaController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [ArankaController::class, 'deletedata'])->name('deletedata');

Route::get('/chartDataTable', [ArankaController::class, 'chartDataTable'])->name('chartDataTable');
Route::get('/periode', [ArankaController::class, 'periode'])->name('periode');
Route::get('/periodes', [ArankaController::class, 'periodes'])->name('periodes');
