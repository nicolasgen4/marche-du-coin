@props(['vente'])


<section class="item column-btw-center">
    <img src="images/{{$vente->image}}" alt="{{$vente->titre}}">
    <h2>{{$vente->titre}}</h2>
    <section>
        <h3>{{$vente->debut_vente}}</h3>
        <h4>{{$vente->localisation}}</h4>
        <x-vente-etiquettes :etiquettesSpv="$vente->etiquettes" />
        <p>{{mb_strimwidth(ucfirst($vente->description), 0, 160, '...')}}</p>
    </section>
    <a href="/ventes/{{$vente->id}}">Découvrir</a>
</section>