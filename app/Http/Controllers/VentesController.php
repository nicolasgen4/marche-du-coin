<?php

namespace App\Http\Controllers;

use App\Models\Ventes;
use Illuminate\Http\Request;

class VentesController extends Controller
{
    //Affiches toutes les ventes
    public function index()
    {
        return view('ventes.index', [
            'ventes' => Ventes::latest()->filter(
                request([
                    'tag',
                    'search'
                ])
            )->get()
        ]);
    }

    //Affiche une vente
    public function show(Ventes $vente)
    {
        return view('ventes.show', [
            'vente' => $vente
        ]);
    }
}
