<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    //Affiche le formulaire d'enregistrement
    public function create()
    {
        return view('users.register');
    }

    //Créer un utilisateur
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash
        $formFields['password'] = bcrypt($formFields['password']);

        //Crée l'utilisateur
        $user = User::create($formFields);

        //Connexion
        auth()->login($user);

        return redirect('/')->with('message', 'Utilisateur créé avec succès');
    }

    //Déconnecter un utilisateur
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Vous avez été déconnecté(e) avec succès !');
    }
}
