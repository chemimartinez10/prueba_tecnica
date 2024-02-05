<div class="flex flex-row items-center">
    @isset($user)

    <a href="#" wire:click="$dispatch('openModal', { component: 'edit-user', arguments: { user_id: {{ $user->id }} } })">
        <x-feathericon-edit />
    </a>
    <a href="#"
        wire:click="$dispatch('openModal', { component: 'delete-user', arguments: { user_id: {{ $user->id }} } } )">
        <x-feathericon-trash style="color: red" />
    </a>

    @endisset
</div>