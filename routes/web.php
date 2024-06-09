<?php
use App\Http\Controllers\PengController;
use App\Http\Controllers\EduController;
use App\Http\Controllers\SertiController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResuController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::resource('/pengalamans', PengController::class);
Route::resource('/edukasis', EduController::class);
Route::resource('/sertifikats', SertiController::class);
Route::resource('/skills', SkillController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::controller(ResuController::class)->group(function(){
//     Route::get('/', 'index');
// });
Route::get('/', [ResuController::class, 'index'])->name('welcome');

Route::get('/pengalamans', [PengController::class, 'showPengalaman'])->name('pengalamans');
Route::get('/pengalaman_index', [PengController::class, 'index'])->name('pengindex');
Route::post('/pengalaman_post', [PengController::class, 'store'])->name('pengpost');

Route::get('/edukasis', [EduController::class, 'showEdukasi'])->name('edukasis');
Route::get('/edukasi_index', [EduController::class, 'index'])->name('eduindex');
Route::post('/edukasi_post', [EduController::class, 'store'])->name('edupost');

Route::get('/sertifikats', [SertiController::class, 'showSertifikat'])->name('sertifikats');
Route::get('/serti_index', [SertiController::class, 'index'])->name('serindex');
Route::post('/serti_post', [SertiController::class, 'store'])->name('serpost');

Route::get('/skills', [SkillController::class, 'showSkill'])->name('skills');
Route::get('/skill_index', [SkillController::class, 'index'])->name('skindex');
Route::post('/skill_post', [SkillController::class, 'store'])->name('skpost');

Route::get('/login', [LoginController::class, 'showLogin'])->name("login");
Route::post('/login/send', [LoginController::class, 'login'])->name("sendLogin");

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');