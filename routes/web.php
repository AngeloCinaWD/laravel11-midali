<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// match mi permette di avere la stessa route con metodi http diversi
Route::match(['get', 'post'], '/prova', function() {
    $ciao = 'ciao';
    return $ciao;
});

// any mi permette di utilizzare qualsiasi metodo http sulla stessa rotta
Route::any('/prova2', function () {
    return 'rotta che risponde a qualsiasi metodo http';
});

// raggruppare le varie rotte secondo un prefisso
// esempio /admin/users
// solo /users non funzionerebbe
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'ecco gli utenti';
    });
    Route::get('/settings', function () {
        return 'impostazioni';
    });
});

// posso dare un nome alle rotte per poi richiamarle in giro per il codice tramite route('nome rotta')
Route::get('/rottanominata', [FintoController::class], 'nome funzione del finto controller')->name('nome rotta');
route('nome rotta');

