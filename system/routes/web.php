<?php

use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::controller(JurusanController::class)->group(function () {
    Route::get('jurusan', 'index');
    Route::get('jurusan/create', 'create');
    Route::post('jurusan/create', 'store');
    Route::get('jurusan/{jurusan}/show', 'show');
    Route::get('jurusan/{jurusan}/edit', 'edit');
    Route::put('jurusan/{jurusan}/edit', 'update');
});
