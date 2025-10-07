<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('login', [AuthController::class, 'login']);
Route::post('loginproses', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);

Route::controller(HomeController::class)->group(function () {
    Route::get('layanan/{idkategori}', 'layanan');
    Route::get('layanandetail/{idlayanan}', 'layanandetail');

    Route::get('portfolio', 'portofolio');
    Route::get('portfoliodetail/{idportofolio}', 'portofoliodetail');

    Route::get('tentang', 'tentang');
    Route::get('kontak', 'kontak');
});

Route::middleware(['auth'])->controller(AdminController::class)->group(function () {
    Route::get('panel', 'dashboard');

    // portofolio
    Route::get('panel/portofolio', 'portofolio');
    Route::post('panel/portofoliosimpan', 'portofoliosimpan');
    Route::get('panel/portofolioedit/{id}', 'portofolioedit');
    Route::put('panel/portofolioupdate/{id}', 'portofolioupdate');
    Route::delete('panel/portofoliohapus/{id}', 'portofoliohapus');

    // kategori
    Route::get('panel/kategori', 'kategori');
    Route::post('panel/kategorisimpan', 'kategorisimpan');
    Route::get('panel/kategoriedit/{id}', 'kategoriedit');
    Route::put('panel/kategoriupdate/{id}', 'kategoriupdate');
    Route::delete('panel/kategorihapus/{id}', 'kategorihapus');

    // layananrumah
    Route::get('panel/layananrumah', 'layananrumah');
    Route::post('panel/layananrumahsimpan', 'layananrumahsimpan');
    Route::get('panel/layananrumahedit/{id}', 'layananrumahedit');
    Route::put('panel/layananrumahupdate/{id}', 'layananrumahupdate');
    Route::delete('panel/layananrumahhapus/{id}', 'layananrumahhapus');

    // layananinterior
    Route::get('panel/layananinterior', 'layananinterior');
    Route::post('panel/layananinteriorsimpan', 'layananinteriorsimpan');
    Route::get('panel/layananinterioredit/{id}', 'layananinterioredit');
    Route::put('panel/layananinteriorupdate/{id}', 'layananinteriorupdate');
    Route::delete('panel/layananinteriorhapus/{id}', 'layananinteriorhapus');
});
