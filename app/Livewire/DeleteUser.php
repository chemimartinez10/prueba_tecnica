<?php

namespace App\Livewire;

use App\Models\User;
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
        $user->delete();
        $this->forceClose()->closeModal();
        $this->redirect('/users', false);

    }
    public function cancel()
    {
        $this->forceClose()->closeModal();
    }
}
