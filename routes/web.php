<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layanan/web-development', function () {
    return view('components.layanan.website');
});
Route::get('/layanan/mobile-apps', function () {
    return view('components.layanan.mobile');
});
Route::get('/layanan/iot', function () {
    return view('components.layanan.iot');
});
Route::get('/portfolio', function () {
    return view('components.portofolio.porto');
});
Route::get('/kontak', function () {
    return view('components.kontak.kontak');
});
