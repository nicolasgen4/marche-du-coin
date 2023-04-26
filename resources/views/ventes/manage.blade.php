<x-layout>
    <section>
        <h2>
            <a href="/ventes/create">Créer une nouvelle vente</a>
        </h2>
    </section>
    <section class="item column-btw">
        @unless ($ventes->isEmpty())
        @foreach ($ventes as $vente)
        <h2>{{$vente->titre}}</h2>
        <p>{{$vente->description}}</p>
        <a href="/ventes/{{$vente->id}}/edit" class="bouton">Modifier</a>
        <form method="POST" action="/ventes/{{$vente->id}}">
            @csrf
            @method('DELETE')
            <button class="bouton">Supprimer</button>
        </form>
        @endforeach
        @else
        <p>Vous n'avez aucune vente</p>
        @endunless
    </section>
</x-layout>