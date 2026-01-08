<?php

use Illuminate\Support\Facades\Route;

Route::get('/secreto', function () {
    return'¡Bienvenido a la ruta secreta!';
})->middleware('check.token');
