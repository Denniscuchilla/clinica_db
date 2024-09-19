<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

//Ruta para mostra la vista show
Route::get('/products/show',function () {
    return view('/products/show',['producto'=>'Camisa Sport']);
});

//Ruta para crear mostrar la vista
Route::get('/products/create', function () {
    return view('/products/create');
});

//Ruta para mostara la vista update
Route::get('/products/update', function () {
    return view('/products/update');
});

Route::get('/inicio/info', function () {
    return view('/inicio/info');
});

Route::get('/categorias/create', function () {
    return view('/categorias/create');
});

Route::get('/categorias/show', function () {
    return view('/categorias/show');
});

Route::get('/categorias/update', function () {
    return view('/categorias/update');
});

Route::get('/cliente/create', function () {
    return view('/cliente/create');
});

Route::get('/cliente/show', function () {
    return view('/cliente/show');
});

Route::get('/cliente/update', function () {
    return view('/cliente/update');
});

Route::get('/product', "App\Http\Controllers\ProductController@index"); 