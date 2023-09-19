<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/', function () {
    return view('pages.dashboard');
});

// ROUTE BALITA
Route::get('/balita', function () {
    return view('pages.balita');
});
Route::get('/balita/detail', function () {
    return view('details.detailBalita');
});


// ROUTE LANSIA
Route::get('/lansia', function () {
    return view('pages.lansia');
});
Route::get('/lansia/detail', function () {
    return view('details.detailLansia');
});

// UBAH PIN
Route::get('/ubahPin', function () {
    return view('pages.ubahPin');
});
