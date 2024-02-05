<?php

namespace App\Livewire;

use App\Models\Email;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Emails extends Component
{
    public $emails;
    public function mount(){
        $this->emails = Email::where("from_user",Auth::user()->id)->get();
    }
    public function render()
    {
        return view('livewire.emails');
    }
}
