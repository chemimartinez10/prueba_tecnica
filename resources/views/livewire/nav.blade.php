<header>
    <div class="logo">
        <h2>
            SESAWS S.R.L.
        </h2>
    </div>
    <nav>
        <a href="/" wire:navigate @if($page=='login') class="selectedPage" @endif>Inicio</a>
        <a href="/emails" wire:navigate @if($page=='emails') class="selectedPage" @endif>Correos</a>
        <a href="/users" wire:navigate @if($page=='users') class="selectedPage" @endif>Usuarios</a>
        <a href="/logout" wire:navigate >Cerrar sesión</a>
    </nav>
</header>