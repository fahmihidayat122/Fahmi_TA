<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RiwayatTransaksiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/game', [GameController::class, 'index']);
Route::get('/metodepembayaran', [MetodePembayaranController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/riwayattransaksi', [RiwayatTransaksiController::class, 'index']);
