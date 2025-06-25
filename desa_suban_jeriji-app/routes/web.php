<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\BeritadepanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditprofileController;
use App\Http\Controllers\KtpController;
use App\Http\Controllers\KtpverifikassiController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratusahaController;
use App\Http\Controllers\SuratusahaadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuratdomisiliController;
use App\Http\Controllers\SuratdomisiliadminController;
use App\Http\Controllers\SurattidakmampuController;
use App\Http\Controllers\SurattidakmampuadminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanadminController;
use App\Http\Controllers\SuratkelahiranController;
use App\Http\Controllers\SuratlahiradminController;
use App\Http\Controllers\SuratmatiController;
use App\Http\Controllers\SuratmatiadminController;
use App\Http\Controllers\PengantarktpController;
use App\Http\Controllers\PengantarktpadminController;
use App\Http\Controllers\PelengkapController;
use App\Http\Controllers\PengantarkkController;
use App\Http\Controllers\PengantarkkadminController;
use App\Http\Controllers\StatusnikahController;
use App\Http\Controllers\StatusnikahadminController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\RekomendasiadminController;
use App\Http\Controllers\SaranController;

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
Route::get('/', [UtamaController::class, 'indexutama']);

Route::get('/dev', function () {
    return view('layouts.mainadmin');
});

   


Route::middleware(['auth'])->group(function () {
    // route profile
    Route::resource('profile', ProfileController::class)->only(['index', 'update']);

    //route edit profile dan pp
    Route::get('/profile/edit', [EditProfileController::class, 'edit']);
    Route::get('/profile/editpp', [EditProfileController::class, 'editpp']);

    Route::get('/berandauser', [EditProfileController::class, 'beranda']);

    //route ktp user/masyarakat
    Route::resource('ktp', KtpController::class);

    //route pengaduan user
Route::resource('/pengaduanmasyarakat', PengaduanController::class);
    
    

    
});

//route surat {

    //surat usaha
    Route::resource('lihatsuratusaha', SuratusahaController::class)->middleware('verifktp');
    //surat tidak mampu
    Route::resource('/lihatsurattidakmampu', SurattidakmampuController::class)->middleware('verifktp');
    //surat domisili
    Route::resource('/lihatsuratdomisili', SuratdomisiliController::class)->middleware('verifktp');
    // surat ket lahir
    Route::resource('/lihatsuratlahir', SuratkelahiranController::class)->middleware('verifktp');
    // surat ket kematian 
    Route::resource('/lihatsuratmati', SuratmatiController::class)->middleware('auth');
    //surat pengantar ktp
    Route::resource('/lihatsuratpengantarktp', PengantarktpController::class)->middleware('auth');
    //surat pengantar kk
    Route::resource('/lihatsuratpengantarkk', PengantarkkController::class)->middleware('auth');
    //surat keterangan janda/duda
    Route::resource('/lihatsuratstatusnikah', StatusnikahController::class)->middleware('verifktp');
    //surat rekomendasi
    Route::resource('/lihatsuratrekomendasi', RekomendasiController::class)->middleware('auth');

//}


//route cetak surat{

    //cetak surat usaha
    Route::get('/cetaksuratusaha/{id}', [SuratController::class, 'cetaksuratusaha'])->middleware('verifktp');
    //cetak surat domisili
    Route::get('/cetaksuratdomisili/{id}', [SuratController::class, 'cetaksuratdomisili'])->middleware('verifktp');
    //cetak surat ket tidak mampu
    Route::get('/cetaksurattidakmampu/{id}', [SuratController::class, 'cetaksurattidakmampu'])->middleware('verifktp');
    //cetak surat ket lahir
    Route::get('/cetaksuratlahir/{id}', [SuratController::class, 'cetaksuratlahir'])->middleware('verifktp');
    //cetak surat ket kematian
    Route::get('/cetaksuratkematian/{id}', [SuratController::class, 'cetaksuratkematian'])->middleware('auth');
    //cetak surat pengantar ktp
    Route::get('/cetaksuratpengantarktp/{id}', [SuratController::class, 'cetaksuratpengantarktp'])->middleware('auth');
     //cetak surat pengantar kk
     Route::get('/cetaksuratpengantarkk/{id}', [SuratController::class, 'cetaksuratpengantarkk'])->middleware('auth');
    //cetak surat pengantar kk
    Route::get('/cetaksuratketerangannikah/{id}', [SuratController::class, 'cetaksuratnikah']);
    //cetak surat pengantar kk
    Route::get('/cetaksuratrekomendasi/{id}', [SuratController::class, 'cetaksuratrekomendasi']);


    Route::get('/lengkapisuratusaha', [PelengkapController::class, 'usaha'])->middleware('verifktp');

    Route::get('/pelengkapsuratusaha', [PelengkapController::class, 'store'])->middleware('verifktp');

    Route::get('/lengkapisuratkelahiran', [PelengkapController::class, 'kelahiran'])->middleware('verifktp');

    Route::get('/pelengkapsuratkelahiran', [PelengkapController::class, 'storelahir'])->middleware('verifktp');

    Route::get('/lengkapisuratstatus', [PelengkapController::class, 'status'])->middleware('verifktp');

    Route::get('/pelengkapsuratstatus', [PelengkapController::class, 'storestatus'])->middleware('verifktp');

    Route::get('/lengkapisuratpengantarktp', [PelengkapController::class, 'ktp'])->middleware('auth');

    Route::get('/pelengkapsuratpengantarktp', [PelengkapController::class, 'storektp'])->middleware('auth');

    Route::get('/lengkapisuratrekomendasi', [PelengkapController::class, 'rekomendasi'])->middleware('auth');

    Route::get('/pelengkapsuratrekomendasi', [PelengkapController::class, 'storerekomendasi'])->middleware('auth');

    Route::get('/lengkapisuratkk', [PelengkapController::class, 'kk'])->middleware('auth');

    Route::get('/pelengkapsuratkk', [PelengkapController::class, 'storerkk'])->middleware('auth');


