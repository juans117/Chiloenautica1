<?php

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

Route::get('/Login', function () {
    return view('Login');
})->name('Login');

Route::get('/principal', function () {
    return view('principal');
})->name('principal');;

Route::get('/proveedores', function () {
    return view('Proveedores');
})->name('proveedores');

Route::get('/Clientes', function () {
    return view('Clientes');
})->name('Clientes');

Route::get('/repuestos', function () {
    return view('repuestos');
})->name('repuestos');

Route::get('/AgregarClientes', function () {
    return view('AgregarClientes');
})->name('AgregarClientes');

Route::get('/AgregarProductos', function () {
    return view('AgregarProductos');
})->name('AgregarProductos');

Route::get('/AgregarProveedores', function () {
    return view('AgregarProveedores');
})->name('AgregarProveedores');

Route::get('/PrincipalFinanzas', function () {
    return view('PrincipalFinanzas');
})->name('PrincipalFinanzas');

Route::get('/VentasDiarias', function () {
    return view('VentasDiarias');
})->name('VentasDiarias');

Route::get('/VentasMensuales', function () {
    return view('VentasMensuales');
})->name('VentasMensuales');

Route::resource('books', 'BookController');
