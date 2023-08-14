<?php
use App\Http\controllers\AuthController;
use App\Http\controllers\DashboardController;
use App\Http\controllers\HostpotController;
use App\Http\controllers\MitraController;
use App\Http\controllers\TransaksiController;
use App\Http\controllers\TrafficController;
use App\Http\controllers\LandingController;
use App\Http\controllers\PemesananController;
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

// Route::get('welcome', function () {
//     return view('welcome');
// });

//routing landing page
Route::get('/', [LandingController::class, 'index'])->name('landing-page.index');
Route::get('/FormSosmed', [LandingController::class, 'FormSosmed'])->name('landing-page.form-sosmed');
Route::get('/FormStreaming', [LandingController::class, 'FormStreaming'])->name('landing-page.form-streaming');
Route::get('/FormGame', [LandingController::class, 'FormGame'])->name('landing-page.form-game');
Route::get('/checkout', [LandingController::class, 'create'])->name('pesan');
Route::post('/bayar', [LandingController::class, 'bayar'])->name('bayar.post');
Route::get('/goback', [LandingController::class, 'goBack'])->name('goback');
Route::get('/voucher/{id}', [LandingController::class, 'pdf'])->name('pdf');

// Route::post('/midtrans-callback', [LandingController::class, 'callback']);


//login
Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginAuth'])->name('login.post');
Route::post('logout',[AuthController::class, 'logout'])->name('logout');

//dashboard
Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('dashboard/cpu',[DashboardController::class, 'cpu'])->name('dashboard.cpu');

//hotspot-voucher
Route::get('/hotspot/voucher', [HostpotController::class, 'voucher'])->name('voucher');
Route::post('/hotspot/voucher', [HostpotController::class, 'addvoucher'])->name('addvoucher.post');
Route::post('/hotspot/voucher/generate', [HostpotController::class, 'generatevoucher'])->name('generatevoucher.post');
Route::post('/hotspot/voucher/update', [HostpotController::class, 'updatevoucher'])->name('updatevoucher.post');
Route::get('/hotspot/voucher/delete/{id}', [HostpotController::class, 'deletevoucher'])->name('deletevoucher');
Route::get('/hotspot/voucher/print/{id}', [HostpotController::class, 'printvoucher'])->name('printvoucher');
Route::post('/hotspot/voucher/save', [HostpotController::class, 'save'])->name('save.post');

//hotspot-profile
Route::get('/hotspot/profile', [HostpotController::class, 'profile'])->name('profile');
Route::post('/hotspot/profile/add', [HostpotController::class, 'addprofile'])->name('addprofile.post');
Route::post('/hotspot/profile/update', [HostpotController::class, 'updateprofile'])->name('updateprofile.post');
Route::get('/hotspot/profile/delete/{id}', [HostpotController::class, 'deleteprofile'])->name('deleteprofile');

//Hotspot-active
Route::get('/hotspot/status', [HostpotController::class, 'active'])->name('active');
Route::get('/hotspot/status/active', [HostpotController::class, 'time'])->name('active.time');

//Hotspot-scheduler
Route::get('/hotspot/scheduler', [HostpotController::class, 'scheduler'])->name('scheduler');

//Mitra
Route::get('mitra',[MitraController::class, 'mitra'])->name('mitra');
Route::post('mitra',[MitraController::class, 'addmitra'])->name('addmitra.post');
Route::post('/mitra/edit/{id}', [MitraController::class, 'ubah'])->name('ubah');
Route::get('/mitra/delete/{id}', [MitraController::class, 'deleteMitra'])->name('deleteMitra');

//transaksi
Route::get('transaksi',[TransaksiController::class, 'transaksi'])->name('transaksi');
Route::get('/transaksi/delete/{id}', [TransaksiController::class, 'destroy'])->name('destroy');
Route::get('/transaksiPDF/{tglawal}/{tglakhir}', [TransaksiController::class, 'cetakPDF'])->name('cetakPDF');
Route::get('/transaksi/{id}', [TransaksiController::class, 'ambilRouter'])->name('getrouter');

//pemesanan
Route::get('/pemesanan', [PemesananController::class, 'pemesanan'])->name('keranjang');
Route::post('/pemesanan/tambah', [PemesananController::class, 'PesanVoucher'])->name('PesanVoucher.post');
Route::post('/pemesanan/upload/{id}', [PemesananController::class, 'UploadGambar'])->name('upload');
Route::get('/pemesanan/{id}', [PemesananController::class, 'GeneratePemesanan'])->name('getpemesanan');
Route::get('/pemesanan/hapus/{id}', [PemesananController::class, 'destroy'])->name('destroy_');
Route::get('/pemesananPDF/{tglawal}/{tglakhir}', [PemesananController::class, 'savePDF'])->name('savePDF');