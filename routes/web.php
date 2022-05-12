<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeDarkModeController;
use App\Http\Controllers\changeSidebarStateController;
use App\Http\Controllers\BidangKeahlianController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PaketKurikulumController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SksMaksController;
use App\Http\Controllers\MengajarController;
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

Route::middleware('auth')->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'read')->name('dashboard');
    });

    Route::controller(BidangKeahlianController::class)->group(function () {
        Route::get('/bidangKeahlian', 'read');
        Route::get('/bidangKeahlian/create', 'showCreate');
        Route::post('/bidangKeahlian/create', 'saveCreate');
        Route::get('/bidangKeahlian/update/{id}/', 'showUpdate');
        Route::post('/bidangKeahlian/update', 'saveUpdate');
    });

    Route::controller(MataKuliahController::class)->group(function () {
        Route::get('/mataKuliah', 'read');
        Route::get('/mataKuliah/create', 'showCreate');
        Route::post('/mataKuliah/create', 'saveCreate');
        Route::get('/mataKuliah/update/{id}', 'showUpdate');
        Route::post('/mataKuliah/update', 'saveUpdate');
        Route::get('/mataKuliah/delete/{id}', 'delete');
    });

    Route::controller(dosenController::class)->group(function () {
        Route::get('/dosen', 'read')->name('DosenCreate');
        Route::get('/dosen/create', 'showCreate')->name('DosenStoreView');
        Route::post('/dosen/create', 'saveCreate')->name('DosenStore');
        Route::post('/dosen/update/biodata', 'updateEditBiodata');
        Route::get('/dosen/update/biodata/{id}/', 'viewEditBiodata')->name('DosenUpdate1View');
        Route::get('/dosen/update/bidangKeahlian/{id}/', 'viewEditBidangKeahlian')->name('DosenUpdate2View');
        Route::post('/dosen/update/bidangKeahlian/add', 'saveEditBidangKeahlian');
        Route::post('/dosen/update/bidangKeahlian/delete', 'deleteEditBidangKeahlian');
        Route::get('/dosen/delete/{id}', 'deleteDosen');     
        Route::get('/dosen/profile', 'bebanDosen');
    });

    Route::controller(PaketKurikulumController::class)->group(function () {
        Route::get('/paketKurikulum', 'read')->name('PaketKurikulumCreate');
        Route::post('/paketKurikulum', 'create');
        Route::post('/paketKurikulum/delete', 'delete');
    });

    Route::controller(KurikulumController::class)->group(function () {
        Route::get('/kurikulum', 'read')->name('KurikulumCreate');
        Route::get('/kurikulum/create', 'showCreate')->name('KurikulumStoreView');
        Route::post('/kurikulum/create', 'saveCreate')->name('KurikulumStore');
        Route::get('/kurikulum/update/{id}/', 'showUpdate')->name('KurikulumUpdateView');
        Route::post('/kurikulum/update', 'saveUpdate')->name('KurikulumUpdate');
        
    });    
    Route::controller(KelasController::class)->group(function () {
        Route::get('/kelas', 'read')->name('kelas');
        Route::get('/kelas/create', 'showCreate')->name('KelasStoreView');
        Route::post('/kelas/create', 'saveCreate')->name('KelasStore');   
        Route::get('/kelas/update/{id}/', 'showUpdate')->name('KelasUpdateView');
        Route::post('/kelas/update', 'saveUpdate')->name('KelasUpdate');          
        Route::get('/kelas/delete/{id}/', 'deleteKelas');
    });
    Route::controller(MengajarController::class)->group(function () {
        Route::get('/mengajar', 'read')->name('mengajar'); 
        Route::post('/mengajar', 'create');
        Route::post('/mengajar/delete', 'delete');
        Route::post('/mengajar/ubahKurikulum', 'ubahKurikulum');
    });
});


Route::post('/changeDarkMode', [ChangeDarkModeController::class, 'store']); 
Route::post('/changeSideBarState', [changeSidebarStateController::class, 'store']); 

//bidangKeahlian


require __DIR__.'/auth.php';
