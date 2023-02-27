@props(['etiquettesSpv'])

@php
$etiquettes = explode(',', $etiquettesSpv);
@endphp

<ul>
    @foreach ($etiquettes as $etiquette)
    <li><a href="/?tag={{$etiquette}}">{{$etiquette}}</a></li>
    @endforeach
</ul>