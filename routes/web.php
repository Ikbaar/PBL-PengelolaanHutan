<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OutputLulusanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlasanController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AlasanBannerController;
use App\Http\Controllers\Admin\AdminOutputLulusanController;
use App\Http\Controllers\Admin\SejarahController;
use App\Http\Controllers\Admin\VisiController;
use App\Http\Controllers\Admin\MisiController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\PLPController;
use App\Http\Controllers\Admin\AkreditasiController;
use App\Http\Controllers\Admin\KalenderController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\MapLocationController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class, 'index'])->name('index');
Route::get('/berita/{id}', [IndexController::class, 'beritaDetail'])->name('berita-detail');
Route::get('/berita-lainnya', [IndexController::class, 'beritaLainnya'])->name('berita-lainnya');

Route::get('/output-lulusan/{id}', [IndexController::class, 'outputLulusanDetail'])->name('output-lulusan-detail');
Route::get('/output-lulusan',[OutputLulusanController::class, 'index'])->name('output-lulusan.index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/alasan', [AlasanController::class, 'index'])->name('alasan.index');
Route::get('/alasan/create', [AlasanController::class, 'create'])->name('alasan.create');
Route::post('/alasan/create', [AlasanController::class, 'store'])->name('alasan.store');
Route::get('/alasan/edit/{id}', [AlasanController::class, 'edit'])->name('alasan.edit');
Route::put('/alasan/update/{id}', [AlasanController::class, 'update'])->name('alasan.update');
Route::delete('/alasan/delete/{id}', [AlasanController::class, 'destroy'])->name('alasan.delete');

