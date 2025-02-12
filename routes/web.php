<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/usuarios', function() {
    return [
        'id' => 1,
        'name' => 'Teste Henrique'
    ];
});