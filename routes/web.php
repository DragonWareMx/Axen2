<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

Route::get('/aviso-de-privacidad', function () {
    return view('politicaPrivacidad');
})->name('privacidad');

Route::get('/legal', function () {
    return view('legal');
})->name('legal');


Route::get('/developers', function () {
    return view('developers');
})->name('developers');


//registro
Route::get('/registro-visita', function () {
    return view('registro');
})->name('registro');

Route::post('/registro-visita', [App\Http\Controllers\VisitorController::class, 'store'])->name('visita.store');

//REGISTRO DE CITAS
Route::get('/cita-oficina', [App\Http\Controllers\DateController::class, 'oficinas'])->name('cita.oficina'); //inicio de registro cita
Route::get('/registro-dev', [App\Http\Controllers\DateController::class, 'createDev'])->name('create.developer'); //para registrar developer
Route::post('/cita-oficina-dev', [App\Http\Controllers\DateController::class, 'developers'])->name('cita.developer'); //segunda de registro cita
Route::post('/cita-registro-dev', [App\Http\Controllers\DateController::class, 'storeDev'])->name('cita.nuevodev'); //guarda nuevo developer
Route::post('/cita-fecha', [App\Http\Controllers\DateController::class, 'fechas'])->name('cita.fechas');//tercera de registro cita
Route::post('/cita-store', [App\Http\Controllers\DateController::class, 'storeDate'])->name('cita.store');//se registra la cita en bd



Route::post('/sendMail', function (Request $request) {
    $request->validate([
        'nombre' => 'required|max:45',
        'tel' => 'required|min:10|max:10|numeric',
        'asunto' => 'required|max:255',
        'mail' => 'required|email'
    ]);
    Mail::to('marketing@axencapital.com')->send(new SendMailable($request));
    return redirect()->back();
})->name('mail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
