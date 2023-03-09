<?php

use App\Http\Controllers\VentesController;
use Illuminate\Support\Facades\Route;
use App\Models\Ventes;

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

//Une seule vente
Route::get('/ventes/{vente}', [VentesController::class, 'show']);
