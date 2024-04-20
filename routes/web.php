<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/halaman2', function () {
    return view('halaman2');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/About', function () {
    $nama = "Tahu";
    $jk = "pria";
    $pendidikan_terakhir = "smk";
    $pekerjaan = "a";
    return view('biodata',compact('nama', 'jk', 'pendidikan_terakhir', 'pekerjaan'));
});

Route::get('/sample/{nama}/{kelas}', function (Request $request, $nama, $kelas) {
    $nama2 = $nama;
    $kelas2 = $kelas;
    return view('sample',compact('nama2','kelas2'));
});