<?php

namespace App\Livewire;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login')->layout('components.layouts.auth');
    }
    public function loginUser(){
        $validatedData = $this->validate([
            'email'=> 'required|email|max:100',
            'password'=> 'required|min:8|max:100',
        ]);

        if(Auth::attempt($validatedData)){
            session()->regenerate();
            $this->redirect('/', false);
        }
        else{
            $this->addError('email', 'Las credenciales proporcionadas no son las correctas');
        }
    }
}
