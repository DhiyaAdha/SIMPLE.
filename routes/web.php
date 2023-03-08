<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\NegaraController;

use App\Http\Controllers\PegawaiController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\GolonganDarahController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
// Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [DashboardController::class,'index']);
    Route::resource('pegawai', PegawaiController::class); 

    Route::resource('user', UserController::class);    


    Route::get('pegawai/pdf', [PegawaiController::class,'pdf'])->name('pegawai-pdf');
    Route::get('pegawai/pelatihan/{id}',[PelatihanController::class,'pel']);
    Route::resource('pegawai.pelatihan', PelatihanController::class);
    Route::get('pegawai/pendidikan/{id}',[PendidikanController::class,'pel']);
    Route::resource('pegawai.pendidikan', PendidikanController::class);
    Route::get('pegawai/pengalaman/{id}',[PengalamanController::class,'pel']);
    Route::resource('pegawai.pengalaman', PengalamanController::class);
    Route::get('pegawai/pdf', [PegawaiController::class,'pdf'])->name('pegawai-pdf');
    


    // Route::middleware('auth')->group(function () {
// });
    


// Route::group(['middleware' => ['auth', 'ceklevel:1']], function () {
    
//         // Route::get('/', [DashboardController::class,'index'])->middleware('auth');
//         Route::get('/', [DashboardController::class,'index']);
//         Route::resource('pegawai', PegawaiController::class);    
//         Route::get('pegawai/pelatihan/{id}',[PelatihanController::class,'pel']);
//         Route::resource('pegawai.pelatihan', PelatihanController::class);
//         Route::get('pegawai/pendidikan/{id}',[PendidikanController::class,'pel']);
//         Route::resource('pegawai.pendidikan', PendidikanController::class);
//         Route::get('pegawai/pengalaman/{id}',[PengalamanController::class,'pel']);
//         Route::resource('pegawai.pengalaman', PengalamanController::class);

//         Route::get('pegawai/pdf', [PegawaiController::class,'pdf'])->name('pegawai-pdf');
//         Route::get('pegawai/pdf', [PegawaiController::class,'pdf'])->name('pegawai-pdf');
// });

// Route::group(['middleware' => ['auth', 'ceklevel:1,2']], function () { 
//     Route::get('/', [DashboardController::class,'index'])->middleware('auth');

// });

    // Route::resource('pendidikan', PendidikanController::class);
    // Route::resource('pelatihan', PelatihanController::class);
    // Route::resource('pengalaman', PengalamanController::class);    
    // Route::resource('agama', AgamaController::class);
    // Route::resource('negara', NegaraController::class);
    // Route::resource('darah', GolonganDarahController::class);
    // Route::resource('keluarga', KeluargaController::class);
    // Route::get('chart', [DashboardController::class,'chart']);
    


require __DIR__.'/auth.php';
