<?php

namespace App\Livewire;

use App\Models\Log;
use App\Models\User;
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
    public function loginUser()
    {
        $validatedData = $this->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|min:8|max:100',
        ]);

        if (Auth::attempt($validatedData)) {
            session()->regenerate();
            $log = Log::create([
                'user_id' => User::where('email','=', $validatedData['email'])->first()->id,
                'type' => 'Seguridad',
                'description' => 'Ingreso de usuario',
            ]);

            $this->redirect('/', false);
        } else {
            $this->addError('email', 'Las credenciales proporcionadas no son las correctas');
        }
    }
}
