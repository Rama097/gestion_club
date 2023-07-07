<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route pour afficher tous les clubs
Route::get('/clubs', [ClubController::class,'index'])->name('clubindex');

// Route pour afficher tous les clubs
Route::get('/clubs.edit/{id}', [ClubController::class,'edit'])->name('clubedit');

// Route pour afficher la page d'acceuil
Route::get('/', [WelcomeController::class,'index'])->name('welcomeindex');

Route::get('/clubs.create', [ClubController::class,'create']);

/*Route pour afficher un club spécifique
Route::get('/clubs/{id}', 'ClubController@show');*/ 

// Route pour créer un nouveau club
Route::post('/clubs.store', [ClubController::class, 'store']);

// Route pour mettre à jour un club existant
Route::put('/clubs/{id}', [ClubController::class,'update']);

// Route pour supprimer un club
Route::delete('/clubs/{id}', [ClubController::class,'destroy'])->name('clubdestroy');

// Route pour afficher tous les membres
Route::get('/membres', [MembreController::class,'index'])->name('membresindex');

Route::get('/membres_create', [MembreController::class,'create']);

// Route pour afficher un membre spécifique
Route::get('/membres/{id}', [MembreController::class,'show']);

// Route pour créer un nouveau membre
Route::post('/membres', [MembreController::class,'store']);

// Route pour mettre à jour un membre existant
Route::put('/membres/{id}', [MembreController::class,'update']);

// Route pour supprimer un membre
Route::delete('/membres/{id}', [MembreController::class,'destroy']);

// Route pour afficher toutes les activités
Route::get('/activites', [ActiviteController::class,'index'])->name('activiteindex');

Route::get('/activites_create', [ActiviteController::class,'create']);

// Route pour afficher une activité spécifique
Route::get('/activites/{id}', [ActiviteController::class,'show']);

// Route pour créer une nouvelle activité
Route::post('/activites', [ActiviteController::class,'store']);

// Route pour mettre à jour une activité existante
Route::put('/activites/{id}', [ActiviteController::class,'update']);

// Route pour supprimer une activité
Route::delete('/activites/{id}', [ActiviteController::class,'destroy']);