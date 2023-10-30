<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\HadirController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'tampil']);

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin' , 'middleware' =>['auth']] , function(){

Route::get('/',function() {
    return view('admin.index');
});
Route::resource('pegawai',PegawaiController::class);
Route::resource('kehadiran',KehadiranController::class);
Route::resource('hadir',HadirController::class);
Route::resource('absen',AbsenController::class);
Route::resource('users', UserController::class)->middleware('admin');

});
Route::get('/home',[FrontendController::class, 'tampil']);
// routes/web.php


use App\Http\Controllers\ExcelController;

Route::get('/cetak-report-provinsi', [ExcelController::class, 'getReportProvinsi'])->name('cetak.report');
Route::post('/cetak-report-provinsi', [ExcelController::class, 'ReportProvinsi'])->name('cetak.report.proses');
Route::get('/cetak-laporan-kasus-excel', [ExcelController::class, 'cetakExcel'])->name('cetak.laporan.kasus.excel');




use App\Http\Controllers\ReportController;
Route::get('report', [ReportController::class, 'getReportProvinsi']);
Route::post('laporanprov', [ReportController::class, 'ReportProvinsi']);
Route::get('pdfkasus', [ReportController::class,'kasus'])->name('pdfkasus');


