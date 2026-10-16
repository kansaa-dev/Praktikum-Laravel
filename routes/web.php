<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


//route sederhana

//Route::get('/surat-masuk', function (){
//     return 'Halaman Surat Masuk';
// });

//route dengan parameter
// Route::get('/surat-masuk/{id}', function ($id){
//     return 'Detail Surat Masuk dengan ID:' .$id;
// });

//named route
// Route::get('/surat-masuk', function (){
//     return 'Halaman Surat Masuk';
// })->name('surat-masuk.index');


//php artisan route:list

//route : pintu pertama yang dibaca laravel

//php artisan make:controller SuratMasukController "SuratMasukController" <- Nama file

//surat masuk
Route::get('/surat-masuk',      [SuratMasukController::class, 'index'])->name('surat-masuk.index');
Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');

//surat keluar
Route::get('/surat-keluar',      [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show');