//}


//route permintaan surat{

    //verifikasi surat usaha oleh admin
    Route::resource('/permintaansuratusahaadmin', SuratusahaadminController::class)->middleware('admin');
    //verifikasi surat domisili oleh admin
    Route::resource('/permintaansuratdomisiliadmin', SuratdomisiliadminController::class)->middleware('admin');
    //verifikasi surat tidak mampu oleh admin
    Route::resource('/permintaansurattidakmampuadmin', SurattidakmampuadminController::class)->middleware('admin');
    // route surat lahir admin
    Route::resource('/permintaansuratlahiradmin', SuratlahiradminController::class)->middleware('admin');
    //verifikasi surat ket kematian
    Route::resource('/permintaansuratmatiadmin', SuratmatiadminController::class)->middleware('admin');
    //verifikasi surat pengantar ktp
    Route::resource('/permintaansuratpengantarktpadmin', PengantarktpadminController::class)->middleware('admin');
    //verifikasi surat pengantar kk
    Route::resource('/permintaansuratpengantarkkadmin', PengantarkkadminController::class)->middleware('admin');
    //verifikasi surat status nikah
    Route::resource('/permintaansuratstatusnikahadmin', StatusnikahadminController::class)->middleware('admin');
    //verifikasi surat status nikah
    Route::resource('/permintaansuratrekomendasiadmin', RekomendasiadminController::class)->middleware('admin');



//}

//route surat keluar {

    //surat usaha
    Route::get('/suratusahakeluar', [AdminController::class, 'suratusahakeluar'])->middleware('admin');
    //surat domisili
    Route::get('/suratdomisilikeluar', [AdminController::class, 'suratdomisilikeluar'])->middleware('admin');
    //surat tidak mampu
    Route::get('/surattidakmampukeluar', [AdminController::class, 'suratmampukeluar'])->middleware('admin');
    //surat ket lahir
    Route::get('/suratlahirkeluar', [AdminController::class, 'suratlahirkeluar'])->middleware('admin');
    //surat ket kematian
    Route::get('/suratmatikeluar', [AdminController::class, 'suratmatikeluar'])->middleware('admin');
    //surat pengantar ktp
    Route::get('/suratpengantarktpkeluar', [AdminController::class, 'suratpengantarktpkeluar'])->middleware('admin');

//}

//beranda admin
Route::get('/berandaadmin', [AdminController::class, 'verifikasiktp'])->middleware('admin');

Route::get('/semuasuratkeluar', [AdminController::class, 'all'])->middleware('admin');

Route::get('/permintaansuratadmin', [AdminController::class, 'permintaan'])->middleware('admin');









Route::get('/riwayatpengaduan', [AdminController::class, 'riwayatpengaduan'])->middleware('admin');

//berita admin
Route::resource('berita', BeritaController::class)->middleware('admin');

//verifikasi ktp oleh admin
Route::resource('kartu', KartuController::class)->middleware('admin');






//daftar surat surat
Route::get('/surat/daftarsurat', [SuratController::class, 'daftarsurat']);






//route pangaduan admin
Route::resource('/pengaduanadmin', PengaduanadminController::class)->middleware('admin');












Route::resource('/saran', SaranController::class);


Route::get('/beranda/berita', [BeritadepanController::class, 'berita']);
Route::get('/berita/detail/{id}', [BeritadepanController::class, 'detail']);
Route::get('/cetak/surat', [BeritadepanController::class, 'surat']);


Route::get('/surat/cari', [AdminController::class, 'cariminta'])->middleware('admin');
// admin
// Route::get('/verifikasi/ktp', [KtpverifikassiController::class, 'index']);
// Route::get('/ktp/detail/{id}', [KtpverifikassiController::class, 'detail']);
// Route::get('/ktp/ubah/{id}', [KtpverifikassiController::class, 'ubah']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
