<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Models\User;
use Symfony\Component\Routing\Route as RoutingRoute;

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
Route::get('/productos_create', [ProductController::class, 'create'])->name('productos.create');
Route::get('/productos_show', [ProductController::class, 'show'])->name('productos.show');

/*  PROVEEDORES   */
Route::get('/proveedores_create', [ProviderController::class, 'create'])->name('proveedores.create');
Route::get('/proveedores_show', [ProviderController::class, 'show'])->name('proveedores.show');

/*  CLIENTES     */


/*----------------------------------------------------------------------------------------------*/
/*                                          METODOS                                     */

/*               ********************** Usuarios **********************                  */
/* Guardar Usuarios */
Route::post('/usuarios_create', [UserController::class, 'store'])->name('usuarios.store');

/* Editar Usuarios */
Route::get('/usuarios_edit_{usuario}', [UserController::class, 'edit'])->name('usuarios.edit');

/* Actualizar Usuario */
Route::put('usuarios_{usuario}', [UserController::class, 'update'])->name('usuarios.update');

/* Borrar Usuario */
Route::delete('usuarios/{usuario}', [UserController::class, 'destroy'])->name('usuarios.destroy');


/*               ********************** Productos **********************                  */
/* Guarda Productos */
Route::post('/productos_create', [ProductController::class, 'store'])->name('productos.store');

/* Editar Productos */
Route::get('/productos_edit_{producto}', [ProductController::class, 'edit'])->name('productos.edit');

/* Actualiza Productos */
Route::put('productos_{producto}',[ProductController::class, 'update'])->name('productos.update');

/* Borrar Productos */
Route::delete('productos/{producto}', [ProductController::class, 'destroy'])->name('productos.destroy');


/*               ********************** Proveedores **********************                  */
/* Guarda Proveedores */
Route::post('/proveedores_create', [ProviderController::class, 'store'])->name('proveedores.store');

/* Editar Proveedores */
Route::get('/proveedores_edit_{proveedor}', [ProviderController::class, 'edit'])->name('proveedores.edit');

/* Actualizar Proveedores */
Route::put('proveedores_{proveedor}', [ProviderController::class, 'update'])->name('proveedores.update');

/* Borrar Proveedores */
Route::delete('proveedores/{proveedor}', [ProviderController::class, 'destroy'])->name('proveedores.destroy');