<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\EvaluatorController;
use Illuminate\Support\Facades\Route;

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

// Route::view('/admin', 'admin');
Route::get('/', [LoginController::class, 'loginpage'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin-dashboard', [AdminController::class, 'admin'])->name('admin-home');
Route::get('/penetapan-periode', [AdminController::class, 'periode'])->name('periode');
Route::get('/plotting-evaluator', [AdminController::class, 'plotting'])->name('plotting');
Route::post('/penetapan-periodes/{kode_periode}', [AdminController::class, 'setperiode'])->name('setperiode');
Route::get('/plotting-evaluator/{idperiode?}', [AdminController::class, 'plotting'])->name('plotting');
Route::post('/plotting-evaluator-save/{idperiode}', [AdminController::class, 'savedata'])->name('savedata');

// Operator
Route::get('/operator-dashboard', [OperatorController::class, 'operator'])->name('operator-home');
Route::get('/operator-profilPengusul', [OperatorController::class, 'profilpengusul'])->name('profil-pengusul');
Route::get('/operator-editProfilPengusul', [OperatorController::class, 'editprofilpengusul'])->name('edit-profil-pengusul');
Route::get('/operator-kerjasamaPendidikan', [OperatorController::class, 'kerjasamapendidikan'])->name('kerjasama-pendidikan');
Route::get('/operator-kerjasamaPenelitian', [OperatorController::class, 'kerjasamapenelitian'])->name('kerjasama-penelitian');
Route::get('/operator-kerjasamaPengabdian', [OperatorController::class, 'kerjasamapengabdian'])->name('kerjasama-pengabdian');//belom ada UI-nya
Route::get('/operator-kualitasInputMahasiswa', [OperatorController::class, 'kualitasinputmahasiswa'])->name('kualitas-input-mahasiswa');
Route::get('/operator-MahasiswaAsing', [OperatorController::class, 'mahasiswaasing'])->name('mahasiswa-asing');
Route::get('/operator-sdm-ewmpdtps', [OperatorController::class, 'sdmewmpdtps'])->name('sdm-ewmp-dtps');
Route::get('/operator-sdm-profildosen', [OperatorController::class, 'profildosen'])->name('profil-dosen');
Route::get('/operator-sdm-dosenpembimbing', [OperatorController::class, 'dosenpembimbing'])->name('dosen-pembimbing');
Route::get('/operator-sdm-dosenTidakTetap', [OperatorController::class, 'dosentidaktetap'])->name('dosen-tidaktetap');
Route::get('/operator-sdm-rekognisi', [OperatorController::class, 'rekognisi'])->name('rekognisi');
Route::get('/operator-sdm-sdmpenelitian', [OperatorController::class, 'sdmpenelitian'])->name('sdm-penelitian');
Route::get('/operator-sdm-publikasi', [OperatorController::class, 'sdmpublikasi'])->name('publikasi');
Route::get('/operator-sdm-sitasi', [OperatorController::class, 'sitasi'])->name('sitasi');
Route::get('/operator-sdm-paten', [OperatorController::class, 'paten'])->name('paten');
Route::get('/operator-sdm-hki', [OperatorController::class, 'hki'])->name('hki');
Route::get('/operator-sdm-teknologitepatguna', [OperatorController::class, 'teknologitepatguna'])->name('teknologi-tepat-guna');
Route::get('/operator-sdm-bookchapter', [OperatorController::class, 'bookchapter'])->name('book-chapter');
Route::get('/operator-sdm-pkm', [OperatorController::class, 'sdmpkm'])->name('sdm-pkm'); 
Route::get('/operator-keuanganSarpras', [OperatorController::class, 'keuangan'])->name('keuangan');
Route::get('/operator-pendidikan-kepuasanMahasiswa', [OperatorController::class, 'kepuasanmahasiswa'])->name('kepuasan-mahasiswa');
Route::get('/operator-pendidikan-kurikulum', [OperatorController::class, 'kurikulum'])->name('kurikulum');
Route::get('/operator-pendidikan-integrasi', [OperatorController::class, 'integrasi'])->name('integrasi');
Route::get('/operator-penelitian', [OperatorController::class, 'penelitian'])->name('penelitian');
Route::get('/operator-luarantridharma-prestasiakademikmhs', [OperatorController::class, 'prestasiakademikmhs'])->name('prestasi-akademik-mhs');
Route::get('/operator-luarantridharma-ipklulusan', [OperatorController::class, 'ipklulusan'])->name('ipk-lulusan');
Route::get('/operator-luarantridharma-prestasi-nonakademik-mhs', [OperatorController::class, 'prestasinonakademikmhs'])->name('prestasi-nonakademik-mhs');
Route::get('/operator-luarantridharma-lulusan', [OperatorController::class, 'lulusan'])->name('lulusan');
Route::get('/operator-PKM', [OperatorController::class, 'pengabdian'])->name('pengabdian');
Route::get('/operator-cekvalidasi', [OperatorController::class, 'cekvalidasiLKPS'])->name('cek-validasi-LKPS');

// Evaluator
Route::get('/evaluator-dashboard', [EvaluatorController::class, 'evaluator'])->name('evaluator-home');