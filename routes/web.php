<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

/* ---------------------------------------------------------------------------------- */

/* VALIDACIONES LOGIN */
Route::get('/', function () {
    return view('auth.login');
});


/* USUARIOS */
Route::get('/usuarios_create', function () {
    return view('auth.login');
});

Route::get(' ', function () {
    return view('auth.login');
});


/* PRODUCTOS */
Route::get(' ', function () {
    return view('auth.login');
});

Route::get(' ', function () {
    return view('auth.login');
});


/* PROVEEDORES */
Route::get(' ', function () {
    return view('auth.login');
});

Route::get(' ', function () {
    return view('auth.login');
});


/* CLIENTES */
Route::get(' ', function () {
    return view('auth.login');
});

Route::get(' ', function () {
    return view('auth.login');
});

/* ---------------------------------------------------------------------------------- */

Auth::routes();

/* HOME */
Route::get('/home', [HomeController::class, 'index'])->name('home');

/* INDEX */
Route::get('/', [HomeController::class, 'index'])->name('index');

/* LOG OUT */
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

/*  USUARIOS    */
Route::get('/usuarios_create', [UserController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios_show', [UserController::class, 'show'])->name('usuarios.show');

/*  PRODUCTOS   */


/*  PROVEEDORES   */


/*  CLIENTES     */


/*----------------------------------------------------------------------------------------------*/
/*                                          METODOS                                     */


/* Guardar Usuarios */
Route::post('/usuarios_create', [UserController::class, 'store'])->name('usuarios.store');

/* Editar Usuarios */
Route::get('/usuarios_edit_{usuario}', [UserController::class, 'edit'])->name('usuarios.edit');

/* Actualizar Usuario */
Route::put('usuarios_{usuario}', [UserController::class, 'update'])->name('usuarios.update');