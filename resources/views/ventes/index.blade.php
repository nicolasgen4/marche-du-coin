<x-layout>

    @unless (count($ventes) == 0)

    <div id="ventes" class="items row-wrap-center">
        @foreach($ventes as $vente)
        <x-vente-carte :vente="$vente" />
        @endforeach
    </div>

    @else
    <section>
        <h2>Aucune vente disponible</h2>
    </section>

    @endunless


    {{$ventes->links()}}


</x-layout>
