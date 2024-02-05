<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class CreateEmail extends ModalComponent
{
    public function render()
    {
        return view('livewire.create-email');
    }
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
}
