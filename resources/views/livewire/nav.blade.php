<header>
    <div class="logo">
        <h2>
            SESAWS S.R.L.
        </h2>
    </div>
    <nav>
        <a href="/" wire:navigate @if($page=='/' ) class="selectedPage" @endif>Inicio</a>
        <a href="/emails" wire:navigate @if($page=='emails' ) class="selectedPage" @endif>Correos</a>
        @if (Auth::user()->hasRole('admin'))
            <a href="/users" wire:navigate @if($page=='users' ) class="selectedPage" @endif>Usuarios</a>
            <a href="/logs" wire:navigate @if($page=='logs' ) class="selectedPage" @endif>Log</a>
        @endif
        <a href="#" wire:click="logout">Cerrar sesión</a>
    </nav>
</header>