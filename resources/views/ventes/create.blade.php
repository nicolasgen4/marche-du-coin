<x-layout>
    <section class="column-btw">
        <h2>Enregistrer une vente</h2>
        <form action="/ventes" method="POST">
            @csrf
            <div class="field column-btw">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" value="{{old('image')}}">
                @error('image')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" value="{{old('titre')}}">
                @error('titre')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="etiquettes">Étiquettes</label>
                <input type="text" name="etiquettes" id="etiquettes" value="{{old('etiquettes')}}">
                @error('etiquettes')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="vendeur">Vendeur</label>
                <input type="text" name="vendeur" id="vendeur" value="{{old('vendeur')}}">
                @error('vendeur')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="debut_vente">Début de la vente</label>
                <input type="text" name="debut_vente" id="debut_vente" value="{{old('debut_vente')}}">
                @error('debut')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="fin_vente">Fin de la vente</label>
                <input type="text" name="fin_vente" id="fin_vente" value="{{old('fin_vente')}}">
                @error('fin')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="localisation">Localité</label>
                <input type="text" name="localisation" id="localisation" value="{{old('localisation')}}">
                @error('localisation')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{old('email')}}">
                @error('email')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="telephone">Téléphone</label>
                <input type="tel" name="telephone" id="telephone" value="{{old('telephone')}}">
                @error('telephone')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="site_web">Site Web</label>
                <input type="url" name="site_web" id="site_web" value="{{old('site_web')}}">
                @error('siteweb')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="field column-btw">
                <label for="description">Description</label>
                <textarea name="description" id="description">{{old('description')}}</textarea>
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
