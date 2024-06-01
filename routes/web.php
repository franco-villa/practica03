<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Servicios2Controller;



$servicios = [/*
    ['titulo' => 'Servicios 01'],
    ['titulo' => 'Servicios 02'],
    ['titulo' => 'Servicios 03'],
    ['titulo' => 'Servicios 04'],
    ['titulo' => 'Servicios 05'] */
];

Route::view('/', 'home')->name('home');

Route::view('nosotros', 'nosotros')->name('nosotros');
//Route::get('servicios', 'App\Http\Controllers\ServiciosController@servicios')->name('servicios');
//Route::get('servicios', 'Servicios2Controller@index')->name('servicios');
Route::resource('servicios', Servicios2Controller::class)->except('index', 'show');
Route::view('servicios', 'servicios', compact('servicios'))->name('servicios');
Route::view('contacto', 'contacto')->name('contacto');
