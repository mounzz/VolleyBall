<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\ContinentsController;


//ROUTE HOME

Route::get('/home', [HomeController::class, "index"])->name('Home');

//ROUTES EQUIPES

Route::get('/equipes', [ContinentsController::class, "index"]);
Route::post('/store',[EquipeController::class, 'store']);

// ROUTES JOUEURS
Route::get('/joueurs', [JoueurController::class, "index"]);
Route::post('/joueurs/store', [JoueurController::class, "store"]);

//ROUTE EQUIPES LISTES

Route::get('/equipesListe', [EquipeController::class, "index"])->name('EquipesListe');
Route::get('/EquipeEdit/{id}', [EquipeController::class, "show"]);
Route::delete('/equipeliste/{id}/delete', [EquipeController::class, "destroy"]);
Route::put('/equipeEdit/{id}/update', [EquipeController::class, "update"]);

//ROUTE JOUEURS LISTES

Route::get('/JoueursListe', [JoueurController::class, "create"])->name('JoueursListe');
Route::get('/JoueursEdit/{id}', [JoueurController::class, "show"]);
Route::delete('/Joueursliste/{id}/delete', [JoueurController::class, "destroy"]);
Route::put('/JoueursEdit/{id}/update', [JoueurController::class, "update"]);