Route::get('/admin/alasan-banner', [AlasanBannerController::class, 'index'])->name('admin.alasan-banner.index');
Route::get('/admin/alasan-banner/edit/{id}', [AlasanBannerController::class, 'edit'])->name('admin.alasan-banner.edit');
Route::put('/admin/alasan-banner/update/{id}', [AlasanBannerController::class, 'update'])->name('admin.alasan-banner.update');

Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin.berita.index');
Route::get('/admin/berita/create', [AdminBeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita/store', [AdminBeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/edit/{id}', [AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/admin/berita/update/{id}', [AdminBeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/delete/{id}', [AdminBeritaController::class, 'delete'])->name('admin.berita.delete');

Route::get('/admin/output-lulusan', [AdminOutputLulusanController::class, 'index'])->name('admin.output-lulusan.index');
Route::get('/admin/output-lulusan/create', [AdminOutputLulusanController::class, 'create'])->name('admin.output-lulusan.create');
Route::post('/admin/output-lulusan/store', [AdminOutputLulusanController::class, 'store'])->name('admin.output-lulusan.store');
Route::get('/admin/output-lulusan/edit/{id}', [AdminOutputLulusanController::class, 'edit'])->name('admin.output-lulusan.edit');
Route::put('/admin/output-lulusan/update/{id}', [AdminOutputLulusanController::class, 'update'])->name('admin.output-lulusan.update');
Route::delete('/admin/output-lulusan/delete/{id}', [AdminOutputLulusanController::class, 'delete'])->name('admin.output-lulusan.delete');

Route::get('/profil', [IndexController::class, 'profil'])->name('profil');

Route::get('admin/sejarah', [SejarahController::class, 'index'])->name('admin.sejarah.index');
Route::get('admin/sejarah/create', [SejarahController::class, 'create'])->name('admin.sejarah.create');
Route::post('admin/sejarah', [SejarahController::class, 'store'])->name('admin.sejarah.store');
Route::get('admin/sejarah/{id}/edit', [SejarahController::class, 'edit'])->name('admin.sejarah.edit');
Route::put('admin/sejarah/{id}', [SejarahController::class, 'update'])->name('admin.sejarah.update');
Route::delete('admin/sejarah/{id}', [SejarahController::class, 'destroy'])->name('admin.sejarah.destroy');

Route::get('admin/visi', [VisiController::class, 'index'])->name('admin.visi.index');
Route::get('admin/visi/create', [VisiController::class, 'create'])->name('admin.visi.create');
Route::post('admin/visi', [VisiController::class, 'store'])->name('admin.visi.store');
Route::get('admin/visi/{id}/edit', [VisiController::class, 'edit'])->name('admin.visi.edit');
Route::put('admin/visi/{id}', [VisiController::class, 'update'])->name('admin.visi.update');
Route::delete('admin/visi/{id}', [VisiController::class, 'destroy'])->name('admin.visi.destroy');

Route::get('admin/misi', [MisiController::class, 'index'])->name('admin.misi.index');
Route::get('admin/misi/create', [MisiController::class, 'create'])->name('admin.misi.create');
Route::post('admin/misi', [MisiController::class, 'store'])->name('admin.misi.store');
Route::get('admin/misi/{id}/edit', [MisiController::class, 'edit'])->name('admin.misi.edit');
Route::put('admin/misi/{id}', [MisiController::class, 'update'])->name('admin.misi.update');
Route::delete('admin/misi/{id}', [MisiController::class, 'destroy'])->name('admin.misi.destroy');

Route::get('/staff', [IndexController::class, 'staff'])->name('staff');


Route::get('admin/dosen', [DosenController::class, 'index'])->name('admin.dosen.index');
Route::get('admin/dosen/create', [DosenController::class, 'create'])->name('admin.dosen.create');
Route::post('admin/dosen', [DosenController::class, 'store'])->name('admin.dosen.store');
Route::get('admin/dosen/{id}/edit', [DosenController::class, 'edit'])->name('admin.dosen.edit');
Route::put('admin/dosen/{id}', [DosenController::class, 'update'])->name('admin.dosen.update');
Route::delete('admin/dosen/{id}', [DosenController::class, 'destroy'])->name('admin.dosen.destroy');

Route::get('admin/plp', [PLPController::class, 'index'])->name('admin.plp.index');
Route::get('admin/plp/create', [PLPController::class, 'create'])->name('admin.plp.create');
Route::post('admin/plp', [PLPController::class, 'store'])->name('admin.plp.store');
Route::get('admin/plp/{id}/edit', [PLPController::class, 'edit'])->name('admin.plp.edit');
Route::put('admin/plp/{id}', [PLPController::class, 'update'])->name('admin.plp.update');
Route::delete('admin/plp/{id}', [PLPController::class, 'destroy'])->name('admin.plp.destroy');

Route::get('/akreditasi', [IndexController::class, 'akreditasi'])->name('akreditasi');


Route::get('admin/akreditasi', [AkreditasiController::class, 'index'])->name('admin.akreditasi.index');
Route::get('admin/akreditasi/create', [AkreditasiController::class, 'create'])->name('admin.akreditasi.create');
Route::post('admin/akreditasi', [AkreditasiController::class, 'store'])->name('admin.akreditasi.store');
Route::get('admin/akreditasi/{id}/edit', [AkreditasiController::class, 'edit'])->name('admin.akreditasi.edit');
Route::put('admin/akreditasi/{id}', [AkreditasiController::class, 'update'])->name('admin.akreditasi.update');
Route::delete('admin/akreditasi/{id}', [AkreditasiController::class, 'destroy'])->name('admin.akreditasi.destroy');


Route::get('/fasilitas', [IndexController::class, 'fasilitas'])->name('fasilitas');
Route::view('/lab-tanah-air', 'labs.tanah_dan_air')->name('lab.tanah_air');
Route::view('/lab-konservasi', 'labs.konservasi')->name('lab.konservasi');
Route::view('/lab-persemaian', 'labs.persemaian')->name('lab.persemaian');
Route::view('/lab-silfikutur', 'labs.silfikutur')->name('lab.silfikutur');
Route::view('/lab-perencanaan', 'labs.perencanaan')->name('lab.perencanaan');
Route::view('/lab-sosial_ekonomi', 'labs.sosial_ekonomi')->name('lab.sosial_ekonomi');

Route::view('/fasilitas', 'fasilitas')->name('fasilitas');


//route kalender akademik
Route::get('admin/kalender', [KalenderController::class, 'index'])->name('admin.kalender.index');
Route::get('admin/kalender/create', [KalenderController::class, 'create'])->name('admin.kalender.create');
Route::post('kalender', [KalenderController::class, 'store'])->name('admin.kalender.store');
Route::get('kalender/{id}/edit', [KalenderController::class, 'edit'])->name('admin.kalender.edit');
Route::put('admin/kalender/{id}', [KalenderController::class, 'update'])->name('admin.kalender.update');
Route::delete('admin/kalender/{id}', [KalenderController::class, 'destroy'])->name('admin.kalender.destroy');

//ini jadwal untuk tampilan front
Route::get('/jadwal-kuliah', function () {
    return view('jadwal'); // jadwal.blade.php
})->name('jadwal-kuliah');

// Untuk download file
Route::get('/download-jadwal', function () {
    $path = public_path('files/jadwal-kuliah-genap-2025.pdf');
    return response()->download($path, 'Jadwal-Kuliah-Genap-2025.pdf');
});

//ini route jadwal yang bagian crud
Route::get('admin/jadwal', [JadwalController::class, 'index'])->name('admin.jadwal.index'); // tampil daftar file
Route::get('admin/jadwal/create', [JadwalController::class, 'create'])->name('admin.jadwal.create'); // form upload
Route::post('admin/jadwal', [JadwalController::class, 'store'])->name('admin.jadwal.store'); // proses upload
Route::delete('admin/jadwal/{filename}', [JadwalController::class, 'destroy'])->name('admin.jadwal.destroy'); // hapus file

Route::get('/map', [MapLocationController::class, 'index'])->name('map');








