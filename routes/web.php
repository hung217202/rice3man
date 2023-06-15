<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LoaiSPController;
Route::resource('admin/loaisp/index', LoaiSPController::class);
