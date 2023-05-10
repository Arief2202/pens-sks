<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeDarkModeController;
use App\Http\Controllers\changeSidebarStateController;
use App\Http\Controllers\BidangKeahlianController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PaketKurikulumController;
use App\Http\Controllers\NamaKurikulumController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SksMaksController;
use App\Http\Controllers\MengajarController;
use Illuminate\Support\Facades\Auth;

use App\Exports\ExportAll;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
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
    return view('LandingArief');
});

// Route::get('/landingArief', function () {
//     return view('LandingArief');
// });

// Route::get('/landingFarhan', function () {
//     return view('LandingFarhan');
// });

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
        Route::get('/dosen/beban', 'bebanDosen');
        Route::get('/dosen/beban/{id}', 'detailBebanDosen');
    });

    Route::controller(PaketKurikulumController::class)->group(function () {
        Route::get('/paketKurikulum', 'read')->name('PaketKurikulumCreate');
        Route::post('/paketKurikulum', 'create');
        Route::post('/paketKurikulum/delete', 'delete');
        // Route::get('/paketKurikulum', 'indexExport');
        Route::get('/paketKurikulum/export_excel', 'export_excel');
    });

    Route::controller(NamaKurikulumController::class)->group(function () {
        Route::get('/nama-kurikulum', 'read')->name('KurikulumCreate');
        Route::get('/nama-kurikulum/create', 'showCreate')->name('KurikulumStoreView');
        Route::post('/nama-kurikulum/create', 'saveCreate')->name('KurikulumStore');
        Route::get('/nama-kurikulum/update/{id}/', 'showUpdate')->name('KurikulumUpdateView');
        Route::post('/nama-kurikulum/update', 'saveUpdate')->name('KurikulumUpdate');
        Route::get('/kurikulum/history', 'history')->name('KurikulumHistory');
        
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
        Route::get('/mengajar/lihat', 'lihat'); 
        Route::post('/mengajar', 'create');
        Route::post('/mengajar/delete', 'delete');
        Route::post('/mengajar/ubahKurikulum', 'ubahKurikulum');
    });

    Route::get('/export', function(){
        if(Auth::user()->role == '1') return (new ExportAll())->download('Pembebanan.xlsx');
        else return redirect('/dashboard');
    });
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/siswa/export_excel', 'SiswaController@export_excel');
});


Route::post('/changeDarkMode', [ChangeDarkModeController::class, 'store']); 
Route::post('/changeSideBarState', [changeSidebarStateController::class, 'store']); 

//bidangKeahlian


require __DIR__.'/auth.php';
