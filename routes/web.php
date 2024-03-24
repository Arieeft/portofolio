<?php
use App\Http\Controllers\PengController;
use Illuminate\Support\Facades\Route;

Route::resource('/pengalamans', PengController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengalamans', [PengController::class, 'showPengalaman'])->name('pengalamans');