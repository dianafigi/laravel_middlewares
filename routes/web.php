<?php

// use App\Http\Middleware\PrimeiroMiddleware; // utilizado no Metodo 1 e 2, o Metodo 3 nao é necessario

// Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro'); //chamar o middleware  - Metodo 1 para chamar middleware

// Route::get('/usuarios', 'UsuarioControlador@index'); //Metodo 2 para chamar middleware

Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro','segundo');

Route::get('/terceiro', function() {
  return 'Passou pelo terceiro middleware';
})->middleware('terceiro:joao,20');
