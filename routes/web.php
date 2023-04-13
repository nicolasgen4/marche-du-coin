<?php

use App\Http\Controllers\VentesController;
use Illuminate\Support\Facades\Route;

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

//Toutes les ventes
Route::get('/', [VentesController::class, 'index']);

//Formulaire de création
Route::get('/ventes/create', [VentesController::class, 'create']);

//Stockage d'une vente
Route::post('/ventes', [VentesController::class, 'store']);

//Formulaire de modification
Route::get('ventes/{vente}/edit', [VentesController::class, 'edit']);

//Envoyer une vente modifiée
Route::put('ventes/{vente}', [VentesController::class, 'update']);

//Supprimer une vente
Route::delete('ventes/{vente}', [VentesController::class, 'destroy']);

//Une seule vente
Route::get('/ventes/{vente}', [VentesController::class, 'show']);
