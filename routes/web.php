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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware(['auth'])->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index'])->name('index');
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
});

Route::get('/items/{id}',[App\Http\Controllers\ItemController::class, 'show'])->name('items.show');
Route::get('/items/{id}/edit',[App\Http\Controllers\ItemController::class, 'edit'])->name('items.edit');
Route::put('/items/{id}/update', [App\Http\Controllers\ItemController::class, 'update'])->name('items.update');
Route::get('/items/{id}/destroy', [App\Http\Controllers\ItemController::class, 'destroy'])->name('items.destroy');
Route::get('/', [App\Http\Controllers\ItemController::class, 'index'])->name('search');
Route::get('/exportexcel', [App\Http\Controllers\ItemController::class, 'exportExcel'])->name('exportexcel');
Route::get('/exportpdf', [App\Http\Controllers\ItemController::class, 'exportPDF'])->name('exportpdf');
Route::post('/items/delete', [App\Http\Controllers\ItemController::class, 'delete'])->name('items.delete');

});