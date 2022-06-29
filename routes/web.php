<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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


Route::group(['middleware' => ['auth']], function(){

    Route::resource('spps', SppController::class);
    Route::resource('rombels', RombelController::class); 
    Route::resource('pembayarans', PembayaranController::class);
    // Route::get('export', [PembayaranController::class, 'export']);
    Route::resource('siswas', SiswaController::class); 
    Route::resource('petugas', PetugasController::class); 
    Route::get('/transaksi/spp/detail/{id}', [PembayaranController::class, 'show']);
    Route::get('/historys', [HomeController::class, 'history']);//waktu ngejalanin masuk ke homecontroller yang functiom mya 'history'
    Route::get('/j-historys', [HomeController::class, 'historyJ']);
    
    Route::get('export', [PembayaranController::class, 'export'])->name('export');

    Route::get('get-data/{nisn}', [PembayaranController::class, "getdata"]); //ketika url dijalankan, masuk ke pembayarancontroller yang function nya getdata
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

Auth::routes();

// Route::get