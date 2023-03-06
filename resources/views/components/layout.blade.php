<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le marché du coin</title>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/global.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/composants.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/sections.css')}}" media="screen">
</head>

<body>

    <header id="header-nav" class="column-btw-center">
        <x-vente-nav :nav/>
        <x-vente-hero :hero/>
    </header>
    <main class="wrapper column-center">
        <!--Affichage des vues-->
        {{$slot}}
    </main>
    <footer>
        <x-vente-footer :footer/>
    </footer>

</body>

</html>
