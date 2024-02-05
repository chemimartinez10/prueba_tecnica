<?php

namespace App\Livewire;

use App\Models\Email;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Emails extends Component
{
    public $emails;
    public $emails_recived;
    public function mount(){
        $this->emails = Email::where("from_user",Auth::user()->id)->get();
        $this->emails_recived = Email::where("to_user",Auth::user()->id)->where("status", true)->get();
    }
    public function render()
    {
        return view('livewire.emails');
    }
}
