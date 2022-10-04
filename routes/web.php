<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\DetalleEnvioController;
use Illuminate\Support\Facades\Route;
use App\Models\Envio;
use App\Models\User;
use App\Models\Ciudades;
use App\Models\Areas;
use App\Models\Sedes;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');

});

// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::post('register', [RegisterController::class,'register'])->name('register');

// Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
// Route::emailVerification();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');

Route::resource('users',UserController::class)->names('Admin.users');

Route::post('envio',[EnvioController::class,'nuevo'])->name('envio.nuevo');

Route::get('envio/{id}',[EnvioController::class,'mostrar'])->name('envio.mostrar');

Route::get('envio/{id}/pdf',[EnvioController::class,'pdf'])->name('envio.pdf');

Route::get('envio/{id}/edit',[EnvioController::class,'editar'])->name('envio.editar');

Route::post('DetalleEnvio',[DetalleEnvioController::class,'nuevo'])->name('DetalleEnvio.nuevo');

Route::get('DetalleEnvio/{id}',[DetalleEnvioController::class,'mostrar'])->name('DetalleEnvio.mostrar');

Route::get('ciudad',[CiudadesController::class,'consultar'])->name('ciudad.consultar');

Route::get('Usuarios', function(){
    return 'Acceso correcto';
})->middleware(['auth:sanctum','Aux']);

Route::get('no-autorizado', function(){
    return 'no-autorizado';
});

Route::get('Colaborador', function(){
    return 'Cargo Colaborador';
})->middleware(['auth:sanctum','Mensa']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $envios = Envio::all()->where('tipo_envio','=','I');
    $users = User::all()->where('num_docu','=','234');

    return view('dashboard',compact(['envios','users']));
})->name('Inicio');

Route::middleware(['auth:sanctum', 'verified'])->get('/Interna', function () {
    $tipo = 'I';
    $nombreTipo = 'Correspondencia Interna';
    $envios = Envio::all()->where('tipo_envio','=','I');
    $usuario = User::find(Auth::User()->id);
    $ciudad = Ciudades::all();
    $ciudadRemi = Ciudades::find($usuario->cod_ciud);
    $area = Areas::all();
    $sede = Sedes::all();
    $sedeRemi = Sedes::find($usuario->cod_sede);
    $areaRemi = Areas::find($usuario->cod_area);
    $usuaRemi = User::all();

    return view('create',compact(['envios','ciudad','ciudadRemi','area','sede',
                                  'tipo','nombreTipo','usuario','sedeRemi','areaRemi','usuaRemi']));
})->name('Interna');

Route::middleware(['auth:sanctum', 'verified'])->get('/Cajas', function () {
    $tipo = 'C';
    $nombreTipo = 'Cajas';
    $envios = Envio::all()->where('tipo_envio','=','C');
    $usuario = User::find(Auth::User()->id);
    $ciudad = Ciudades::all();
    $ciudadRemi = Ciudades::find($usuario->cod_ciud);
    $area = Areas::all();
    $sede = Sedes::all();
    $sedeRemi = Sedes::find($usuario->cod_sede);
    $areaRemi = Areas::find($usuario->cod_area);
    $usuaRemi = User::all();

    return view('create',compact(['envios','ciudad','ciudadRemi','area','sede',
                                  'tipo','nombreTipo','usuario','sedeRemi','areaRemi','usuaRemi']));
})->name('Cajas');



Route::middleware(['auth:sanctum', 'verified'])->get('/Muestras', function () {
    $tipo = 'M';
    $nombreTipo = 'Muestras';
    $envios = Envio::all()->where('tipo_envio','=','M');
    $usuario = User::find(Auth::User()->id);
    $ciudad = Ciudades::all();
    $ciudadRemi = Ciudades::find($usuario->cod_ciud);
    $area = Areas::all();
    $sede = Sedes::all();
    $sedeRemi = Sedes::find($usuario->cod_sede);
    $areaRemi = Areas::find($usuario->cod_area);
    $usuaRemi = User::all();

    return view('create',compact(['envios','ciudad','ciudadRemi','area','sede',
                                  'tipo','nombreTipo','usuario','sedeRemi','areaRemi','usuaRemi']));
})->name('Muestras');

Route::middleware(['auth:sanctum', 'verified'])->get('/Externa', function () {
    $tipo = 'E';
    $nombreTipo = 'Correspondencia Externa';
    $envios = Envio::all()->where('tipo_envio','=','E');
    $usuario = User::find(Auth::User()->id);
    $ciudad = Ciudades::all();
    $ciudadRemi = Ciudades::find($usuario->cod_ciud);
    $area = Areas::all();
    $sede = Sedes::all();
    $sedeRemi = Sedes::find($usuario->cod_sede);
    $areaRemi = Areas::find($usuario->cod_area);
    $usuaRemi = User::all();



    return view('create',compact(['envios','ciudad','ciudadRemi','area','sede',
                                  'tipo','nombreTipo','usuario','sedeRemi','areaRemi','usuaRemi']));
})->name('Correspondencia');

