<?php

use Illuminate\Support\Facades\Route;
//ESTA ES LA PAGINA QUE CARGARA PRIMERO, ES DECIR EL "INDEX.HTML" CLÁSICO. 
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
