<?php

Route::get('/', function () {
    return view('inicio');
});

Route::get('clientes', function () {
    return view('clientes');
});