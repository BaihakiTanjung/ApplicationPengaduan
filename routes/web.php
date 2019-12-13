<?php

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

Route::get('', function () {
    return view('home');
});
Route::get('/', function () {
    return view('landingpage');
});
Route::get('/beranda', function () {
    return view('beranda');
})->middleware('auth');
Route::get('/carapengunaan', function () {
    return view('cara');
})->middleware('auth');
Route::get('/show', function () {
    return view('laporanpengaduan.show');
});
Route::get('/laporanpengaduan', function () {
    return view('laporanpengaduan.index');
});
Route::get('/buatpengaduan', function () {
    return view('laporanpengaduan.create');
});


Route::get('/santri', function () {
    return view('santri.index');
});
Route::get('/ustadz', function () {
    return view('ustadz.index');
});

Route::get('/main', function () {
    return view('layouts.main');
})->middleware('auth');
Route::get('/test', function () {
    return view('test');
});
// Route::get('/asal', function () {
//     return view('asal.index');
// });
// Route::get('/createasal', function () {
//     return view('asal.create');
// });
Route::get('/jenis', function () {
    return view('jenis.index');
});

Route::get('/pengguna', function () {
    return view('pengguna.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/asaltambah', function () {
    return view('asal.create');
});
Route::get('/createdby', function () {
    return view('created');
});
Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/createjenis', function () {
//     return view('jenis.create');
// });
// Route::get('/createkategori', function () {
//     return view('kategori.create');
// });

Route::resource('pengaduan1', 'Pengaduan1Controller')->middleware('auth');
Route::get('/pengaduan1/{id}/delete', 'Pengaduan1Controller@destroy')->middleware('auth');
Route::resource('pengguna1', 'Pengguna1Controller')->middleware('auth');

Route::resource('pengaduan', 'PengaduanController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Logout dibuat dengan cara manual
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route dibawah yang bisa di akses Admin dan Ustadz
Route::group(['middleware' => ['auth', 'checkRole:Admin']], function () {
    Route::resource('asal', 'AsalController');
    Route::get('/asal/{id}/delete', 'AsalController@destroy');
    Route::resource('jenis', 'JenisController');
    Route::get('/jenis/{id}/delete', 'JenisController@destroy');
    Route::resource('kategori', 'KategoriController');
    Route::get('/kategori/{id}/delete', 'KategoriController@destroy');
    Route::resource('santri', 'SantriController');
    Route::get('/santri/{id}/delete', 'SantriController@destroy');
    Route::resource('ustadz', 'UstadzController');
    Route::get('/ustadz/{id}/delete', 'UstadzController@destroy');
    Route::get('/pengaduan/{id}/delete', 'PengaduanController@destroy');
    Route::resource('pengguna', 'PenggunaController');
    Route::get('/pengguna/{id}/delete', 'PenggunaController@destroy');
    Route::get('asalpdf', 'AsalController@cetakpdf');
    Route::get('asalexcel', 'AsalController@export');
    Route::get('jenispdf', 'JenisController@cetakpdf');
    Route::get('jenisexcel', 'JenisController@export');
    Route::get('kategoripdf', 'KategoriController@cetakpdf');
    Route::get('kategoriexcel', 'KategoriController@export');
    Route::get('santripdf', 'SantriController@cetakpdf');
    Route::get('santriexcel', 'SantriController@export');
    Route::get('ustadzexcel', 'UstadzController@excel');
    Route::get('ustadzpdf', 'UstadzController@pdf');
    Route::get('pengaduanexcel', 'PengaduanController@excel');
    Route::get('pengaduanpdf', 'PengaduanController@pdf');
});
Route::group(['middleware' => ['auth', 'checkRole:Ustadz,Admin']], function () {
    Route::resource('asal', 'AsalController');
    Route::get('/asal/{id}/delete', 'AsalController@destroy');
    Route::resource('jenis', 'JenisController');
    Route::get('/jenis/{id}/delete', 'JenisController@destroy');
    Route::resource('kategori', 'KategoriController');
    Route::get('/kategori/{id}/delete', 'KategoriController@destroy');
    Route::resource('santri', 'SantriController');
    Route::get('/santri/{id}/delete', 'SantriController@destroy');
    Route::resource('ustadz', 'UstadzController');
    Route::get('/ustadz/{id}/delete', 'UstadzController@destroy');
    Route::get('/pengaduan/{id}/delete', 'PengaduanController@destroy');
    // Route::resource('pengguna', 'PenggunaController');
    // Route::get('/pengguna/{id}/delete', 'PenggunaController@destroy');
    Route::get('asalpdf', 'AsalController@cetakpdf');
    Route::get('asalexcel', 'AsalController@export');
    Route::get('jenispdf', 'JenisController@cetakpdf');
    Route::get('jenisexcel', 'JenisController@export');
    Route::get('kategoripdf', 'KategoriController@cetakpdf');
    Route::get('kategoriexcel', 'KategoriController@export');
    Route::get('santripdf', 'SantriController@cetakpdf');
    Route::get('santriexcel', 'SantriController@export');
    Route::get('ustadzexcel', 'UstadzController@excel');
    Route::get('ustadzpdf', 'UstadzController@pdf');
    Route::get('pengaduanexcel', 'PengaduanController@excel');
    Route::get('pengaduanpdf', 'PengaduanController@pdf');
});
