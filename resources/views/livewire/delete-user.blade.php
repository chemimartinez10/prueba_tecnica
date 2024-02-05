<section>
    <p>¿Estás seguro de que deseas eliminar al usuario {{$user->identification}}?</p>
    <div>
        <button class="button" wire:click='cancel()'>
            Cancelar
        </button>
        <button class="button-delete" wire:click='delete()'>
            Eliminar
        </button>
    </div>
</section>