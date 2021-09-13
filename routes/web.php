<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


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
    return redirect()->route('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('Nosotros');
})->name('nosotros');

Route::get('/productos', function () {
    return view('nosotros');
})->name('productos');

Route::get('/contacto', function () {
    return view('Nosotros');
})->name('contacto');

Route::get('/mapa', function () {
    return view('mapa');
})->name('mapa');

Route::get('/fondo-inversion', function () {
    return view('fondoInversion');
})->name('fondoInversion');

Route::get('/broker-financiero', function () {
    return view('brokerFinanciero');
})->name('brokerFinanciero');

Route::get('/forex', function () {
    return view('inversionInmobiliaria');
})->name('inversionInmobiliaria');

Route::post('/sendMail', function (Request $request) {
    $request->validate([
        'nombre' => 'required|max:45',
        'tel' => 'required|min:10|max:10|numeric',
        'asunto' => 'required|max:255',
    ]);
    Mail::to('joseagustinsolorzano@gmail.com')->send(new SendMailable($request));
    return redirect()->back();
})->name('mail');