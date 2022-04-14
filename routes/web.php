<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeDarkModeController;
use App\Http\Controllers\changeSidebarStateController;
use App\Http\Controllers\BidangKeahlianController;
use App\Http\Controllers\MataKuliahController;

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
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.read');
})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/create', function () {
    return view('dashboard.create');
})->middleware(['auth'])->name('dashboardCreate');
Route::get('/dashboard/update', function () {
    return view('dashboard.update');
})->middleware(['auth'])->name('dashboardUpdate');

// Route::get('/bidangKeahlian', function () {
//     return view('bidangKeahlian.read');
// })->middleware(['auth'])->name('bidangKeahlian');
// Route::get('/bidangKeahlian/update', function () {
//     return view('bidangKeahlian.update');
// })->middleware(['auth'])->name('BidangKeahlianUpdate');
// Route::get('/bidangKeahlian/create', function () {
//     return view('bidangKeahlian.create');
// })->middleware(['auth'])->name('BidangKeahlianCreate');
Route::get('/bidangKeahlian', [BidangKeahlianController::class, 'create'])->middleware(['auth'])->name('BidangKeahlianCreate');
Route::get('/bidangKeahlian/create', [BidangKeahlianController::class, 'showCreate'])->middleware(['auth'])->name('BidangKeahlianStoreView');
Route::post('/bidangKeahlian/create', [BidangKeahlianController::class, 'saveCreate'])->middleware(['auth'])->name('BidangKeahlianStore');

// Route::get('/mataKuliah', function () {
//     return view('mataKuliah.read');
// })->middleware(['auth'])->name('mataKuliah');
// Route::get('/mataKuliah/create', function () {
//     return view('mataKuliah.create');
// })->middleware(['auth'])->name('mataKuliahCreate');
// Route::get('/mataKuliah/update', function () {
//     return view('mataKuliah.update');
// })->middleware(['auth'])->name('mataKuliahUpdate');
Route::get('/mataKuliah', [MataKuliahController::class, 'create'])->middleware(['auth'])->name('MataKuliahCreate');
Route::get('/mataKuliah/create', [MataKuliahController::class, 'showCreate'])->middleware(['auth'])->name('MataKuliahStoreView');
Route::post('/mataKuliah/create', [MataKuliahController::class, 'saveCreate'])->middleware(['auth'])->name('MataKuliahStore');
Route::get('/mataKuliah/update', [MataKuliahController::class, 'showUpdate'])->middleware(['auth'])->name('MataKuliahUpdateView');
Route::post('/mataKuliah/update', [MataKuliahController::class, 'saveUpdate'])->middleware(['auth'])->name('MataKuliahUpdate');

Route::get('/paketKurikulum', function () {
    return view('paketKurikulum.read');
})->middleware(['auth'])->name('paketKurikulum');
Route::get('/paketKurikulum/create', function () {
    return view('paketKurikulum.create');
})->middleware(['auth'])->name('paketKurikulumCreate');
Route::get('/paketKurikulum/update', function () {
    return view('paketKurikulum/update');
})->middleware(['auth'])->name('paketKurikulumUpdate');

Route::get('/kelas', function () {
    return view('kelas.read');
})->middleware(['auth'])->name('kelas');
Route::get('/kelas/update', function () {
    return view('kelas.update');
})->middleware(['auth'])->name('kelasUpdate');
Route::get('/kelas/create', function () {
    return view('kelas.create');
})->middleware(['auth'])->name('kelasCreate');


Route::post('/changeDarkMode', [ChangeDarkModeController::class, 'store']); 
Route::post('/changeSideBarState', [changeSidebarStateController::class, 'store']); 

//bidangKeahlian


require __DIR__.'/auth.php';
