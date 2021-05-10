<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
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
Route::get('/penetapan-periode',[AdminController::class,'periode'])->name('periode');
Route::get('/plotting-evaluator',[AdminController::class,'plotting'])->name('plotting');
Route::get('/operator-dashboard',[OperatorController::class, 'operator'])->name('operator-home');
Route::get('/operator-profilPengusul',[OperatorController::class, 'profilpengusul'])->name('profil-pengusul');
Route::get('/operator-editProfilPengusul',[OperatorController::class, 'editprofilpengusul'])->name('edit-profil-pengusul');
Route::get('/operator-kerjasamaPendidikan',[OperatorController::class, 'kerjasamapendidikan'])->name('kerjasama-pendidikan');
Route::get('/operator-kualitasInputMahasiswa',[OperatorController::class, 'kualitasinputmahasiswa'])->name('kualitas-input-mahasiswa');
Route::get('/operator-sdm-ewmpdtps',[OperatorController::class, 'sdmewmpdtps'])->name('sdm-ewmp-dtps');
