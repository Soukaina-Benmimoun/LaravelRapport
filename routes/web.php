<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recherche/{idCabinet}', [NotaireController::class, 'recherche'])->name('recherche');
Route::post('/supprimerTous', [NotaireController::class, 'supprimerTous'])->name('supprimerTous');
Route::get('/verifier/{numdossier}', [NotaireController::class, 'verifier'])->name('verifier');

