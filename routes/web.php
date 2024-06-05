<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\KatagoriController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasHotelController;
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

Route::get('/', [PageController::class,'index']);



Auth::routes();

Route::get('/reservasi', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::post('/reservasi', [PageController::class, 'pesanKamar'])->middleware('verified');
// Route::get('/penulis', 'PenulisController@index')->name('penulis.index');
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // route untuk kamarcontroller
    Route::get('/admin/kamar', [KamarController::class, 'index']);
    Route::get('/admin/kamar/create', [KamarController::class, 'create']);
    Route::post('/admin/kamar/create', [KamarController::class, 'store']);
    Route::get('/admin/kamar/{kamar}', [KamarController::class, 'edit']);
    Route::put('/admin/kamar/{kamar}', [KamarController::class, 'update']);
    Route::delete('/admin/kamar/{kamar}', [KamarController::class, 'destroy']);

    //kategori
    Route::get('/admin/kategori', [KatagoriController::class, 'index']);


    // user
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::get('/admin/user/create', [UserController::class, 'create']);
    Route::post('/admin/user/create', [UserController::class, 'store']);
    Route::get('/admin/user/{user}', [UserController::class, 'edit']);
    Route::put('/admin/user/{user}', [UserController::class, 'update']);
    Route::delete('/admin/user/{user}', [UserController::class, 'destroy']);

    // reservasi
    Route::get('/resepsionis/reservasi', [ReservasiController::class, 'index']);
    Route::get('/resepsionis/reservasi/create', [ReservasiController::class, 'create']);
    Route::post('/resepsionis/reservasi/create', [ReservasiController::class, 'store']);
    Route::get('/resepsionis/reservasi/{reservasi}', [ReservasiController::class, 'edit']);
    Route::put('/resepsionis/reservasi/{reservasi}', [ReservasiController::class, 'update']);
    Route::delete('/resepsionis/reservasi/{reservasi}', [ReservasiController::class, 'destroy']);

    // fasilitas hotel
    Route::get('/admin/fasilitashotel', [FasilitasHotelController::class, 'index']);
    Route::get('/admin/fasilitashotel/create', [FasilitasHotelController::class, 'create']);
    Route::post('/admin/fasilitashotel/create', [FasilitasHotelController::class, 'store']);
    Route::get('/admin/fasilitashotel/{fasilitashotel}/edit', [FasilitasHotelController::class, 'edit']);
    Route::post('/admin/fasilitashotel/{fasilitashotel}', [FasilitasHotelController::class, 'update']);
    Route::delete('/admin/fasilitashotel/{fasilitas_hotel}', [FasilitasHotelController::class, 'destroy']);


    // fasilitas kamar
    Route::get('/admin/fasilitas_kamar', [FasilitasKamarController::class, 'index']);
    Route::get('/admin/fasilitas_kamar/create', [FasilitasKamarController::class, 'create']);
    Route::post('/admin/fasilitas_kamar/create', [FasilitasKamarController::class, 'store']);
    Route::get('/admin/fasilitas_kamar/{fasilitas_kamar}', [FasilitasKamarController::class, 'edit']);
    Route::post('/admin/fasilitas_kamar/{fasilitas_kamar}', [FasilitasKamarController::class, 'update']);
    Route::delete('/admin/fasilitas_kamar/{fasilitas_kamar}', [FasilitasKamarController::class, 'destroy']);

    Route::post('/status/{id}', [ReservasiController::class, 'status']);

});
