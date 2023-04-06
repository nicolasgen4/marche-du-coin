<?php

namespace App\Http\Controllers;

use App\Models\Ventes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            )->paginate(6)
        ]);
    }

    //Affiche une vente
    public function show(Ventes $vente)
    {
        return view('ventes.show', [
            'vente' => $vente
        ]);
    }

    //Affiche le formulaire de création
    public function create()
    {
        return view('ventes.create');
    }

    //Stocke une vente
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'titre' => ['required', Rule::unique('ventes', 'titre')],
            'etiquettes' => 'required',
            'vendeur' => 'required',
            'debut_vente' => 'required',
            'localisation' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('ventes', 'public');
        }

        Ventes::create($formFields);

        return redirect('/')->with('message', 'Nouvelle annonce créée avec succès !');
    }
}
