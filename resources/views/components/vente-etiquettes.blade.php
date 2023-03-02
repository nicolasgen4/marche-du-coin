@props(['etiquettesSpv'])

@php
$etiquettes = explode(',', $etiquettesSpv);
@endphp

<ul class="tags row">
    @foreach ($etiquettes as $etiquette)
    <li><a href="/?tag={{$etiquette}}" class="tag">{{ucfirst($etiquette)}}</a></li>
    @endforeach
</ul>
