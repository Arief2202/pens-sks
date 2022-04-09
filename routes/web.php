<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangeDarkModeController;
use App\Http\Controllers\changeSidebarStateController;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/bidangKeahlian', function () {
    return view('bidangKeahlian');
})->middleware(['auth'])->name('bidangKeahlian');

Route::get('/mataKuliah', function () {
    return view('mataKuliah');
})->middleware(['auth'])->name('mataKuliah');

Route::get('/paketKurikulum', function () {
    return view('paketKurikulum');
})->middleware(['auth'])->name('paketKurikulum');

Route::get('/kelas', function () {
    return view('kelas');
})->middleware(['auth'])->name('kelas');


Route::post('/changeDarkMode', [ChangeDarkModeController::class, 'store']); 
Route::post('/changeSideBarState', [changeSidebarStateController::class, 'store']); 

require __DIR__.'/auth.php';
