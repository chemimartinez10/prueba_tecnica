<?php

namespace App\Livewire;

use App\Models\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public User $user;

    public function mount(int $user_id)
    {
        $this->user = User::find($user_id);
    }
    public function render()
    {
        return view('livewire.delete-user');
    }
    public function delete()
    {
        $user = User::find($this->user->id);
        $log = Log::create([
            'user_id' => Auth::user()->id,
            'type' => 'Usuario',
            'description' => 'Eliminación de usuario ' . $user->email,
        ]);
        $user->delete();

        $this->forceClose()->closeModal();
        $this->redirect('/users', false);

    }
    public function cancel()
    {
        $this->forceClose()->closeModal();
    }
}
