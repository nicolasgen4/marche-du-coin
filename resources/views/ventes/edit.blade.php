<x-layout>
    <section class="column-center formulaire">
        <h2>Modifier une annonce</h2>
        <p>{{$vente->titre}}</p>
        <form action="/ventes/{{$vente->id}}" method="post" enctype="multipart/form-data" class="column-btw">
            @csrf
            @method('PUT')
            <div class="champ row-btw">
                <div class="column-btw">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" accept=".jpg, .png, .gif, .webp">
                </div>
                <img src="{{$vente->image ? asset('storage/' . $vente->image) : asset('/images/default.webp')}}" alt="{{$vente->titre}}">
                @error('image')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" value="{{$vente->titre}}">
                @error('titre')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="etiquettes">Étiquettes</label>
                <input type="text" name="etiquettes" id="etiquettes" value="{{$vente->etiquettes}}">
                @error('etiquettes')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="vendeur">Vendeur</label>
                <input type="text" name="vendeur" id="vendeur" value="{{$vente->vendeur}}">
                @error('vendeur')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="debut_vente">Début de la vente</label>
                <input type="text" name="debut_vente" id="debut_vente" value="{{$vente->debut_vente}}">
                @error('debut')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="fin_vente">Fin de la vente</label>
                <input type="text" name="fin_vente" id="fin_vente" value="{{$vente->fin_vente}}">
                @error('fin')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="localisation">Localité</label>
                <input type="text" name="localisation" id="localisation" value="{{$vente->localisation}}">
                @error('localisation')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{$vente->email}}">
                @error('email')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="telephone">Téléphone</label>
                <input type="tel" name="telephone" id="telephone" value="{{$vente->telephone}}">
                @error('telephone')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="site_web">Site Web</label>
                <input type="url" name="site_web" id="site_web" value="{{$vente->site_web}}">
                @error('site_web')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ column-btw">
                <label for="description">Description</label>
                <textarea name="description" id="description">{{$vente->description}}</textarea>
                @error('description')
                <p class="erreur">{{$message}}</p>
                @enderror
            </div>
            <div class="champ row-center">
                <button class="bouton" type="submit">Enregistrer</button>
                <a class="bouton" href="/ventes/{{$vente->id}}">Annuler</a>
            </div>
        </form>
    </section>

</x-layout>