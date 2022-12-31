<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotasController;
use App\Http\Controllers\ApbdesaController;
use App\Http\Controllers\DataApbdesaController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\MusyawarahController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PerdesaController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
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

// Public controller
Route::controller(PublicController::class)->group(function(){
    // informasi
    Route::get('/', 'index');
    Route::get('/informasiPublic/apbdes', 'apbdes');
    Route::get('/informasiPublic/profil', 'profil');
    Route::get('/informasiPublic/perdes', 'perdes');
    Route::get('/informasiPublic/kegiatan', 'kegiatan');
    Route::get('/informasiPublic/musyawarah', 'musyawarah');
    Route::get('/informasiPublic/kelembagaan', 'kelembagaan');
    Route::get('/informasiPublic/profilKelembagaan/{lembaga:slug}', 'profilKelembagaan');
    Route::get('/informasiPublic/musyawarah/{musyawarah:slug}', 'detailMusyawarah');
    Route::get('/informasiPublic/kegiatan/{kegiatan:slug}', 'detailKegiatan');
    // pelayanan
    Route::get('/pelayananPublic/surat', 'surat');
    Route::get('/pelayananPublic/pengaduan', 'pengaduan');
});

Route::post('/pengaduan/create', [PengaduanController::class, 'aduan']);

Route::controller(AdminController::class)->group(function(){
    Route::get('/dashboard', 'index')->middleware('auth');
    Route::get('/login', 'login')->middleware('guest');
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/logout', 'logout');
});


Route::middleware('auth')->group(function(){

    Route::get('/kegiatan/checkSlug', [KegiatanController::class, 'checkSlug']);
    Route::get('/musyawarah/checkSlug', [MusyawarahController::class, 'checkSlug']);
    Route::get('/lembaga/checkSlug', [LembagaController::class, 'checkSlug']);
    Route::get('/lembaga/kegiatan/store/', [KegiatanController::class, 'storeKegiatanLembaga']);
    Route::get('/lembaga/kegiatan/{lembaga:id}', [KegiatanController::class, 'createKegiatanLembaga']);
    Route::get('/lembaga/kegiatan/delete/{kegiatan:id}', [KegiatanController::class, 'deleteKegiatanLembaga']);
    Route::get('/lembaga/kegiatan/edit/{kegiatan:id}', [KegiatanController::class, 'editKegiatanLembaga']);
    Route::get('/lembaga/kegiatan/updated/{kegiatan:id}', [KegiatanController::class, 'updatedKegiatanLembaga']);
    Route::get('/other/updateLink/{other:id}', [OtherController::class, 'updateLink']);
    Route::get('/other/updateSystem/{other:id}', [OtherController::class, 'updateSystem']);
    Route::get('/other/updateImage/{other:id}', [OtherController::class, 'updateImage']);
    Route::get('/myAcount', [UserController::class, 'myAcount']);
    Route::get('/myAcount/profil/{user:id}', [UserController::class, 'updateMyAcount']);
    Route::post('/masyarakatImport', [MasyarakatController::class, 'importData']);
    Route::get('/masyarakatImport', [MasyarakatController::class, 'exportData']);
    Route::get('/deleteAllMasyarakat', [MasyarakatController::class, 'deleteAllMasyarakat']);
    Route::get('/detailDataMasyarakat', [MasyarakatController::class, 'detail']);
    
    Route::resources([
        '/profilDesa' =>  ProfilDesaController::class,
        '/demografi' => DemografiController::class,
        '/apbdesa' =>  ApbdesaController::class,
        '/dataApbdesa' => DataApbdesaController::class,
        '/perdesa' => PerdesaController::class,
        '/kegiatan' => KegiatanController::class,
        '/musyawarah' => MusyawarahController::class,
        '/lembaga' => LembagaController::class,
        '/jabatan' => JabatanController::class,
        '/anggotas' => AnggotasController::class,
        '/other' => OtherController::class,
        '/pengaduan' => PengaduanController::class,
        '/user' => UserController::class,
        '/masyarakat' => MasyarakatController::class
    ]);
});


// Route::resource('/profilDesa', ProfilDesaController::class);
// Route::resource('/demografi', DemografiController::class);
// Route::resource('/apbdesa', ApbdesaController::class);
// // Route::resource('/dataApbdesa', DataApbdesaController::class);
// Route::resource('/dataApbdesa', DataApbdesaController::class);

