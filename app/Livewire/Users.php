<?php

namespace App\Livewire;

use Livewire\Component;

class Users extends Component
{
    public $show_modal = false;
    public function render()
    {
        return view('livewire.users');
    }
    public function toggleModal(){
        $this->show_modal = !$this->show_modal;
    }
}
