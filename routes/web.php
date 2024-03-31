<?php
use App\Http\Controllers\PengController;
use Illuminate\Support\Facades\Route;

Route::resource('/pengalamans', PengController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengalamans', [PengController::class, 'showPengalaman'])->name('pengalamans');
Route::get('/pengalaman_index', [PengController::class, 'index'])->name('pengindex');
Route::post('/pengalaman_post', [PengController::class, 'store'])->name('pengpost');