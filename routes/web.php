<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::controller(BarangController::class)
    ->name('barang.')
    ->prefix('/barang')
    ->group(function () {
        Route ::get('/', 'index')->name('index');
        Route ::get('/create','create')->name('create');
        Route ::post('/', 'store')->name('store');
        Route ::get('/{id}','show')->name('show');
    });