<?php
namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipeMobilController;


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

Route::get('/welcome', function () {
    echo "Selamat datang di laravel";
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/mobil',[MobilController::class,'index']);
Route::get('/mobil/create',[MobilController::class,'create']); //memanggil form
Route::post('/mobil/simpanData',[MobilController::class,'store']); //mengirim request

Route::get('/merk',[MerkController::class,'index']);
Route::get('/merk/create',[MerkController::class,'create']);
Route::post('/merk/simpan-data',[MerkController::class,'store']);

Route::get('/merk/edit/{id}',[MerkController::class,'edit']);
Route::post('/merk/update/{id}',[MerkController::class,'update']);
Route::get('/merk/delete/{id}',[MerkController::class,'delete']);

Route::get('/tipe', [TipeMobilController::class, 'index'])->name('tipe.index');
Route::get('/tipe/create', [TipeMobilController::class, 'create'])->name('tipe.create');
Route::post('/tipe', [TipeMobilController::class, 'store'])->name('tipe.store');
Route::get('/tipe/{tipeMobil}/edit', [TipeMobilController::class, 'edit'])->name('tipe.edit');
Route::put('/tipe/{tipeMobil}', [TipeMobilController::class, 'update'])->name('tipe.update');
Route::delete('/tipe/{tipeMobil}', [TipeMobilController::class, 'destroy'])->name('tipe.destroy');