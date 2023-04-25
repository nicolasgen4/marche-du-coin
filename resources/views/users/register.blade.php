<x-layout>
    <section class="column-center formulaire">
        <h2>Créer un compte</h2>
        <form action="/users" method="post" class="column-btw">
            @csrf
            <div class="champ column-btw">
                <label for="name">Nom et prénom</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
                @error('name')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{old('email')}}">
                @error('email')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" value="{{old('password')}}">
                @error('password')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <button class="bouton" type="submit">Enregistrer</button>
                <a href="/login">Vous avez déjà un compte ?</a>
            </div>
        </form>
    </section>

</x-layout>