<x-layout>

    <article class="article column-btw">
        <img src="{{$vente->image ? asset('storage/' . $vente->image) : asset('/images/default.webp')}}"
            alt="{{$vente->titre}}">
        <h2>{{$vente->titre}}</h2>
        <article class="informations column-btw">
            <h3><span class="information">Vendeur :</span> {{$vente->vendeur}}</h3>
            <address><span class="information">Localité :</span> {{$vente->localisation}}</address>
            <x-vente-etiquettes :etiquettesSpv="$vente->etiquettes" />
        </article>
        <article class="informations column-btw">
            <h4><span class="information">Durée de la vente :</span> du {{$vente->debut_vente}} au {{$vente->fin_vente}}
            </h4>
            <p>{{$vente->description}}</p>
        </article>
        <article class="informations column-btw">
            <h5 class="information">Contacts</h5>
            <ul>
                <li><span class="information">E-mail :</span> {{$vente->email}}</li>
                <li><span class="information">Téléphone :</span> {{$vente->telephone}}</li>
                <li><span class="information">Site Web :</span> {{$vente->site_web}}</li>
            </ul>
        </article>
        @if (auth()->id() === $vente->user_id)
        <section class="informations column-btw">
            <h6 class="information">Gérer l'annonce</h6>
            <a href="/ventes/{{$vente->id}}/edit" class="bouton">Modifier</a>
            <form method="POST" action="/ventes/{{$vente->id}}">
                @csrf
                @method('DELETE')
                <button class="bouton">Supprimer</button>
            </form>
        </section>
        @endif
    </article>

</x-layout>
