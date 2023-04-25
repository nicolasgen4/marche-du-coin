<x-layout>
    <section class="column-center formulaire">
        <h2>Identifiez-vous</h2>
        <form action="/users/authenticate" method="post" class="column-btw">
            @csrf
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
                <button class="bouton" type="submit">Connexion</button>
                <a href="/register">Vous n'avez pas de compte ?</a>
            </div>
        </form>
    </section>

</x-layout>