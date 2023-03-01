@extends('layout')

@section('content')
@include('partials._search')

<article class="article">
    <img src="{{asset('images')}}/{{$vente->image}}" alt="{{$vente->titre}}">
    <h2>{{$vente->titre}}</h2>
    <article>
        <h3>{{$vente->vendeur}}</h3>
        <address>{{$vente->localisation}}</address>
        <x-vente-etiquettes :etiquettesSpv="$vente->etiquettes"/>
    </article>
    <article>
        <h4>Du {{$vente->debut_vente}} à {{$vente->fin_vente}}</h4>
        <p>{{$vente->description}}</p>
    </article>
    <article>
        <h5>Contacts</h5>
        <ul>
            <li>{{$vente->telephone}}</li>
            <li>{{$vente->email}}</li>
            <li>{{$vente->site_web}}</li>
        </ul>
    </article>
</article>
@endsection
