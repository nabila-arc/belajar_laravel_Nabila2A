<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;

//Route::get('/', function () {
    //return view('welcome');
    //return "Hallo namaku adalah Laravel, Salam Kenal";
//});

//agar langsung masuk login
Route::get('/', function(){
return view('login');
});

Route::get('/about', function () {
    //return view('welcome');
    return "<h2>Ini adalah laman About</h2>";
});

//route ke controller Web ke fungsi home
Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga'])
    ->name('kalkulator.segitiga');
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga'])
    ->name('kalkulator.segitiga.hitung');

//route ke controller Dashboard
Route::get('/dashboard',[DashboardController::class, 'home']);
Route::get('/gallery',[DashboardController::class, 'gallery']);    

//route ke controller Employe
Route::get('/employe',[EmployeController::class, 'index']);
Route::get('/employe/create',[EmployeController::class, 'create']);
Route::post('/employe/store',[EmployeController::class, 'store']);
Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']);
Route::put('/employe/{employe}',[EmployeController::class, 'update']);
Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']);

//route ke controller Auth
Route::post('/login',[AuthController::class, 'cek']);
Route::get('/logout',[AuthController::class, 'logout']);
//route group yang harus login dahulu
Route::group(['middleware' => 'islogin'], function(){
Route::get('/dashboard',[DashboardController::class, 'home']);
Route::get('/gallery',[DashboardController::class, 'gallery']);
Route::get('/employe',[EmployeController::class, 'index']);
Route::get('/employe/create',[EmployeController::class, 'create']);
Route::post('/employe/store',[EmployeController::class, 'store']);
Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']);
Route::put('/employe/{employe}',[EmployeController::class, 'update']);
Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']);
Route::get('/logout',[AuthController::class, 'logout']);
});