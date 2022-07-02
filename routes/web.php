<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegMitraController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/ngurah_laundry', function () {
    return view('toko.ngurah_laundry');
});

Route::resource('pengguna', PenggunaController::class);

Route::resource('mitra', MitraController::class);

Route::resource('pemesanan', OrderController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/logmitra', [LoginController::class, 'index']);
Route::post('/logmitra', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/regmitra', [RegMitraController::class, 'index']);
Route::post('/regmitra', [RegMitraController::class, 'store']);


Route::get('/pesan', [PemesananController::class, 'index']);
Route::post('/pesan', [PemesananController::class, 'store']);