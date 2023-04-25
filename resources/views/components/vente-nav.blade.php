<nav class="main-menu row-btw">
    <a href="/" class="logo">
        <figure class="row-center">
            <svg width="48" height="41" fill="#2D2D2D" xmlns="http://www.w3.org/2000/svg">
                <title>Le marché du coin</title>
                <path
                    d="M35.367 15.078 25.811.908C25.396.301 24.698 0 24 0s-1.396.302-1.81.929l-9.557 14.149H2.182c-1.2 0-2.182.972-2.182 2.16 0 .195.022.389.087.583L5.63 37.846A4.332 4.332 0 0 0 9.82 41h28.363a4.378 4.378 0 0 0 4.21-3.154l5.542-20.025.066-.583c0-1.188-.982-2.16-2.182-2.16h-10.45Zm-17.912 0L24 5.573l6.546 9.505H17.455ZM24 32.359c-2.4 0-4.364-1.944-4.364-4.32 0-2.376 1.964-4.32 4.364-4.32s4.364 1.944 4.364 4.32c0 2.376-1.964 4.32-4.364 4.32Z" />
            </svg>
            <figcaption>Le marché du coin</figcaption>
        </figure>
    </a>
    <ul class="menu row-center">
        @auth
        <li>Bienvenue {{auth()->user()->name}}</li>
        <li><a href="/ventes/manage" class="bouton">Gérer mes annonces</a></li>
        <li>
            <form action="/logout" method="post">
                @csrf
                <button class="bouton" type="submit">Déconnexion</button>
            </form>
        </li>
        @else
        <li>Vous êtes un producteur du Rouillacais ?</li>
        <li><a href="/register" class="bouton">Créer un compte</a></li>
        <li><a href="/login" class="bouton">Connexion</a></li>
        @endauth
    </ul>
</nav>
