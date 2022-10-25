<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\SettingsController;

Auth::routes(['register' => true]); //para desactivar el registro de usuario.

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('curso', CursosController::class)->middleware('auth');
Route::resource('profe', ProfesoresController::class)->middleware('auth');
Route::resource('alumno', AlumnosController::class)->middleware('auth');
Route::resource('pago', PagosController::class)->middleware('auth');
Route::resource('notas', NotasController::class)->middleware('auth');

//Route::post('/pagoSave', 'App\Http\Controllers\PagosController@guardarPago')->name("pagoSave")->middleware('auth'); //Guardando Pago
//ruta de materia
//ruta de materia
Route::get('/materias',                [MateriaController::class, 'index']);
Route::get('/materias/create',         [App\Http\Controllers\MateriaController::class, 'create']);
Route::get('/materias/{materia}/edit', [App\Http\Controllers\MateriaController::class, 'edit']);
Route::post('/materias',               [MateriaController::class, 'sendData'])->name('sendData');
Route::put('/materias/{materia}',      [MateriaController::class, 'update'])->name('update');
Route::delete('/materias/{materia}',   [MateriaController::class, 'destroy']);


//Route::get('excel/exportAlumnos', 'App\Http\Controllers\AlumnosController@exportAlumnos')->name("exportAlumnos")->middleware('auth');
//Route::get('/exportPagos', 'App\Http\Controllers\PagosController@exportPagosAlumnos')->name("exportPagosAlumnos")->middleware('auth');


Route::get('/NewPassword',  [SettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [SettingsController::class,'changePassword'])->name('changePassword');


Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
 });

Route::get('alumnos/alumpdf', [App\Http\Controllers\AlumnosController::class, 'alumpdf'])->name('alumnos.alumpdf');
/*Route::get('profes/profpdf', [App\Http\Controllers\ProfesoresController::class, 'profpdf'])->name('profes.profpdf');
*/

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
