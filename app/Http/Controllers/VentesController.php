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

        $formFields['user_id'] = auth()->id();

        Ventes::create($formFields);

        return redirect('/')->with('message', 'Nouvelle annonce créée avec succès !');
    }

    //Affiche le formulaire de modification
    public function edit(Ventes $vente)
    {
        return view('ventes.edit', ['vente' => $vente]);
    }

    //Modifie une vente
    public function update(Request $request, Ventes $vente)
    {
        //Vérifie la connexion de l'utilisateur
        if ($vente->user_id != auth()->id()) {
            abort(403, 'Action non autorisée');
        }

        $formFields = $request->validate([
            'titre' => 'required',
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

        $vente->update($formFields);

        return back()->with('message', 'Annonce modifiée avec succès !');
    }

    //Supprimer une vente
    public function destroy(Ventes $vente)
    {
        //Vérifie la connexion de l'utilisateur
        if ($vente->user_id != auth()->id()) {
            abort(403, 'Action non autorisée');
        }

        $vente->delete();
        return redirect('/')->with('message', 'Annonce supprimée avec succès !');
    }

    //Gérer ses ventes
    public function manage()
    {
        return view('ventes.manage', ['ventes' => auth()->user()->ventes()->get()]);
    }
}
