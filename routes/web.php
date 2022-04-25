<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeDarkModeController;
use App\Http\Controllers\changeSidebarStateController;
use App\Http\Controllers\BidangKeahlianController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PaketKurikulumController;
use App\Http\Controllers\DosenController;
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
    Route::get('/dashboard', function () {return view('dashboard.read');})->name('dashboard');

    Route::controller(BidangKeahlianController::class)->group(function () {
        Route::get('/bidangKeahlian', 'read')->name('BidangKeahlianCreate');
        Route::get('/bidangKeahlian/create', 'showCreate')->name('BidangKeahlianStoreView');
        Route::post('/bidangKeahlian/create', 'saveCreate')->name('BidangKeahlianStore');
        Route::get('/bidangKeahlian/update/{id}/', 'showUpdate')->name('BidangKeahlianUpdateView');
        Route::post('/bidangKeahlian/update', 'saveUpdate')->name('BidangKeahlianUpdate');
    });
   
    Route::controller(MataKuliahController::class)->group(function () {
        Route::get('/mataKuliah', 'read')->name('MataKuliahCreate');
        Route::get('/mataKuliah/create', 'showCreate')->name('MataKuliahStoreView');
        Route::post('/mataKuliah/create', 'saveCreate')->name('MataKuliahStore');
        Route::get('/mataKuliah/update/{id}/', 'showUpdate')->name('MataKuliahUpdateView');
        Route::post('/mataKuliah/update', 'saveUpdate')->name('MataKuliahUpdate');
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

    Route::controller(SksMaksController::class)->group(function () {
        Route::get('/sksMaks/update', 'showUpdate')->name('sksMaksUpdateView');
        Route::post('/sksMaks/update', 'saveUpdate')->name('sksMaksUpdate');
    });
    
    Route::controller(KelasController::class)->group(function () {
        Route::get('/kelas', 'read')->name('kelas');
        Route::get('/kelas/create', 'showCreate')->name('KelasStoreView');
        Route::post('/kelas/create', 'saveCreate')->name('KelasStore');   
        Route::get('/kelas/update/{id}/', 'showUpdate')->name('KelasUpdateView');
        Route::post('/kelas/update', 'saveUpdate')->name('KelasUpdate');  
    });
    Route::controller(MengajarController::class)->group(function () {
        Route::get('/kelas/mengajar', 'read')->name('mengajar'); 
    });
});


Route::post('/changeDarkMode', [ChangeDarkModeController::class, 'store']); 
Route::post('/changeSideBarState', [changeSidebarStateController::class, 'store']); 

//bidangKeahlian


require __DIR__.'/auth.php';
