<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Password;
use LivewireUI\Modal\ModalComponent;

class CreateUser extends ModalComponent
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $birth_date;
    public $identification;
    public $phone;
    public function render()
    {
        return view('livewire.create-user');
    }
    public function submit(){
        $validated = $this->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> ['required','string','confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
            'password_confirmation'=> 'required',
            'birth_date'=> 'required|before:'.Carbon::now()->subYears(18)->format('Y-m-d'),
            'identification'=> 'required|string|max:11',
            'phone'=> 'string|max:10|min:10',
        ]);
        $createdUser = User::create($validated);
        $createdUser->assignRole('user');
        $this->forceClose()->closeModal();
        $this->redirect('/users',false);
    }
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
}
