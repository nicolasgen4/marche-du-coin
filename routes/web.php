<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Afficher toutes les ventes
Route::get('/', [VentesController::class, 'index']);

//Afficher formulaire de création de vente
Route::get('/ventes/create', [VentesController::class, 'create'])->middleware('auth');

//Enregistrer une vente
Route::post('/ventes', [VentesController::class, 'store'])->middleware('auth');

//Afficher formulaire de modification
Route::get('ventes/{vente}/edit', [VentesController::class, 'edit'])->middleware('auth');

//Enregistrer une vente modifiée
Route::put('ventes/{vente}', [VentesController::class, 'update'])->middleware('auth');

//Supprimer une vente
Route::delete('ventes/{vente}', [VentesController::class, 'destroy'])->middleware('auth');

//Afficher une seule vente
Route::get('/ventes/{vente}', [VentesController::class, 'show']);

//Afficher formulaire d'enregistrement
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Enregistrer un utilisateur
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

//Déconnexion de utilisateur
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Afficher formulaire de connexion
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Connecter l'utilisateur
Route::post('users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');
