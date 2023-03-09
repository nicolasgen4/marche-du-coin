<x-layout>
    <section class="column-btw">
        <h2>Enregistrer une vente</h2>
        <form action="/ventes" method="POST">
            @csrf
            {{--<div class="field column-btw">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>--}}
            <div class="field column-btw">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre">
                @error('titre')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="tags">Étiquettes</label>
                <input type="text" name="tags" id="tags">
                @error('tags')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="vendeur">Vendeur</label>
                <input type="text" name="vendeur" id="vendeur">
                @error('vendeur')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="debut">Début de la vente</label>
                <input type="text" name="debut" id="debut">
                @error('debut')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="fin">Fin de la vente</label>
                <input type="text" name="fin" id="fin">
                @error('fin')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="localisation">Localité</label>
                <input type="text" name="localisation" id="localisation">
                @error('localisation')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                @error('email')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="telephone">Téléphone</label>
                <input type="tel" name="telephone" id="telephone">
                @error('telephone')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="siteweb">Site Web</label>
                <input type="url" name="siteweb" id="siteweb">
                @error('siteweb')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="description">Description</label>
                <textarea name="description" id="description"></textarea>
                @error('description')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <button class="bouton" type="submit">Enregistrer</button>
            </div>
        </form>
    </section>

</x-layout>