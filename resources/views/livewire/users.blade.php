<div>
    <h1 class="font-semibold text-3xl">Usuarios</h1>
    <section>
        <button
            class="bg-[#4d55e4] text-white rounded tracking-[2px] uppercase font-semibold transition-all duration-[0.25s] ease-[ease-in] p-2 border-2 border-solid border-[#4d55e4];"
            wire:click="$dispatch('openModal', { component: 'create-user' })"
            >
            Nuevo usuario
        </button>
        <livewire:user-table />
    </section>
</div>