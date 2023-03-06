<x-layout>

@unless (count($ventes) == 0)

<div class="items row-wrap-center">
    @foreach($ventes as $vente)
    <x-vente-carte :vente="$vente" />

    @endforeach
</div>

@else
<section>
    <h2>Aucune vente disponible</h2>
</section>

@endunless

</x-layout>
