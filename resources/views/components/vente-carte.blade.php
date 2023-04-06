@props(['vente'])

<section class="item column-btw-center">
    <img src="{{$vente->image ? asset('storage/' . $vente->image) : asset('/images/default.webp')}}" alt="{{$vente->titre}}"
        loading="lazy">
    <h2>{{mb_strimwidth(ucfirst($vente->titre), 0, 60, '...')}}</h2>
    <section class="informations column-btw">
        <h3>Début : {{$vente->debut_vente}}</h3>
        <h4>Localité : {{$vente->localisation}}</h4>
        <x-vente-etiquettes :etiquettesSpv="$vente->etiquettes" />
        <p>{{mb_strimwidth(ucfirst($vente->description), 0, 160, '...')}}</p>
    </section>
    <a href="/ventes/{{$vente->id}}" class="bouton">Découvrir</a>
</section>
