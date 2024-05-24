<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('usuario.login');
});

Route::get('logout', function () {
    return view('home');
});

Route::get('catalogo', function () {
    return view('catalogo.principal');
});

Route::get('catalogo/create', function () {
    return view('catalogo.create');
});

Route::get('catalogo/show/{id}', function ($id) {
    return view('catalogo.show',['id'=>$id]);
});

Route::get('catalogo/edit/{id}', function ($id) {
    return view('catalogo.edit',['id'=>$id]);
});
